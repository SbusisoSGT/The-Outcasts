<?php

namespace App\Traits;
 
use Illuminate\Http\Request;
 
trait ImageUploaderTrait {

    /**
     * Validate if the image meets requirements
     * 
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    public function validateImage(Request $request){
        if ($request->hasFile('image')) {
                    if ($request->file('image')->isValid()) {
                        
                        return $request->validate([
                            'image' => 'mimes:jpeg,png|max:3072',
                        ]);
                    }
                }
    }

    /**
     * Upload the image to the database
     * 
     * @param Illuminate\Http\Request $request
     * @param string $destination
     * @param string $image_name
     * @return string $url
     */
    public function storeImage(Request $request, $image_name, $destination)
    {
        $extension = $request->image->extension();
        $request->image->storeAs($destination, $image_name.".".$extension);
        $url = $image_name.".".$extension;

        return $url;
    }
}
