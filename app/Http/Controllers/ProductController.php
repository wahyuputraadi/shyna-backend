<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\ProductRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Str;



class ProductController extends Controller
{

    // pindahan dari home controller 
    // fungsinya agar ketika cms dikunjungi user wajib login
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        // nama product pada database
        $items = Product::all();

        // menjalankan halaman product pada index
        return view('pages.products.index')->with([
            'items' => $items
        ]);
    }







    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    
    // menambahkan tambah barang
    public function create()
    {      
        return view('pages.products.create');
    }






    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    // menambahkan data
    public function store(ProductRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        Product::create($data);
        // apabila halaman selesai akan kembali ke halaman berikut
        return redirect()->route('products.index');
    }



    


    /**
    * Display the specified resource. 
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
     public function show($id)
    {
     
    }





    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    // edit product
    public function edit($id)
    {
           //menambahkan edit produk
           $items = Product::findOrFail($id);

           return view('pages.products.edit')->with([
            'items' => $items
        ]);
    }




    /**
    * Update the specified resource in storage.
    *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(ProductRequest $request, $id)
    {
        //
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        $items = Product::findOrFail($id);
        $items->update($data);
        
        return redirect()->route('products.index');
    }






    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $items = Product::findorFail($id);
        $items->delete();

        return redirect()->route('products.index');
    }
}
