<?php

namespace App\Http\Controllers;

use App\Models\Disserv;



use Illuminate\Http\Request;

class DisservController extends Controller
{
    public function index()
    {
        return view('dashboard.disserv.index', [
            'title' => 'List Display service',
            'header' => 'Daftar List Display Service'

        ]);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show()
    {
    }

    public function edit()
    {
    }

    public function update(Request $request)
    {
    }


    public function destroy()
    {
    }

    public function download()
    {
    }
}
