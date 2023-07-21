<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Arxitektura;
use Illuminate\Http\Request;

class ArxitekturaController extends BaseController
{
    public function index()
    {
        $arxitektur = Arxitektura::find(1);
        return view('dashboard.arxitektura.index', [
            'arxitektur'=>$arxitektur
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg|max:20480',
        ]);
        if (!empty($validatedData['photo'])) {
            $this->fileDelete('\Arxitektura', $id, 'photo');
            $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/arxitektura');
        }
        Arxitektura::find($id)->update($validatedData);

        return redirect()->back()->with('success', 'Data updated successfully.');
    }

}
