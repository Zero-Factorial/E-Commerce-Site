<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use Str;
use Session;
class ProductController extends Controller
{
    public function add_product()
    {
        $categories = DB :: table('categories') -> get();
        return view('admin.add_product') -> with('categories',$categories);
    }

    public function save_product(Request $request)
    {
        $data = array();
        $data['fruit_name'] = $request -> fruit_name;
        $data['fruit_price'] = $request -> fruit_price;
        $data['fruit_description'] = $request -> fruit_description;
        $data['category_id'] = $request -> category_id;
        $image = $request ->file('fruit_image');

        if($image)
        {
            $image_name = Str :: random(20);
            $extension = strtolower($image -> getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $extension;
            $upload_path = 'fruitImage/';
            $image_url = $upload_path.$image_full_name;
            $success = $image -> move($upload_path,$image_full_name);

            if($success)
            {
                $data['fruit_image'] = $image_url;
                DB :: table('products')->insert($data);
                Session :: put('save_message','Product saved successfully!!!');
                return Redirect :: to('/add-product');
            }
        }
         
        $data['product_image'] = '';
            DB :: table('products')->insert($data);
            Session :: put('save_message','Product saved successfully!!!');
        return Redirect :: to('/add-product');
    }

    public function all_products()
    {
        $all_fruits = DB :: table('products')
                     ->join('categories','products.category_id','=','categories.category_id')
                     ->select('products.*','categories.category_name')
                     ->get();
        return view('admin.all_products') -> with('all_fruits',$all_fruits);
    }

    public function delete_product($fruit_id)
    {
         DB :: table('products')
             ->where('fruit_id',$fruit_id)
             ->delete();
        Session :: put('save_message','Product deleted successfully!!!');
        return Redirect :: to('/all-product');
    }

    public function edit_product($fruit_id)
    {
        $fruit_info = DB :: table('products')
                     ->join('categories','products.category_id','=','categories.category_id')
                     ->select('products.*','categories.category_name')
                     ->where('fruit_id',$fruit_id)
                     ->first();

        $all_category = DB :: table('categories') -> get();

        return view('admin.edit_product',['fruit_info' => $fruit_info,'all_category' => $all_category]);
    }

    public function update_product(Request $request,$fruit_id)
    {
        $data = array();
        $data['fruit_name'] = $request -> fruit_name;
        $data['fruit_price'] = $request -> fruit_price;
        $data['fruit_description'] = $request -> fruit_description;
        $data['category_id'] = $request -> category_id;
        $image = $request ->file('fruit_image');
        
        if($image)
        {
            $image_name = Str :: random(20);
            $extension = strtolower($image -> getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $extension;
            $upload_path = 'fruitImage/';
            $image_url = $upload_path.$image_full_name;
            $success = $image -> move($upload_path,$image_full_name);

            if($success)
            {
                $data['fruit_image'] = $image_url;
                DB :: table('products')
                ->where('fruit_id',$fruit_id)
                ->update($data);
                Session :: put('save_message','Product updated successfully!!!');
                return Redirect :: to('/all-product');
            }
        }
        else
        {
            DB :: table('products')
            ->where('fruit_id',$fruit_id)
            ->update($data);
            Session :: put('save_message','Product updated successfully!!!');
            return Redirect :: to('/all-product');
        }
        
    }
}