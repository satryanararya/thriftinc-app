<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImages;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Collection;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 5;

        if(!empty($keyword)){
            $products = Product::where('name', 'LIKE', "%$keyword")->orWhere('category', 'LIKE', "%$keyword")->latest()->paginate($perPage);
        } else {
            $products = Product::latest()->paginate($perPage);
        }
        return view('products.index',['products' => $products])->with('i',(request()->input('page',1) -1) *5);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request)
    {
        if($request->hasFile("cover")){
            $file = $request->file("cover");
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(\public_path("cover/"),$imageName);

            $product = new Product([
                "name" => $request->name,
                "description" => $request->description,
                "cover" => $imageName,
                "category" => $request->category,
                "quantity" => $request->quantity,
                "price" => $request->price,
                "color" => $request->color,
                "size" => $request->size,
                "brand" => $request->brand,
                "type" => $request->type,
                "material" => $request->material,
                "status" => $request->status,
            ]);
            $product->save();
        }

            if($request->hasFile("images")){
                $files = $request->file("images");
                foreach($files as $file){
                    $imageName = time() . '_' . $file->getClientOriginalName();
                    $request['product_id'] = $product->id;
                    $request['image'] = $imageName;
                    $file->move(\public_path("/images"),$imageName);
                    ProductImages::create($request->all());
                }
            }

            return redirect("/products");
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit')->with('products',$product);
    }

    public function update(Request $request,$id)
    {
    $product=Product::findOrFail($id);
    if($request->hasFile("cover")){
        if (File::exists("cover/".$product->cover)) {
            File::delete("cover/".$product->cover);
        }
        $file=$request->file("cover");
        $product->cover=time()."_".$file->getClientOriginalName();
        $file->move(\public_path("/cover"),$product->cover);
        $request['cover']=$product->cover;
    }

        $product->update([
            "name" =>$request->name,
            "category"=>$request->category,
            "cover"=>$product->cover,
        ]);

        if($request->hasFile("images")){
            $files=$request->file("images");
            foreach($files as $file){
                $imageName=time().'_'.$file->getClientOriginalName();
                $request["product_id"]=$id;
                $request["image"]=$imageName;
                $file->move(\public_path("images"),$imageName);
                ProductImages::create($request->all());
            }
        }

        return redirect("/products");

    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        
        if(File::exists("cover/".$product->cover)){
            File::delete("cover/".$product->cover);
        }
        $images = ProductImages::where("product_id",$product->id)->get();
        foreach($images as $image){
            if(File::exists("images/".$image->image)){
                File::delete("images/".$image->image);
            }
        }
        $product->delete();
        return redirect('/products');
    }

    public function deleteimage($id){
        $images = ProductImages::findOrFail($id);
        if (File::exists("images/".$images->image)) {
            File::delete("images/".$images->image);
        }

        ProductImages::find($id)->delete();
        return back();
    }

    public function deletecover($id){
        $cover = Product::findOrFail($id)->cover;
        if (File::exists("cover/".$cover)) {
            File::delete("cover/".$cover);
        }
        return back();
}
}