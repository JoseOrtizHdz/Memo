<?php

namespace MemoTorrijos\Http\Controllers\Desktop;

use Illuminate\Http\Request;
use MemoTorrijos\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index()
    {
      return view('principal/index');
    }

    public function cursos()
    {
      return view('principal/cursos');
    }
    public function quiensoy()
    {
      return view('principal/quiensoy');
    }

}
