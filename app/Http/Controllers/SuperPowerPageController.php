<?php

namespace App\Http\Controllers;

use App\Models\SuperPowerPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuperPowerPageController extends Controller
{
    public function create(){
        return view('pages.superpower.create');
    }

    public function upload(Request $request){
        
                $this->validate($request, [
            'title' => 'required|string',
            'sub_title' => 'required|string',
            
        ]);



        $super= New SuperPowerPage();

        $super->title=$request->title;
        $super->sub_title=$request->sub_title;

        $icon_file=$request->file('icon_image');
        Storage::putFile('public/img/',$icon_file);
        $super->icon_image="storage/img/".$icon_file->hashName();


        $super->save();

        return redirect()->route('create.page.power')->with('success', "icon  data hass been upload successfuly");



        
    }


    public function list(){
        $super= SuperPowerPage::all();
        return view('pages.superpower.list',compact('super'));
    }

    public function edit($id){
        $super=SuperPowerPage::find($id);
        return view('pages.superpower.edit',compact('super'));
    }
}
