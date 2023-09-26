<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        // $product = Product::get();

                                        //  products key se hum html m add kr sakte hn
        return view('products.index', ['products'=> Product::get()]);
    }
    
    public function create(){
        return view('products.create');
    }

    public function store(Request $request){

        // validate data
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg,gif|max:1000'
        ]);


        // check all data are getting or not - debug
        // dd($request->all());

        // upload image
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('products'), $imageName);

        // dd($imageName);

        $product = new Product;
        $product->image = $imageName;
        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();
        return redirect()->route('products.index')->withSuccess('Product Created !!!');
    }

    // id is coming from web.php(route)
    public function edit($id){
        // dd($id);

        $product = Product::where('id', $id)->first(); //ek item hoga
        return view('products.edit', ['product' => $product]);
    }

    public function update(Request $request, $id){
        // dd($request->all());
        
         // validate data
         $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|mimes:png,jpg,jpeg,gif|max:1000'
        ]);
        
        $product = Product::where('id', $id)->first();

        if(isset($request->image)){
            // upload image
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('products'), $imageName);
        }


        // check all data are getting or not - debug
        // dd($request->all());


        // dd($imageName);

        $product->name = $request->name;
        $product->description = $request->description;

        $product->save();
        return redirect()->route('products.index')->withSuccess('Product Updated');
    }

    public function destroy($id){

        $product = Product::where('id', $id)->first();
        $product->delete();
        return back()->withSuccess('Product deleted !!!!');
    }
}
