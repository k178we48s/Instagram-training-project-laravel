<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InstagramFavourites;

class InstagramController extends Controller
{
    public function index()
    {
        return view('instagram.index', [
            'tag' => '',
            'count' => ''
        ]);
    }

    public function search(Request $request)
    {
        $tag = $request->input('tag');
        $count = (int) $request->input('count');
        $images = InstagramFavourites::getImagesByTag($tag, $count);

        return view('instagram.index', [
            'images' => $images,
            'tag' => $tag,
            'count' => $count
        ]);
    }

    public function favourites(Request $request)
    {
        $images = InstagramFavourites::getFavourites();

        return view('instagram.favourites', [
            'images' => $images,
            'tag' => '',
            'count' => ''
        ]);
    }

    public function addToFavourites(Request $request)
    {
        $favourit = new InstagramFavourites;
        $favourit->link = $request->input('link');
        $favourit->url = $request->input('url');
        $favourit->save();
        return $favourit->link;
    }

    public function deleteFromFavourites(Request $request)
    {
        $link = $request->input('link');
        InstagramFavourites::where('link', $link)->delete();
        return $link;
    }
}
