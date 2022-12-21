<?php

namespace App\Http\Controllers\Jpanel\Catalog;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Products;
use App\Models\Feature_products;
use App\Models\Product_image;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\Product_attributes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Image;

class ProductController extends Controller
{
    // PRODUCT LIST
    public function index()
    {
        $hasPermission = hasPermission('category', 2);
        if ($hasPermission) {
            $products = Products::orderBy('id', 'desc')->get();
            return view('jpanel.catalog.Product', compact('products'));
        } else {
            abort(403);
        }
    }
    //ADD PRODUCT
    public function create()
    {
        $hasPermission = hasPermission('category', 1);
        if ($hasPermission) {
            $categories = Category::whereNull('parent_id')->get();
            $brands = Brand::all();
            $attributes = Attribute::all();
            $attribute_values = AttributeValue::all();

            // dd($categories);
            return view('jpanel.catalog.createProduct', compact('categories', 'brands', 'attributes', 'attribute_values'));
        } else {
            abort(403);
        }
    }
    //ADD SUB CATEGORY
    public function subcategory($id)
    {
        $subcategories = Category::where('parent_id', $id)->get();
        foreach ($subcategories as $subcategory) {
            $html[] = '<option value="' . $subcategory->id . '">' . $subcategory->name . '</option>';
        }
        return response()->json($html);
    }

    // PRODUCT STATUS
    public function statusUpdate(Request $request)
    {
        $product = Products::find($request->product_id);
        $product->status = $request->status;
        $product->save();
        return response()->json(['status' => 'success', 'message' => 'Status has been changed successfully!']);
    }
    // ADD PRODUCT
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'brand' => 'required',
            'price' => 'required',
        ]);
        $products = new Products();
        if ($request->sub_category == null) {
            $products->category_id = $request->category;
        } else {
            $products->category_id = $request->sub_category;
        }
        $products->brand_id = $request->brand;
        $products->title = $request->title;
        $products->shortDescription = $request->summary;
        $products->longDescription = $request->long_desc;
        $products->price = $request->price;
        $products->save();

        if ($request->is_featured != null) {
            $featured = new Feature_products();
            $featured->product_id = $products->id;
            $featured->save();
        }
        if ($products) {
            return redirect('jpanel/catalog/product/add')->with('success', 'Product has been created successfully!');
        } else {
            return redirect('jpanel/catalog/product/add')->with('error', 'Something went wrong. Try again.');
        }
    }
    //DELETE PRODUCT
    public function delete(Request $request)
    {
        $imageExits = Product_image::where('product_id', $request->id)->get();
        foreach ($imageExits as $key => $image) {
            $thumbnailPath = storage_path('app/public/images/product/th/');
            $mainImagePath = storage_path('app/public/images/product/');
            if (file_exists($thumbnailPath . '' . $image->image_name)) {
                @unlink($thumbnailPath . '' . $image->image_name);
            }
            if (file_exists($mainImagePath . '' . $image->image_name)) {
                @unlink($mainImagePath . '' . $image->image_name);
            }
        }
        Products::find($request->id)->delete();

        return response()->json(['status' => 'success', 'message' => 'Product Attribute has been deleted successfully!']);
    }
    //UPLOAD PRODUCT
    public function upload($id)
    {
        $hasPermission = hasPermission('category', 2);
        if ($hasPermission) {
            $images = Product_image::where('product_id', $id)->get();
            return view('jpanel.catalog.Productimage', compact('images', 'id'));
        } else {
            abort(403);
        }
    }

    public function storeImage(Request $request)
    {
        $image = $request->file('productImage');
        $thumbnailPath = storage_path('app/public/images/product/th/');
        $mainImagePath = storage_path('app/public/images/product/');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $size_x = null;
        $size_y = 80;
        resizeImage($image, $thumbnailPath, $mainImagePath, $imageName, $size_x, $size_y);
        $orderImage = new Product_image();
        $orderImage->product_id = $request->productId;
        $orderImage->image_name = $imageName;
        $orderImage->save();

        return redirect()->back();
    }

    //IMAGE ORDER
    public function imageOrder(Request $request)
    {
        $product = Product_image::find($request->id);

        $order_check = Product_image::where('product_id', $request->product_id)
            ->where('image_order', $request->orderNo)
            ->get()
            ->first();
        if ($order_check) {
            return response()->json(['status' => 'error', 'message' => 'This order is allocated to another image !']);
        } else {
            $product->image_order = $request->orderNo;
            $product->save();
            return response()->json(['status' => 'success', 'message' => 'Order image has been Updated successfully!']);
        }
    }
    //DELETE IMAGE
    public function imageDelete($id)
    {
        $itemDelete = Product_image::where('id', '=', $id)
            ->get()
            ->first();
        $thumbnailPath = storage_path('app/public/images/product/th/' . $itemDelete->image_name);
        $mainImagePath = storage_path('app/public/images/product/' . $itemDelete->image_name);
        if (file_exists($thumbnailPath)) {
            @unlink($thumbnailPath);
        }
        if (file_exists($mainImagePath)) {
            @unlink($mainImagePath);
        }

        $product_image_delete = Product_image::where('id', '=', $id);
        if (!is_null($product_image_delete)) {
            $product_image_delete->delete();
        }
        return redirect()->back();
    }
    //PRODUCT EDIT
    public function edit($id)
    {
        $hasPermission = hasPermission('category', 2);
        if ($hasPermission) {
            $product = Products::where('id', $id)->first();
            $categories = Category::whereNull('parent_id')->get();
            $brands = Brand::all();
            $feature_product = Feature_products::where('product_id', $id)->get();

            if ($feature_product) {
                $feature = 1;
            } else {
                $feature = 0;
            }

            if ($product->category->parent_id == null) {
                $cat = $product->category->name;
                $cat_id = $product->category->id;
                $sub_cat = '';
                $sub_cat_id = '';
            } else {
                $parent = $product->category->parent_id;
                $category = Category::where('parent_id', $parent)->get();
                $cat = $category[0]->parent->name;
                $cat_id = $category[0]->parent->id;

                $sub_cat = $product->category->name;
                $sub_cat_id = $product->category->id;
            }
            // dd($product_attributes);
            return view('jpanel.catalog.editProduct', compact('product', 'feature', 'sub_cat_id', 'categories', 'brands', 'cat_id', 'cat', 'sub_cat'));
        } else {
            abort(403);
        }
    }
    // STORE EDITED PRODUCT
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'brand' => 'required',
            'brand' => 'required',
            'price' => 'required',
        ]);

        // if ($request->sub_category == null) {
        //     $products->category_id = $request->category;
        // } else {
        //     $products->category_id = $request->sub_category;
        // }

        $products = Products::where('id', $id)->update([
            'category_id' => $request->sub_category,
            'brand_id' => $request->brand,
            'title' => $request->title,
            'shortDescription' => $request->summary,
            'longDescription' => $request->long_desc,
            'price' => $request->price,
        ]);

        if ($request->is_featured == null) {
            $featured = Feature_products::where('product_id', $id);
            if (!is_null($featured)) {
                $featured->delete();
            }
        }
        if ($products) {
            return redirect('jpanel/catalog/products')->with('success', 'Product has been updated successfully!');
        } else {
            return redirect('jpanel/catalog/products')->with('error', 'Something went wrong. Try again.');
        }
    }
    //ATTRIBUTE PAGE
    public function attribute($id)
    {
        $hasPermission = hasPermission('category', 2);
        if ($hasPermission) {
            $attributes = Attribute::all();
            $product_attributes = Product_attributes::where('product_id', $id)->get();
            $product_name = Products::where('id', $id)->get();
            // dd($product_name);
            return view('jpanel.catalog.productAttribute', compact('attributes', 'product_name', 'product_attributes', 'id'));
        } else {
            abort(403);
        }
    }

    // ATTRIBUTE VALUES
    public function attribute_value($id)
    {
        $attributeValues = AttributeValue::where('attribute_id', $id)->get();
        foreach ($attributeValues as $attributeValue) {
            $html[] = '<option value="' . $attributeValue->id . '">' . $attributeValue->value . '</option>';
        }
        return response()->json($html);
    }

    // STORE ATTRIBUTES
    public function attribute_store(Request $request)
    {
        $request->validate([
            'attribute_id' => 'required',
            'attribute_value_id' => 'required',
        ]);
        $product_attribute = new Product_attributes();
        $product_attribute->product_id = $request->product_id;
        $product_attribute->attribute_id = $request->attribute_id;
        $product_attribute->attribute_value_id = $request->attribute_value_id;
        $product_attribute->save();

        return redirect()->back();
    }
    //DELETE ATTRIBUTES
    public function deleteProductAttribute(Request $request)
    {
        Product_attributes::find($request->id)->delete();
        return response()->json(['status' => 'success', 'message' => 'Product Attribute has been deleted successfully!']);
    }
}
