<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\SecondSlider;
use Illuminate\Http\Request;

class SecondSliderController extends BaseController
{
    public function index()
    {
        $secondslider = SecondSlider::find(1);
        return view('dashboard.secondslider.crud', [
            'secondslider'=>$secondslider
        ]);
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg|max:20480',
            'photo2' => 'image|mimes:jpeg,png,jpg|max:20480',
        ]);
        if (!empty($validatedData['photo'])) {
            $this->fileDelete('\SecondSlider', $id, 'photo');
            $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/secondslider');
        }
        if (!empty($validatedData['photo2'])) {
            $this->fileDelete('\SecondSlider', $id, 'photo2');
            $validatedData['photo2'] = $this->photoSave($validatedData['photo2'], 'image/secondslider');
        }
        SecondSlider::find($id)->update($validatedData);

        return redirect()->back()->with('success', 'Data uploaded successfully.');
    }

}
