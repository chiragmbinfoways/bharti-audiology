<?php

namespace App\Http\Controllers\jpanel\Inquery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inqueries;
use App\Models\Support;
use App\Models\ProductInquery;

class InqueryController extends Controller
{
     // INQUERY LIST
     public function contactlist()
    {
        $hasPermission = hasPermission('inquery', 2);
        if ($hasPermission) {
            $inqueries = Inqueries::orderBy('id', 'desc')->get();
            return view('jpanel.inquery.inquery', compact('inqueries'));
        } else {
            abort(403);
        }
    }

    //DELETE INQUERY
    public function delete(Request $request)
    {
        Inqueries::find($request->id)->delete();
        return response()->json(['status' => 'success', 'message' => 'Inquery has been deleted successfully!']);
    }

    public function support()
    {
        $hasPermission = hasPermission('inquery', 2);
        if ($hasPermission) {
            $supports = Support::orderBy('id', 'desc')->get();
            return view('jpanel.inquery.support', compact('supports'));
        } else {
            abort(403);
        }
    }
    public function ProductInquery()
    {
        $hasPermission = hasPermission('inquery', 2);
        if ($hasPermission) {
            $productInquerys = ProductInquery::orderBy('id', 'desc')->get();
            return view('jpanel.inquery.productInquery', compact('productInquerys'));
        } else {
            abort(403);
        }
    }
}
