<?php

namespace App\Http\Controllers;

use App\Models\Servicedisplay;

use Illuminate\Http\Request;

class ServicedisplayController extends Controller
{
    public function index()
    {
        return view('displayservice.index', []);
    }
    public function createtake()
    {
        return view('displayservice.carttake', []);
    }
    public function createdine()
    {
        return view('displayservice.cartdinein', []);
    }
    
    public function done()
    {
        return view('displayservice.done', []);
    }

}
