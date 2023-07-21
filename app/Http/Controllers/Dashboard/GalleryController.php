<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::orderBy('id', 'desc')->get();
        return view('dashboard.gallery.crud', [
            'galleries'=>$galleries
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:20480',
        ]);
        if (!empty($validatedData['photo'])) {
            $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/gallery');
        }
        Gallery::create($validatedData);

        return redirect()->back()->with('success', 'Data uploaded successfully.');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg|max:20480',
        ]);
        if (!empty($validatedData['photo'])) {
            $this->fileDelete('\Gallery', $id, 'photo');
            $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/gallery');
        }
        Gallery::find($id)->update($validatedData);

        return redirect()->back()->with('success', 'Data uploaded successfully.');
    }

    public function destroy($id)
    {
        $this->fileDelete('\Gallery', $id, 'photo');
        Gallery::find($id)->delete();
        return back()->with('success', 'Data deleted.');
    }
}
