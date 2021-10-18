<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrthopedicTechnician;
use Illuminate\Support\Facades\Storage;

class AddOrthopedicTechnicians extends Controller
{
    public function index()
    {
        return view('admin.modules.AddOrthopedicTechnicians.home');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required|mimes:png,jpeg',
            'contact_number' => 'required'
        ]);

        $image = $request->file('image')->store('public/images');

        OrthopedicTechnician::create([
            'name' => $request->name,
            'image' => $image,
            'contact_number' => $request->contact_number,
            'status' => 'On hold'
        ]);

        return redirect()->back()->with('message', 'Orthopedic technician added successfully');
    }
}
