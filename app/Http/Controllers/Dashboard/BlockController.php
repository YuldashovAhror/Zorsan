<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Block;
use Illuminate\Http\Request;

class BlockController extends BaseController
{
    public function index()
    {
        $block = Block::find(1);
        return view('dashboard.block.crud', [
            'block'=>$block
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg|max:20480',
            'photo2' => 'image|mimes:jpeg,png,jpg|max:20480',
        ]);
        if (!empty($validatedData['photo'])) {
            $this->fileDelete('\Block', $id, 'photo');
            $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/block');
        }
        if (!empty($validatedData['photo2'])) {
            $this->fileDelete('\Block', $id, 'photo2');
            $validatedData['photo2'] = $this->photoSave($validatedData['photo2'], 'image/block');
        }
        Block::find($id)->update($validatedData);

        return redirect()->back()->with('success', 'Data uploaded successfully.');
    }
}
