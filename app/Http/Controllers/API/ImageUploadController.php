<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    public function imageUpload(Request $request)
    {
        if ($request->has('image')) {
            $image = $request->image;

            foreach ($image as $key => $value) {
                $name = time().$key.'.'.$value->getClientOriginalExtension();

                $path = public_path('upload');

                $value->move($path,$name);
            }
            return response()->json(['data' => '','message' => 'Image upload successfully.','status' => true], 200);
        }

    }
}
