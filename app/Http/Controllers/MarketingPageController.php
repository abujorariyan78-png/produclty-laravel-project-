<?php

namespace App\Http\Controllers;

use App\Models\MarketingPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MarketingPageController extends Controller
{
    public function create(){
        return view('pages.Marketing.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required|string',
            'sub_title' => 'required|string',
            
        ]);



        $marketing= new MarketingPage();

        $marketing->title=$request->title;
        $marketing->sub_title=$request->sub_title;
        
        $card_file=$request->file('card_image');
        Storage::putFile('public/img/',$card_file);
       $marketing->card_image="storage/img/".$card_file->hashName();


        
        

        $marketing->save();

        return redirect()->route('create.page.marketing')->with('success', "Marketing page data hass been store successfuly");

    }

    public function list(){
        $marketing=MarketingPage::all();
        return view('pages.Marketing.list',compact('marketing'));
    }

    public function edit($id){
        $marketing=MarketingPage::find($id);
        return view('pages.Marketing.edit',compact('marketing'));
    }

    public function update(Request $request,$id){
        $this->validate($request, [
            'title' => 'required|string',
            'sub_title' => 'required|string',
            
        ]);



        $marketing= MarketingPage::find($id);

        $marketing->title=$request->title;
        $marketing->sub_title=$request->sub_title;
        if($request->file('card_image')){
         $card_file=$request->file('card_image');
        Storage::putFile('public/img/',$card_file);
       $marketing->card_image="storage/img/".$card_file->hashName();

        }
       


        
        

        $marketing->save();

        return redirect()->route('list.page.marketing')->with('success', "Marketing page data hass been update successfuly");
    }

    public function delete($id){
        $marketing= MarketingPage::find($id);
        $marketing->delete();
        return redirect()->route('list.page.marketing')->with('success', "Marketing page data hass been delete successfuly");
    }
}
