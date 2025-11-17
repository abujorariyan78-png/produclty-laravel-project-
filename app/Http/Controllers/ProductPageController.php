<?php

namespace App\Http\Controllers;

use App\Models\ProductsPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductPageController extends Controller
{
    public function create(){
        return view('pages.Product.create');
    }

    public function store(Request $request){
        
           $this->validate($request, [
            'title1' => 'required|string',
             'header'=>'required',
             'title2' => 'required|string',
            'sub_header'=>'required',
             'title3' => 'required|string',
           
            
            
        ]);



        $porducts=new ProductsPage();

      $porducts->title1=$request->title1;
      $porducts->title2=$request->title2;
     $porducts->title3=$request->title3;
      $porducts->para=$request->para;
      $porducts->header=$request->header;
      $porducts->sub_header=$request->sub_header;
       
        $manager_file=$request->file('manager_image');
        Storage::putFile('public/img/',$manager_file);
        $porducts->manager_image="storage/img/".$manager_file->hashName();
        
       

       $porducts->save();

        return redirect()->route('create.page.products')->with('success', "Products page data hass been store successfuly");
    }


    public function list(){
        $porducts = ProductsPage::first();
        return view('pages.Product.list',compact('porducts'));
    }

    public function edit($id){
        $porducts = ProductsPage::find($id);
        return view('pages.Product.edit',compact('porducts'));
    }

    public function update(Request $request, $id){
         $this->validate($request, [
            'title1' => 'required|string',
             'header'=>'required',
             'title2' => 'required|string',
            'sub_header'=>'required',
             'title3' => 'required|string',
           
            
            
        ]);



        $porducts= ProductsPage::find($id);

      $porducts->title1=$request->title1;
      $porducts->title2=$request->title2;
     $porducts->title3=$request->title3;
      $porducts->para=$request->para;
      $porducts->header=$request->header;
      $porducts->sub_header=$request->sub_header;
       if($request->file('manager_image')){
        $manager_file=$request->file('manager_image');
        Storage::putFile('public/img/',$manager_file);
        $porducts->manager_image="storage/img/".$manager_file->hashName();

       }
        
        
       

       $porducts->save();

        return redirect()->route('list.page.products')->with('success', "Products page data hass been update successfuly");
    }

    public function delete($id){
        $porducts= ProductsPage::find($id);
        $porducts->delete();
        
        return redirect()->route('list.page.products')->with('success', " Products page data iteam hassbenn delete");
    }
}
