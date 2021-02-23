<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;

class PageController extends Controller
{
    public function commentSave(Request $request){
    	Comentario::create($request->all());
    	return back();
    }
}
