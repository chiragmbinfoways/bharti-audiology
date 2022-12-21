<?php

namespace App\Http\Controllers\jpanel\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cms;

class CmsController extends Controller
{
    //LIST CMS
    public function index()
    {
        $hasPermission = hasPermission('cms', 2);
        if ($hasPermission) {
            $cms = Cms::orderBy('id', 'desc')->get();
            return view('jpanel.cms.cms', compact('cms'));
        } else {
            abort(403);
        }
    }

    //STATUS CMS
    public function status(Request $request)
    {
        $cms = Cms::find($request->cms_id);
        $cms->status = $request->status;
        $cms->save();
        return response()->json(['status' => 'success', 'message' => 'Status has been changed successfully!']);
    }

    // DELETE CMS
    public function delete(Request $request)
    {
        Cms::find($request->id)->delete();
        return response()->json(['status' => 'success', 'message' => 'Cms has been deleted successfully!']);
    }

    //CREATE CMS
    public function create()
    {
        $hasPermission = hasPermission('cms', 1);
        if ($hasPermission) {
            $parent = Cms::where('parent_id', null)->get();
            return view('jpanel.cms.createCms', compact('parent'));
        } else {
            abort(403);
        }
    }

    //STORE CMS
    public function store(Request $request)
    {
        $request->validate([
            'mname' => 'required|unique:cms,name',
            'laddress' => 'required',
        ]);
        $menu = new Cms();
        $menu->name = $request->mname;
        $menu->link = $request->laddress;
        $menu->parent_id = $request->parent_id;
        $menu->save();

        if ($menu) {
            return redirect('jpanel/cms/create')->with('success', 'Menu has been created successfully!');
        } else {
            return redirect('jpanel/cms/create')->with('error', 'Something went wrong. Try again.');
        }
    }

    //EDIT CMS
    public function edit($id)
    {
        $hasPermission = hasPermission('cms', 2);
        if ($hasPermission) {
            $cms = Cms::where('id',$id)->get()->first();
            $parent_menu_list = Cms::where('parent_id', null)->get();
            if ($cms->parent_id == null) {
                $parent_menu = '';
                $parent_menu_id = '';
            } else {
                $parent = $cms->parent_id;
                $parent_menu_query = Cms::where('parent_id', $parent)->get()->first();
                $parent_menu_id = $parent_menu_query->parent->id;
                $parent_menu = $parent_menu_query->parent->name;
            }
            return view('jpanel..cms.editCms', compact('cms','parent_menu','parent_menu_id', 'parent_menu_list'));
        } else {
            abort(403);
        }
    }

     //STORE EDITED CMS
     public function update(Request $request, $id)
    {
        $request->validate([
            'mname' => 'required',
            'laddress' => 'required',
        ]);

        $updateCms = Cms::where('id', $id)->update([
            'name' => $request->mname,
            'link' => $request->laddress,
            'parent_id' => $request->parent_id,
        ]);

        if ($updateCms) {
            return redirect('jpanel/cms')->with('success', 'Menu has been updated successfully!');
        } else {
            return redirect('jpanel/cms')->with('error', 'Something went wrong. Try again.');
        }
    }
}
