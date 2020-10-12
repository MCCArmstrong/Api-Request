<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Product;
use Redirect;
use App\Helper\ImageHelper;
// use App\Helper\Paths;
use Storage;
use File;
use Log;
use Exceptions;

class MediaController extends Controller
{
    public function livesearch(Request $request)
    {
        $search = $request->search;
        $product = '';
        if(trim($request->search))
        {
            $product = Product::where('title', 'LIKE', "%{$search}%")
            ->orderBy('created_at', 'DESC')->limit(5)->get();

            $product = $product->map(function($products, $key){
                return [
                    'title' => $products['title'],
                    'url'   => url('public/image'.$products['slug']),
                    'image' => ImageHelper::catch_first_image($products['description'])
                ];
            });
        }
        return $product;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $productCount = Product::all()->count();
        $products = Product::orderBy('id', 'desc')->paginate(8);
        $data = [
            'productCount' => $productCount,
            'products' =>  $products
        ];
       
        
        return view('admin.index', $data);
    }



   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.create');
    }
    private function storeImage($request)
    {
        // Log::info($request);
        try{   
            $data = [];
            foreach($request->file('images') as $image){
                $imageName = $image->getClientOriginalName();
                $imagePath = "public/images/" . $imageName;
                Storage::put($imagePath, File::get($image));
                array_push($data, $imageName);
            }
            return $data;
        } catch (Exception $error) {
            
            Log::info("MediaController@store error". $error->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            $request->validate([
                'title' => 'required',
                'product_code' => 'required',
                // 'image' => 'image|mimes:jpeg, png, jpg',
                'description' => 'required',
            ]);
            $product_model = new Product();
            if ($request->hasfile('images')){
                $images = $this->storeImage($request);
                $product_model ['image'] = json_encode($images);
            }
            
            // $product_model['image'] = $request->$images;
            $product_model['title'] = $request->get('title');
            $product_model['product_code'] = $request->get('product_code');
            $product_model['description'] = $request->get('description');
            // $image->json_decode('data:');
            
            $product_model->save();
            Log::info($product_model);
            
              return redirect()->route('product-media.index')->with('success','Greate! Product created successfully.');
        } catch (Exception $error) {
            dd($error->getMessage());
            Log::info("MediaController@store error". $error->getMessage());
            return redirect()->back();
        }
    }


    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
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
        $where = array('id' => $id);
        $data['product_info'] = Product::where($where)->first();
        return view('admin.edit', $data);
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
        $request->validate([
            'title' => 'required',
            'product_code' => 'required',
            'description' => 'required'
        ]);
        
        $update = ['title' => $request->title, 'description' => $request->description];
        if ($files = $request->file('image')) {
        $file_path = 'public/image/';
        $productImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
        $files->move($file_path, $productImage);
        $update['image'] = "$productImage";
        }
        $update['title'] = $request->get('title');
        $update['product_code'] = $request->get('product_code');
        $update['description'] = $request->get('description');
        Product::where('id',$id)->update($update);
        return Redirect::to('admin.index')->with('success','Product updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::where('id', $id)->delete();
        return redirect()->route('product-media.index')
        ->with('success','Great! Product created successfully.');
        // return Redirect::to('admin.index')->with('success', 'Product has been deleted!');
    }


    
}
