<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrthopedicImplant;


class AddOrthopedicImplants extends Controller
{
    public function index()
    {
        return view('admin.modules.AddOrthopedicImplants.home');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'image' => 'required|mimes:jpeg,png',
            'grade' => 'required',
            'price' => 'required|price',
            'description' => 'required'
        ]);
    }
}
