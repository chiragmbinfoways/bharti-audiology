<?php

namespace App\Http\Controllers\jpanel\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Settings;

class SettingsController extends Controller
{
    //LIST SETTINGS
    public function index()
    {
        $hasPermission = hasPermission('settings', 2);
        if ($hasPermission) {
            $settings = Settings::orderBy('id', 'desc')->get();
            return view('jpanel.settings.settings', compact('settings'));
        } else {
            abort(403);
        }
    }

    //STATUS SETTINGS
    public function status(Request $request)
    {
        $cms = Settings::find($request->settings_id);
        $cms->status = $request->status;
        $cms->save();
        return response()->json(['status' => 'success', 'message' => 'Status has been changed successfully!']);
    }

    //DELETE SETTINGS
    public function delete(Request $request)
    {
        Settings::find($request->id)->delete();
        return response()->json(['status' => 'success', 'message' => 'Setting has been deleted successfully!']);
    }

    //CREATE SETTINGS
    public function create()
    {
        $hasPermission = hasPermission('settings', 1);
        if ($hasPermission) {
            return view('jpanel.settings.createsettings');
        } else {
            abort(403);
        }
    }

     //STORE SETTINGS
     public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'value' => 'required',
        ]);
        $settings = new Settings();
        $settings->name = $request->name;
        $settings->value = $request->value;
        $settings->link = $request->laddress;
        $settings->save();

        if ($settings) {
            return redirect('jpanel/settings/create')->with('success', 'Settings has been created successfully!');
        } else {
            return redirect('jpanel/settings/create')->with('error', 'Something went wrong. Try again.');
        }
    }

    //EDIT SETTINGS
    public function edit($id)
    {
        $hasPermission = hasPermission('settings', 2);
        if ($hasPermission) {
            $settings = Settings::where('id',$id)->get()->first();
            return view('jpanel.settings.editSettings', compact('settings'));
        } else {
            abort(403);
        }
    }

    //STORE EDITED SETTINGS
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'value' => 'required',
        ]);

        $updateSettings = Settings::where('id', $id)->update([
            'name' => $request->name,
            'value' => $request->value,
            'link' => $request->laddress,
        ]);

        if ($updateSettings) {
            return redirect('jpanel/settings')->with('success', 'Settings has been updated successfully!');
        } else {
            return redirect('jpanel/settings')->with('error', 'Something went wrong. Try again.');
        }
    }

}
