<?php

namespace App\Http\Controllers;

use App\Models\MainPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\New_;

class MainPageController extends Controller
{
    public function create(){
        return view('pages.main_page.main');
    }

    public function store(Request $request){

       
                $this->validate($request, [
            'title' => 'required|string',
            'sub_title' => 'required|string',
            
        ]);



        $main= New MainPage();

        $main->title=$request->title;
        $main->sub_title=$request->sub_title;

        $main_file=$request->file('main_image');
        Storage::putFile('public/img/',$main_file);
        $main->main_image="storage/img/".$main_file->hashName();


        $main->save();

        return redirect()->route('create.page')->with('success', "Main page data hass been upload successfuly");

    }

    public function list(){
        $main=MainPage::all();
        return view('pages.main_page.list',compact('main'));
    }

    public function edit($id){
        $main=MainPage::find($id);
        return view('pages.main_page.edit',compact('main'));
    }

    public function update(Request $request, $id){
           $this->validate($request, [
            'title' => 'required|string',
            'sub_title' => 'required|string',
            
        ]);



        $main=  MainPage::find($id);

        $main->title=$request->title;
        $main->sub_title=$request->sub_title;
        if($request->file('main_image')){
        $main_file=$request->file('main_image');
        Storage::putFile('public/img/',$main_file);
        $main->main_image="storage/img/".$main_file->hashName();


        }
        

        $main->save();

        return redirect()->route('list.page')->with('success', "Main page data hass been update successfuly");


    }

    public function delete($id){
        $main=MainPage::find($id);
        $main->delete();

        return redirect()->route('list.page')->with('success', "Man page data hass been delete");

    }
}
