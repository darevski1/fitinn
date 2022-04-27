<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Photos;
use Image;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photos::all();
        $product = Product::all();
        return view("admin_view/view_products", compact("product", 'photos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();

        return view("admin_view/create_product", compact("category"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_title' => 'required|max:255',
            'description' => 'required',
        ]);

        $product = new Product();
        $product->product_title = $request->product_title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->line_one = $request->line_one;
        $product->line_two = $request->line_two;
        $product->line_three = $request->line_three;
        $product->user_id = Auth::id();
        $product->cat_id = ("1");
        $product->calories = $request->calories;
        $product->fat = $request->fat;
        $product->protein = $request->protein;
        $product->carbohydrate = $request->carbohydrate;
        $product->slug = Str::slug($request->product_title);
        $product->post_uid =  Str::uuid();
        $product->status = ("1");
        $product->save();


           // file uploded
           if($request->hasFile('file')){
            $images = $request->file('file');

            foreach($images as $image){
                    // Get file original name
                    $image->getClientOriginalName();
                    // Get file extsnion
                    $filename_ext = $image->getClientOriginalExtension();
                    // generate random uid
                    $rand = uniqid() . date('d');
                    // set new file name + 
                    $image_name = md5($image) . "-" .  $rand . "." . $filename_ext;

                    // FIle upload path
                    $destinationPath = public_path('/assets/images/food');
                    $img = Image::make($image->path());
                    $img->resize(1024 , 768, function ($constraint) {

                    $constraint->aspectRatio();
                    })->save($destinationPath.'/'.$image_name);
                    
                    $photo= new Photos();
                    $photo->photo_name=$image_name;
                    $photo->product_id=$product->id;
                    $photo->save();
            }
           

        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();

        return redirect()->back();

    }
}
