<?php

namespace App\Http\Controllers;

use App\Models\Validation;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ValidationPageController extends Controller
{
    public function create(){
        return view('pages.Validation.create');
    }

    public function store(Request $request){
        
                $this->validate($request, [
             'title1' => 'required|string',
            'sub_title1' => 'required|string',
             'title2' => 'required|string',
            'sub_title2' => 'required|string',
             'title3' => 'required|string',
            'sub_title3' => 'required|string',
            
            
        ]);



        $validation= New Validation();

      $validation->title1=$request->title1;
      $validation->sub_title1=$request->sub_title1;
      $validation->title2=$request->title2;
      $validation->sub_title2=$request->sub_title2;
      $validation->title3=$request->title3;
      $validation->sub_title3=$request->sub_title3;
      $validation->header=$request->header;
      $validation->sub_header=$request->sub_header;

        $image_file=$request->file('image');
        Storage::putFile('public/img/',$image_file);
        $validation->image="storage/img/".$image_file->hashName();


       $validation->save();

        return redirect()->route('create.validation')->with('success', "validation page data hass been store successfuly");


    }

    public function list(){
        $validation=Validation::first();;
        return view('pages.Validation.list',compact('validation'));
    }

    public function edit($id){
        $validation=Validation::find($id);
        return view('pages.Validation.edit',compact('validation'));
    }

     public function update(Request $request,$id){
        
             $this->validate($request, [
            'title1' => 'required|string',
            'sub_title1' => 'required|string',
             'title2' => 'required|string',
            'sub_title2' => 'required|string',
             'title3' => 'required|string',
            'sub_title3' => 'required|string',
            
            
        ]);



        $validation=  Validation::find($id);

      $validation->title1=$request->title1;
      $validation->sub_title1=$request->sub_title1;
      $validation->title2=$request->title2;
      $validation->sub_title2=$request->sub_title2;
      $validation->title3=$request->title3;
      $validation->sub_title3=$request->sub_title3;
      $validation->header=$request->header;
      $validation->sub_header=$request->sub_header;
        if($request->file('image')){
        $image_file=$request->file('image');
        Storage::putFile('public/img/',$image_file);
        $validation->image="storage/img/".$image_file->hashName();
        }
       

       $validation->save();

        return redirect()->route('validation.list.page')->with('success', "validation page data hass been update successfuly");


    }

    public function delete($id){
        $validation=Validation::find($id);
        $validation->delete();

        return redirect()->route('validation.list.page')->with('success', "validation page data hass been delete successfuly");
    }





}
