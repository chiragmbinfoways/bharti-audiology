<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cms;
use App\Models\Inqueries;
use App\Models\Settings;
use App\Models\Support;
use App\Models\Category;
use App\Models\Products;
use App\Models\Brand;
use App\Models\Product_image;
use App\Models\Product_attributes;
use App\Models\ProductInquery;

class homeController extends Controller
{
    // HOME PAGE
    public function index()
    {
        $menus = Cms::all();
        $address = Settings::where('name', 'Address')
            ->get()
            ->first();
        $phone = Settings::where('name', 'Phone')
            ->get()
            ->first();
        $email = Settings::where('name', 'Email')
            ->get()
            ->first();
        $time = Settings::where('name', 'Time')
            ->get()
            ->first();
        // dd($address);
        $types = Category::where('parent_id', null)->get();
        $brands = Brand::all();
        return view('frontend.home', compact('menus', 'address', 'phone', 'email','time', 'types','brands'));
    }

    //STORE INQUERY
    public function store(Request $request)
    {
        $inquery = new Inqueries();
        $inquery->fname = $request->fname;
        $inquery->lname = $request->lname;
        $inquery->phone = $request->phone;
        $inquery->email = $request->email;
        $inquery->postcode = $request->postcode;
        $inquery->subject = $request->inquery;
        $inquery->message = $request->message;
        $inquery->save();

        return redirect()->back();
    }

    // FAQ PAGE
    public function faq()
    {
        $menus = Cms::all();
        $address = Settings::where('name', 'Address')
            ->get()
            ->first();
        $phone = Settings::where('name', 'phone')
            ->get()
            ->first();
        $email = Settings::where('name', 'email')
            ->get()
            ->first();
        $time = Settings::where('name', 'Time')
            ->get()
            ->first();
        $types = Category::where('parent_id', null)->get();
        $brands = Brand::all();
        return view('frontend.faq', compact('menus', 'address', 'phone', 'email','time', 'types','brands'));
    }

    // HEARING LOSS PAGE
    public function hearingLoss()
    {
        $menus = Cms::all();
        $address = Settings::where('name', 'Address')
            ->get()
            ->first();
        $phone = Settings::where('name', 'phone')
            ->get()
            ->first();
        $email = Settings::where('name', 'email')
            ->get()
            ->first();
         $time = Settings::where('name', 'Time')
            ->get()
            ->first();
        $types = Category::where('parent_id', null)->get();
        $brands = Brand::all();
        return view('frontend.hearingLoss', compact('menus', 'address', 'phone', 'email','time', 'types','brands'));
    }

    // SUPPORT PAGE
    public function support()
    {
        $menus = Cms::all();
        $address = Settings::where('name', 'Address')
            ->get()
            ->first();
        $phone = Settings::where('name', 'phone')
            ->get()
            ->first();
        $email = Settings::where('name', 'email')
            ->get()
            ->first();
        $time = Settings::where('name', 'Time')
            ->get()
            ->first();
        $types = Category::where('parent_id', null)->get();
        $brands = Brand::all();
        return view('frontend.support', compact('menus', 'address', 'phone', 'email','time', 'types','brands'));
    }

    // SUPPORT FORM
    public function supportStore(Request $request)
    {
        // dd($request->intrest);
        $support = new Support();
        $support->name = $request->fname . ' ' . $request->lname;
        $support->phone = $request->phone;
        $support->email = $request->email;
        $support->phone = $request->phone;
        $support->address = $request->address;
        $support->intrest = implode(',', (array) $request->intrest);
        $support->save();

        return redirect()->back();
    }

    // HEARING AIDS PAGE
    public function hearingAids()
    {
        $menus = Cms::all();
        $address = Settings::where('name', 'Address')
            ->get()
            ->first();
        $phone = Settings::where('name', 'phone')
            ->get()
            ->first();
        $email = Settings::where('name', 'email')
            ->get()
            ->first();
            $time = Settings::where('name', 'Time')
            ->get()
            ->first();
        $types = Category::where('parent_id', null)->get();
        $brands = Brand::all();
        return view('frontend.hearingAids', compact('menus', 'address', 'phone', 'email','time', 'types','brands'));
    }

    // CONTACT US PAGE
    public function contactUs()
    {
        $menus = Cms::all();
        $address = Settings::where('name', 'Address')
            ->get()
            ->first();
        $phone = Settings::where('name', 'phone')
            ->get()
            ->first();
        $email = Settings::where('name', 'email')
            ->get()
            ->first();
            $time = Settings::where('name', 'Time')
            ->get()
            ->first();
        $types = Category::where('parent_id', null)->get();
        $brands = Brand::all();
        return view('frontend.contact', compact('menus', 'address', 'phone', 'email','time', 'types','brands'));
    }

    // PRODUCTS PAGE
    public function products($id, $brand_id = null)
    {
        $menus = Cms::all();
        $categories = Category::where('parent_id', null)->get();
        $address = Settings::where('name', 'Address')
            ->get()
            ->first();
        $phone = Settings::where('name', 'phone')
            ->get()
            ->first();
        $email = Settings::where('name', 'email')
            ->get()
            ->first();
            $time = Settings::where('name', 'Time')
            ->get()
            ->first();
        $types = Category::where('parent_id', null)->get();
        $brands = Brand::all();
        $noOfProducts = products::count();
        if ($brand_id) {
            $products = Products::whereHas('categories', function ($q) use ($id) {
                $q->where('id', $id)->orWhere('parent_id', $id);
            })->where('brand_id', $brand_id)->get();
        } else {
            $products = Products::whereHas('categories', function ($q) use ($id) {
                $q->where('id', $id)->orWhere('parent_id', $id);
            })->get();
        }

        $sub_categorys = Category::whereNotNull('parent_id')->get();
        $category = Category::where('id', $id)->get()->first();
        $categoryName = $category->name;
        $categoryImage = $category->coverImage;
        $categoryShortDesc = $category->shortDescription;
        $categoryId = $id;
        // dd($products);
        return view('frontend.products', compact('menus', 'address', 'phone', 'email','time', 'products', 'categories', 'brands', 'sub_categorys', 'categoryName', 'categoryId','categoryImage','categoryShortDesc', 'types','noOfProducts'));
    }


    public function productDetails($id)
    {
        $menus = Cms::all();
        $address = Settings::where('name', 'Address')
            ->get()
            ->first();
        $phone = Settings::where('name', 'phone')
            ->get()
            ->first();
        $email = Settings::where('name', 'email')
            ->get()
            ->first();
            $time = Settings::where('name', 'Time')
            ->get()
            ->first();
            $product = Products::where('id',$id)->get()->first();
            $productAttributes = Product_attributes::where('product_id',$id)->get();
            $productImages =Product_image::where('product_id',$id)->get();
        $types = Category::where('parent_id', null)->get();
        $brands = Brand::all();

        // related products 
        $relatedId = $product->category_id;
        $relatedProducts = Products::where('category_id',$relatedId)->where('id', '!=' ,$id )->take(2)->get();
        return view('frontend.productDetails', compact('menus', 'address', 'phone', 'email','time','product','productAttributes','productImages', 'types','brands','relatedProducts'));
    }

    // PRODUCT INQUERY FORM
    public function storeProductInquery(Request $request)
    {
        // dd($request);
        $inquery = new ProductInquery();
        $inquery->name = $request->name;
        $inquery->phone = $request->phone;
        $inquery->email = $request->email;
        $inquery->title = $request->productName;
        $inquery->message = $request->message;
        $inquery->save();

        return redirect()->back();
    }


    public function moreDeatils()
    {
        $menus = Cms::all();
        $address = Settings::where('name', 'Address')
            ->get()
            ->first();
        $phone = Settings::where('name', 'phone')
            ->get()
            ->first();
        $email = Settings::where('name', 'email')
            ->get()
            ->first();
            $time = Settings::where('name', 'Time')
            ->get()
            ->first();
        $types = Category::where('parent_id', null)->get();
        $brands = Brand::all();
        return view('frontend.hearingLossDetails',compact('menus', 'address', 'phone', 'email','time','types','brands'));
    }

    public function search(Request $request){
        $categories = Category::where('parent_id', null)->get();
        $search = $request->input('search');
        $products = Products::query()
        ->where('title', 'LIKE', "%{$search}%")
        ->orWhere('shortDescription', 'LIKE', "%{$search}%")
        ->get();
        if ($products->isNotEmpty()) {
            $categoryId = $products[0]->category_id;
        }
        else{
            $categoryId =$categories[0]->id;
        }
        $menus = Cms::all();
        $categories = Category::where('parent_id', null)->get();
        $address = Settings::where('name', 'Address')
            ->get()
            ->first();
        $phone = Settings::where('name', 'phone')
            ->get()
            ->first();
        $email = Settings::where('name', 'email')
            ->get()
            ->first();
            $time = Settings::where('name', 'Time')
            ->get()
            ->first();
        $types = Category::where('parent_id', null)->get();
        $brands = Brand::all();
        $noOfProducts = products::count();
        $sub_categorys = Category::whereNotNull('parent_id')->get();
       

    // Return the search view with the resluts compacted
    return view('frontend.products', compact('menus', 'address', 'phone', 'email','time', 'products', 'categories', 'brands', 'sub_categorys',  'categoryId', 'types','noOfProducts'));

}

public function sorting(Request $request){

    // dd($request->sorting);
    if($request->sorting =="title"){
        $products = Products::orderBy('title', 'ASC')->get();
    }
    if($request->sorting =="price"){
        $products = Products::orderBy('price', 'ASC')->get();
    }
       
        if ($products->isNotEmpty()) {
            $categoryId = $products[0]->category_id;
        }
        else{
            $categoryId =$categories[0]->id;
        }
        $menus = Cms::all();
        $categories = Category::where('parent_id', null)->get();
        $address = Settings::where('name', 'Address')
            ->get()
            ->first();
        $phone = Settings::where('name', 'phone')
            ->get()
            ->first();
        $email = Settings::where('name', 'email')
            ->get()
            ->first();
            $time = Settings::where('name', 'Time')
            ->get()
            ->first();
        $types = Category::where('parent_id', null)->get();
        $brands = Brand::all();
        $noOfProducts = products::count();
        $sub_categorys = Category::whereNotNull('parent_id')->get();
       

    // Return the search view with the resluts compacted
    return view('frontend.products', compact('menus', 'address', 'phone', 'email','time', 'products', 'categories', 'brands', 'sub_categorys',  'categoryId', 'types','noOfProducts'));

}
    
}
