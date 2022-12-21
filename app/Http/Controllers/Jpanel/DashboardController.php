<?php

namespace App\Http\Controllers\Jpanel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Module;
use App\Models\Language;
use App\Models\Category;
use App\Models\Products;
use App\Models\ProductInquery;
use App\Models\Support;
class DashboardController extends Controller
{
    //
    public function index(){
        $noOfCategory = Category::where('parent_id', null)->count();
        $noOfProducts = Products::all()->count();
        $noOfInqueries = ProductInquery::all()->count();
        $noOfSupport = Support::all()->count();
        $productInquerys = ProductInquery::orderBy('id', 'desc')->limit('5')->get();
        $supportInquerys = Support::orderBy('id', 'desc')->limit('5')->get();
        return view('jpanel.dashboard',['noOfCategory'=>$noOfCategory,'noOfProducts'=>$noOfProducts,'noOfInqueries'=>$noOfInqueries,'noOfSupport'=>$noOfSupport,'productInquerys'=>$productInquerys,'supportInquerys'=>$supportInquerys]);
    }

    public function adminSettings(){
        $totalModule = Module::all()->count();
        $totalRole = Role::all()->count();
        $totalUser = User::all()->count();
        $totalLanguage = Language::all()->count();
        return view('jpanel.adminSettings',['totalModule'=>$totalModule,'totalLanguage'=>$totalLanguage,'totalRole'=>$totalRole,'totalUser'=>$totalUser]);
    }
    
}
