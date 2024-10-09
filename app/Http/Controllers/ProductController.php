<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MultiImg;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Carbon\Carbon;


class ProductController extends Controller
{
    public function AllProduct(){
        $products = Product::latest()->get();
        return view('companies.product.basic_product_all',compact('products'));
    } // End Method 

    public function AddBasicProduct(){
        //$products = Product::latest()->get();
        return view('companies.product.add_basic_product');
    } // End Method 

    public function CompaniesStoreBasicProduct(Request $request){

        if($request->file('product_thambnail')){
             $manager = new ImageManager(new Driver());
             $name_gen = hexdec(uniqid()).'.'.$request->file('product_thambnail')->getClientOriginalExtension();
             $img = $manager->read($request->file('product_thambnail'));
             $img = $img->resize(800,800);
             $img->toJpeg(80)->save('upload/products/thambnail/'.$name_gen);
        }

        $save_url = 'upload/products/thambnail/'.$name_gen;

        $product_id = Product::insertGetId([

            'company_id' => Auth::user()->id,
            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'product_name' => $request->product_name,
            'product_slug' => strtolower(str_replace(' ','-',$request->product_name)),
            'product_code' => $request->product_code,
            'product_qty' => $request->product_qty,
            'product_tags' => $request->product_tags,
            'product_size' => $request->product_size,
            'product_color' => $request->product_color,

            'selling_price' => $request->selling_price,
            'discount_price' => $request->discount_price,
            'short_descp' => $request->short_descp,
            'long_descp' => $request->long_descp, 

            'hot_deals' => $request->hot_deals,
            'featured' => $request->featured,
            'special_offer' => $request->special_offer,
            'special_deals' => $request->special_deals, 

            'product_thambnail' => $save_url,
            'vendor_id' => $request->vendor_id,
            'status' => 1,
            'created_at' => Carbon::now(), 

        ]);

        /// Multiple Image Upload From her //////

        $images = $request->file('multi_img');
        if($images){
           $manager = new ImageManager(new Driver());
           foreach($images as $img){
            $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            $img = $manager->read($img);
            $img = $img->resize(800,800);
            $img->toJpeg(80)->save('upload/products/multi-image/'.$make_name);
            //Image::make($img)->resize(800,800)->save('upload/products/multi-image/'.$make_name);
         
            $uploadPath = 'upload/products/multi-image/'.$make_name;


        MultiImg::insert([

            'product_id' => $product_id,
            'photo_name' => $uploadPath,
            'created_at' => Carbon::now(), 

        ]); 
        }// end foreach


        }
        

        /// End Multiple Image Upload From her //////

        $notification = array(
            'message' => 'Product Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('companies.basic.all.product')->with($notification); 


    } // End Method 


    public function EditBasicProduct($id){
         $multiImgs = MultiImg::where('product_id',$id)->get();
         $activeVendor = User::where('status','active')->where('role','company')->latest()->get();
         $products = Product::findOrFail($id);
         return view('companies.product.edit_basic_product',compact('activeVendor','products','multiImgs'));
     }// End Method 

    public function UpdateBasicProduct(Request $request){

        $product_id = $request->id;
        Product::findOrFail($product_id)->update([
       'brand_id' => $request->brand_id,
       'category_id' => $request->category_id,
       'subcategory_id' => $request->subcategory_id,
       'product_name' => $request->product_name,
       'product_slug' => strtolower(str_replace(' ','-',$request->product_name)),
       'product_code' => $request->product_code,
       'product_qty' => $request->product_qty,
       'product_tags' => $request->product_tags,
       'product_size' => $request->product_size,
       'product_color' => $request->product_color,
       'selling_price' => $request->selling_price,
       'discount_price' => $request->discount_price,
       'short_descp' => $request->short_descp,
       'long_descp' => $request->long_descp, 
       'hot_deals' => $request->hot_deals,
       'featured' => $request->featured,
       'special_offer' => $request->special_offer,
       'special_deals' => $request->special_deals, 
        
       'vendor_id' => $request->vendor_id,
       'status' => 1,
       'created_at' => Carbon::now(), 
   ]);
    $notification = array(
       'message' => 'Product Updated Without Image Successfully',
       'alert-type' => 'success'
   );
   return redirect()->route('companies.basic.all.product')->with($notification); 
    
    }// End Method 

    
    public function UpdateBasicProductThambnail(Request $request){

   
        $pro_id = $request->id;
        $oldImage = $request->old_img;
        $image = $request->file('product_thambnail');
        $manager = new ImageManager(new Driver());
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        $img = $manager->read($image);
        $img = $img->resize(800,800);
        $img->toJpeg(80)->save('upload/products/thambnail/'.$name_gen);
        
        $save_url = 'upload/products/thambnail/'.$name_gen;
        
        if (file_exists($oldImage)) {
        unlink($oldImage);
        }
        Product::findOrFail($pro_id)->update([
            'product_thambnail' => $save_url,
            'updated_at' => Carbon::now(),
        ]);
    $notification = array(
            'message' => 'Product Image Thambnail Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification); 
    }// End Method 

    // Multi Image Update 
    public function UpdateBasicProductMultiimage(Request $request){

        $images = $request->multi_img;
        if($images){
           $manager = new ImageManager(new Driver());
           foreach($images as $id => $img ){
            $imgDel = MultiImg::findOrFail($id);
            unlink($imgDel->photo_name);
     
            $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
            $img = $manager->read($img);
            $img = $img->resize(800,800);
            $img->toJpeg(80)->save('upload/products/multi-image/'.$make_name);
         
            $uploadPath = 'upload/products/multi-image/'.$make_name;


        MultiImg::where('id',$id)->update([
            'photo_name' => $uploadPath,
            'updated_at' => Carbon::now(),

        ]); 
        } // end foreach
    }
         $notification = array(
            'message' => 'Product Multi Image Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification); 

    }// End Method 

    public function BasicProductMulitImageDelelte($id){
        $oldImg = MultiImg::findOrFail($id);
        unlink($oldImg->photo_name);
        MultiImg::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Product Multi Image Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }// End Method 

    public function BasicProductInactive($id){

        Product::findOrFail($id)->update(['status' => 0]);
        $notification = array(
            'message' => 'Product Inactive',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// End Method 


      public function BasicProductActive($id){

        Product::findOrFail($id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Product Active',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }// End Method 

    public function BasicProductDelete($id){
        $product = Product::findOrFail($id);
        unlink($product->product_thambnail);
        Product::findOrFail($id)->delete();
        $imges = MultiImg::where('product_id',$id)->get();
        foreach($imges as $img){
            unlink($img->photo_name);
            MultiImg::where('product_id',$id)->delete();
        }
        $notification = array(
            'message' => 'Product Deleted Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }// End Method 
}

