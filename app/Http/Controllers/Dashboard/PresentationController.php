<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Presentation;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PresentationController extends BaseController
{
    public function index()
    {
        $presentation = Presentation::find(1);
        return view('dashboard.presentation.index', [
            'presentation'=>$presentation
        ]);
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'photo' => 'mimes:jpeg,png,jpg,gif,mp4,avi,mov,wmv,pdf|max:20480',
        ]);
        $p = Presentation::find($id);
        if(!empty($validatedData['photo'])){
            if(is_file(public_path($p->photo))){
                unlink(public_path($p->photo));
            }
            $img_name = Str::random(10).'.'.$validatedData['photo']->getClientOriginalExtension();
            $validatedData['photo']->move(public_path('/image/presentation'), $img_name);
            $p->photo = '/image/presentation/'.$img_name;
        }
        $p->save();
        // Presentation::find($id)->update($validatedData);
        return redirect()->back()->with('success', 'Data uploaded successfully.');
    }
}
