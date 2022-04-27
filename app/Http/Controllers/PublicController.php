<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function menu()
    {
        $products = Product::all();
        return view("pages/menu", compact('products', $products));
    }
    public function getCategory(){
        $categories = Category::all();
        return view("pages/menu", compact('categories', $categories));
    }
    public function getByid($id){
       
        $productlist = Product::where(['cat_id' => $id])->get();
        return view("pages/items", compact('productlist', $productlist));
    }
    public function contact(){
        return view("pages/contact");
    }
    public function delivery(){
        return view("pages/delivery");
    }
    public function about(){
        return view("pages/about");
    }
    public function index(){
       return view("main_page/index");
    }
 
}
