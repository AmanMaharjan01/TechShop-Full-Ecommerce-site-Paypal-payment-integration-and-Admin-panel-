<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;

class FrontpageController extends Controller
{
    public function show()
    {
        $data = products::paginate(12);
        return view('frontpage',['items' => $data]);
    } 
}
