<?php

namespace App\Http\Controllers\Dashboa;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Dashboard\BaseController;
use App\Models\MetaTeg;
use Illuminate\Http\Request;

class MetaTegController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metateg = MetaTeg::find(1);
        return view('dashboard.metateg.crud', [
            'metateg'=>$metateg
        ]);
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg|max:20480',
            'name' => 'required|string|max:255',
            'discription' => 'required',
        ]);
        if (!empty($validatedData['photo'])) {
            $this->fileDelete('\MetaTeg', $id, 'photo');
            $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/metateg');
        }
        MetaTeg::find($id)->update($validatedData);

        return redirect()->back()->with('success', 'Data uploaded successfully.');
    }
}
