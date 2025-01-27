<?php

namespace App\Traits;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
trait ImageUploaderTrait {

    /**
     * Validate if the image meets requirements
     * 
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    public function validateImage(Request $request)
    {
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                        
                return $request->validate([
                    'image' => 'mimes:jpeg,png,jpg|max:3072',
                ]);
            }
        }
    }

    /**
     * Upload the image to the database
     * 
     * @param Illuminate\Http\Request $request
     * @param string $destination
     * @return string $url 
     */
    public function storeImage(Request $request, $storage_path)
    {
        $this->validateImage($request);

        $unique_filename = "The-Outcasts-IMG-".date('YmdTHis').'.'.$request->file('image')->extension();
        Storage::putFileAs($storage_path, $request->file('image'), $unique_filename);

        return $unique_filename;
    }
}
