<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use DB;
use App\Models\Category;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cats = Category::withTranslation()
      ->where('type_id', 1)->get();

      $products = Product::withTranslation()->where('type_id', 1)->get();

        return view('products.index', compact('cats', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $this->authorize('create', 'App\Models\Product');
      $producttypes = \App\ProductType::all();
      return view('products.create', compact('producttypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
        'title' =>'required|max:100',
        'description' =>'required',
        'meta_description' =>'max:160',
        'meta_keywords' =>'',
        'company_id' => '',
        'active' => 'nullable',
        'user_id' => '',
        'product_type' => '',
        'header' => '',
        'logo' => '',
        'image1' =>'',
        'image2' => '',
        'image3' => '',
        'sku' => '',
        'price' => '',
        ]);
      $product = new Product;
      $product->title = $request->input('title');
      $product->slug = str_slug($request->input('title'), '-');
      $product->meta_description = $request->input('meta_description');
      $product->meta_keywords = $request->input('meta_keywords');
      $product->company_id = $request->company_id;
      $product->sku = $request->sku;
      $product->price = $request->price;
      $product->product_type = $request->product_type;
      $product->header = $request->header;
      $product->logo = $request->logo;
      $product->image1 = $request->image1;
      $product->image2 = $request->image2;
      $product->image3 = $request->image3;
      $product->active = $request->active;
      $product->description = $request->description;
      $product->user_id = Auth::user()->id;

      if ($request->hasFile('header')) {
          $header = $request->file('header');
          $filename = time() . '.' . $header->getClientOriginalExtension();
          $location = public_path("products/" . $filename);
          Image::make($header)->resize(800, 400)->save($location);
          // Storage::put($image)->save($location);
          $product->header = $filename;
        }

      $product->save();
      $notification = array(
      'message' => 'Product added successfully',
      'alert-type' => 'info'
      );
      return redirect(route('product.show',$product->id))->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::whereTranslation('slug', $slug)->with('categories')->first();
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
      $this->authorize('update', $product);

    $categories = \App\ProductType::all();
    $product = Product::find($id);
      return view('products.edit', compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
      $this->authorize('update', $product);

      $this->validate($request,[
        'title' =>'required|max:100',
        'slug' => 'unique:products,title',
        'descrition' =>'sometimes',
        'meta_description' =>'max:160',
        'meta_keywords' =>'',
        'active' => 'nullable',
        'company_id' => '',
        'user_id' => '',
        'product_type' => '',
        'header' => '',
        'logo' => '',
        'image1' =>'',
        'image2' => '',
        'image3' => '',
        'sku' => '',
        'price' => '',
        ]);

        $product = Product::find($product->id);
        $product->title = $request->title;
        $product->slug = str_slug($request->title, '-');
        $product->meta_description = $request->input('meta_description');
        $product->meta_keywords = $request->input('meta_keywords');
        $product->company_id = $request->company_id;
        $product->sku = $request->sku;
        $product->price = $request->price;
        $product->product_type = $request->product_type;
        $product->header = $request->header;
        $product->logo = $request->logo;
        $product->image1 = $request->image1;
        $product->image2 = $request->image2;
        $product->image3 = $request->image3;
        $product->active = $request->active;
        $product->description = $request->description;
        $product->user_id = Auth::user()->id;

        if ($request->hasFile('header')) {
          //add new photo
            $header = $request->file('header');
            $filename = time() . '.' . $header->getClientOriginalExtension();
            $location = public_path("images/products/" . $filename);
            $oldfile = public_path("images/products/" . $product->header);
            // dd($oldfile);
            if(\File::exists($oldfile))
            {
               \File::delete($oldfile);
             }
             Image::make($header)->resize(800, 400)->save($location);
            $product->header = $filename;
          }

        $product->save();
        $notification = array(
        'message' => 'Product updated successfully',
        'alert-type' => 'info'
        );
        return redirect(route('product.show', $product->id))->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
      $this->authorize('delete', $product);

      Product::where('id',$id)->delete();
      $notification = array(
      'message' => 'User deleted successfully',
      'alert-type' => 'success'
      );
      return redirect(route('products.index'))->with($notification);
    }
}
