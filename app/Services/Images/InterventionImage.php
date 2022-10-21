<?php 

namespace App\Services\Images;

use Image;
use App\Services\Images\WatermarkInterface;
use Illuminate\Support\Facades\Storage;

class InterventionImage implements WatermarkInterface
{
    public function make(string $path): void
    {
      
        $fullPath = Storage::path($path);
        $img = Image::make($fullPath);
        $img->insert(public_path('default.png'));
        $img->save($fullPath);
    }
}