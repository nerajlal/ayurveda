<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use League\Flysystem\FileNotFoundException;

class ImageController extends Controller
{
    public function show($path)
    {
        try {
            $file = Storage::disk('public')->get($path);
            $type = Storage::disk('public')->mimeType($path);

            $response = response($file, 200);
            $response->header("Content-Type", $type);

            return $response;
        } catch (FileNotFoundException $e) {
            abort(404);
        }
    }
}
