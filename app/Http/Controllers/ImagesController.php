<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ImagesController extends Controller
{
    public function show_img($welcome_background)
    {

        $img_path = asset('storage/app/'. $welcome_background);
        $img = Image::make($img_path);


        return $img->response();
    }
}
