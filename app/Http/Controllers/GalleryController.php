<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class GalleryController extends Controller
{
        // gallery
        public function gallery() {
            return view('gallery.gallery');
        }

        public function singleGallery() {
            $gallery = Image::all();

            return view('gallery.single-gallery', compact('gallery'));
        }
}
