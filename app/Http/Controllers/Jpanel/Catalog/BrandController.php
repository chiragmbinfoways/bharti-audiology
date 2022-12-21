<?php

namespace App\Http\Controllers\Jpanel\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    //
    public function index()
    {
        $hasPermission = hasPermission('brand',2);
        if($hasPermission){
            $brands = Brand::all();
            return view('jpanel.catalog.brand', compact('brands'));
        }
        else
            abort(403);
    }


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hasPermission = hasPermission('brand',1);
        if($hasPermission){
            return view('jpanel.catalog.createBrand');
        }
        else
            abort(403);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'brand_name' => 'required|unique:brands,name',
            'slug' => 'required|unique:brands,slug'
        ]);
        $brand=new Brand;
        $brand->name=$request->brand_name;
        $brand->slug=$request->slug;
        $brand->save();
        if ($brand) {
            return redirect('jpanel/catalog/brand/add')->with('success', 'Brand has been created successfully!');
        } else {
            return redirect('jpanel/catalog/brand/add')->with('error', 'Something went wrong. Try again.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $Brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Brand $brand)
    {
        //
        $hasPermission = hasPermission('brand',3);
        if($hasPermission){
            $id = $request->id;
            $brand = Brand::find($id);
            return view('jpanel.catalog.editBrand', compact('brand'));
        }
        else
            abort(403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'brand_name' => 'required|unique:brands,name,'.$request->id,
            'slug' => 'required|unique:brands,slug,'.$request->id,
        ]);
        $brand = Brand::where('id', $request->id)->update(['name' => $request->brand_name, 'slug' => $request->slug]);
        if ($brand)
            return redirect('jpanel/catalog/brand/edit/'.$request->id)->with('success', 'Brand has been updated!');
        else
            return redirect('jpanel/catalog/brand/edit'.$request->id)->with('error', 'Something went wrong. Try again.');
    }


    //  Update Short and Long Description
    public function updateBrandDescription(Request $request)
    {
        $request->validate([
            'shortDescription' => 'required',
            'longDescription' => 'required',
        ]);

        $brand = Brand::where('id', $request->id)->update(['shortDescription' => $request->shortDescription, 'longDescription' => $request->longDescription]);
        if ($brand)
            return redirect('jpanel/catalog/brand/edit/'.$request->id)->with('success', 'Brand has been updated!');
        else
            return redirect('jpanel/catalog/brand/edit'.$request->id)->with('error', 'Something went wrong. Try again.');

    }

    //  Update Meta Data
    public function updateBrandMeta(Request $request)
    {
        $request->validate([
            'metaTitle' => 'required',
        ]);

        $brand = Brand::where('id', $request->id)->update(['metaTitle' => $request->metaTitle, 'metaKeyword' => $request->metaKeyword,'metaDescription' => $request->metaDescription]);
        if ($brand)
            return redirect('jpanel/catalog/brand/edit/'.$request->id)->with('success', 'Brand has been updated!');
        else
            return redirect('jpanel/catalog/brand/edit'.$request->id)->with('error', 'Something went wrong. Try again.');
    }

     //  Update Logo  Image
     public function updateBrandLogo(Request $request)
     {
         $request->validate([
             'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);
         $image = $request->file('icon');
         $thumbnailPath = storage_path('app/public/images/brand/logo/th/');
         $mainImagePath = storage_path('app/public/images/brand/logo/');
         $imageName = time().'.'.$image->getClientOriginalExtension();
         $size_x = null;
         $size_y= 100;
         resizeImage($image,$thumbnailPath,$mainImagePath,$imageName,$size_x,$size_y);
         $imageExits = Brand::where('id', $request->id)->get()->first();
         $imageExits = $imageExits->brandLogo;
        if (file_exists($thumbnailPath . '' . $imageExits)) {
            @unlink($thumbnailPath . '' . $imageExits);
        }
        if (file_exists($mainImagePath . '' . $imageExits)) {
            @unlink($mainImagePath . '' . $imageExits);
        }
         $brand = Brand::where('id', $request->id)->update(['brandLogo' => $imageName]);
         if ($brand) {
             return redirect('jpanel/catalog/brand/edit/'.$request->id)->with('success', 'Logo image has been changed!');
         } else {
             return redirect('jpanel/catalog/brand/edit/'.$request->id)->with('error', 'Something went wrong. Try again.');
         }
     }

     //  Update Cover  Image
     public function updateBrandCover(Request $request)
     {
         $request->validate([
             'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
         ]);
         $image = $request->file('cover');
         $thumbnailPath = storage_path('app/public/images/brand/cover/th/');
         $mainImagePath = storage_path('app/public/images/brand/cover');
         $imageName = time().'.'.$image->getClientOriginalExtension();
         $size_x = null;
         $size_y= 100;
         resizeImage($image,$thumbnailPath,$mainImagePath,$imageName,$size_x,$size_y);
         $imageExits = Brand::where('id', $request->id)->get()->first();
         $imageExits = $imageExits->coverImage;
        if (file_exists($thumbnailPath . '' . $imageExits)) {
            @unlink($thumbnailPath . '' . $imageExits);
        }
        if (file_exists($mainImagePath . '' . $imageExits)) {
            @unlink($mainImagePath . '' . $imageExits);
        }
         $brand = Brand::where('id', $request->id)->update(['coverImage' => $imageName]);
         if ($brand) {
             return redirect('jpanel/catalog/brand/edit/'.$request->id)->with('success', 'Cover image has been changed!');
         } else {
             return redirect('jpanel/catalog/brand/edit/'.$request->id)->with('error', 'Something went wrong. Try again.');
         }
     }

     /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Brand $brand)
    {
        $imageExits = Brand::where('id', $request->brand_id)->get()->first();
        // dd($imageExits);
        $thumbnailPath = storage_path('app/public/images/brand/logo/th/');
        $mainImagePath = storage_path('app/public/images/brand/logo/');
        $coverthumbnailPath = storage_path('app/public/images/brand/cover/th/');
        $covermainImagePath = storage_path('app/public/images/brand/cover');
        if (file_exists($thumbnailPath . '' . $imageExits->brandLogo)) {
            @unlink($thumbnailPath . '' . $imageExits->brandLogo);
        }
        if (file_exists($mainImagePath . '' . $imageExits->brandLogo)) {
            @unlink($mainImagePath . '' . $imageExits->brandLogo);
        }
        if (file_exists($coverthumbnailPath . '' . $imageExits->coverImage)) {
            @unlink($coverthumbnailPath . '' . $imageExits->coverImage);
        }
        if (file_exists($covermainImagePath . '' . $imageExits->coverImage)) {
            @unlink($covermainImagePath . '' . $imageExits->coverImage);
        }
        Brand::find($request->brand_id)->delete();
        return response()->json(['status'=>'success','message' => 'Brand has been Deleted successfully!']);
    }

    /**
     * Status update the specified resource in storage.
     *
     * @param  \App\Models\Brand  $category
     * @return \Illuminate\Http\Response
     */
    public function statusUpdate(Request $request)
    {
        //
        $brand = Brand::find($request->brand_id);
        $brand->status = $request->status;
        $brand->save();
        return response()->json(['status'=>'success','message' => 'Status has been changed successfully!']);
    }
}
