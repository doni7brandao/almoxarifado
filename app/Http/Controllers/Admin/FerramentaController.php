<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FerramentaController extends Controller
{
    public function index()
    {
        return view('ferramentas.visualizar.index');
    }
}
