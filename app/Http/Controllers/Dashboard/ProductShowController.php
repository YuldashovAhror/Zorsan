<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ProductShow;
use Illuminate\Http\Request;

class ProductShowController extends BaseController
{
    public function index()
    {
        $productshows = ProductShow::orderBy('id', 'desc')->get();
        return view('dashboard.productshow.crud', [
            'productshows'=>$productshows
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:20480',
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
        ]);
        if (!empty($validatedData['photo'])) {
            $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/productshow');
        }
        ProductShow::create($validatedData);

        return redirect()->back()->with('success', 'Data uploaded successfully.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg|max:20480',
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
        ]);
        if (!empty($validatedData['photo'])) {
            $this->fileDelete('\ProductShow', $id, 'photo');
            $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/productshow');
        }
        ProductShow::find($id)->update($validatedData);

        return redirect()->back()->with('success', 'Data uploaded successfully.');
    }

    public function destroy($id)
    {
        $this->fileDelete('\ProductShow', $id, 'photo');
        ProductShow::find($id)->delete();
        return back()->with('success', 'Data deleted.');
    }
}
