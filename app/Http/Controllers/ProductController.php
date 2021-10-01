<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Type_Product;
use Illuminate\Http\Request;
use Mockery\Matcher\Type;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['products'] = Product::orderBy('id','asc')->paginate(16);
        return view('product.list',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = $request->validate([
            'title' => 'required|string|max:150|unique:products',
            'code' => 'required|regex:/^[A-z0-9\-\_]+$/|max:50|unique:products',
            'description' => 'required|string|max:1500',
            'price' => 'required|numeric|between:0,500',
            'image' => 'nullable|sometimes|image|mimes:jpeg,png,jpg',
            'category' => 'required|numeric|',
            'gender' => 'required|string|max:150',
            'type' => 'required|string|max:150',
        ]);

        $filename = time() . "_" . $request->file('image')->getClientOriginalName();
        $result = $request->file('image')->move('storage/', $filename);

        $flight_id = new Product;

        $flight_id->title = $request->title;
        $flight_id->code = $request->code;
        $flight_id->description = $request->description;
        $flight_id->price = $request->price;
        $flight_id->category = $request->category;
        $flight_id->gender = $request->gender;
        $flight_id->type = $request->type;
        $flight_id->image = $filename;

        $flight_id->save();

        $flight = new Type_Product;

        $flight->type_id = $request->type;
        $flight->product_id = $flight_id->id;

        $flight->save();


        return redirect('products')->with('success','Product Inserted!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
		return view('product.show', ['product' =>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        //check if ‘id’ exists, as it is passed by get
        if ( empty($product) ){
            return Redirect::to('products')->with('error','Invalid operation selected.');
        }
        return view('product.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate fields. In this case, only price and image (may or may not be changed)
        $receivedProductData = $request->validate([
            'price' => 'required|numeric|between:0,500',
            'image' => 'nullable|sometimes|image|mimes:jpeg,png,jpg',
            ]);
            $originalProduct = Product::find($id);
            if ( !empty($originalProduct) ){
                //the table entry exists in the database
                //price must exist and be filled. Here is has a correct value.
                $originalProduct['price'] = $receivedProductData['price'];
                //image may not exist - nothing needs to change then
                if( array_key_exists('image', $receivedProductData) ){
                    //there is a valid image to replace the existing one
                    /*if( $request->file('image')->isValid() ){
                        $filename = time() . "_" . $request->file('image')->getClientOriginalName();
                        $result = $request->file('image')->move('storage/', $filename);
                        //add the new filename to the array and erase the previous file if it is not the default
                        image
                        if ( $originalProduct['image'] != 'defaultImage.jpg'){
                            unlink('storage/' . $originalProduct['image']);
                        }
                        $originalProduct['image'] = $filename;
                    }
                    else{
                        //error - return message
                        return redirect('products')->with('error','Something went wrong with the file: please
                        try again later.');
                    }*/
                } //update data
                $originalProduct->save();
                return redirect('products')->with('success','Product data updated!');
            }
            else{
                //error - return message
                return redirect('products')->with('error','Invalid operation detected.');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data =DB::table('products')
                    ->leftJoin('type_products','products.id', '=','type_products.product_id')
                    ->where('products.id', $id);
        DB::table('type_products')->where('product_id', $id)->delete();
        $data->delete();
        return redirect('products')->with('success', 'Product Deleted');
    }


}
