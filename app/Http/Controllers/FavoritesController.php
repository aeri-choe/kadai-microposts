<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function store(Request $request, $post_id)
    {
        \Auth::user()->favorite($post_id);
        return back();
    }
    
    public function destroy($post_id)
    {
        \Auth::user()->unfavorite($post_id);
        return back();
    }
}
