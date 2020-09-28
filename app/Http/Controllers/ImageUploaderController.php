<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploaderController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                
                return $request->validate([
                    'image' => 'mimes:jpeg,png|max:3072',
                ]);
            }
        }

        abort(500, 'Could not upload image');
    }
}
