<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use views\site;
class PrincipalController extends Controller
{
    public function principal() {
        return view('site.principal'); 
    }

}
