<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('categories')->orderBy('id', 'desc')->get();
        $categories = Category::orderBy('id', 'desc')->get();
        return view('dashboard.product.crud', [
            'products'=>$products,
            'categories'=>$categories,
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:20480',
            'category_id' => 'required|integer',
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
        ]);
        if (!empty($validatedData['photo'])) {
            // $this->fileDelete('\Data', $id, 'photo');
            $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/product');
        }
        Product::create($validatedData);
        return redirect()->back()->with('success', 'Data uploaded successfully.');
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg|max:20480',
            'category_id' => 'required|integer',
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
        ]);
        if (!empty($validatedData['photo'])) {
            $this->fileDelete('\Product', $id, 'photo');
            $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/product');
        }
        Product::find($id)->update($validatedData);
        return redirect()->back()->with('success', 'Data updated successfully.');
    }

    public function destroy($id)
    {
        $this->fileDelete('\Product', $id, 'photo');
        Product::find($id)->delete();
        return back()->with('success', 'Data deleted.');
    }
}
