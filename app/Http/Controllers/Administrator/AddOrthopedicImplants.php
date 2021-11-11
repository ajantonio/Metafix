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
            'price' => 'required|numeric',
            'description' => 'required'
        ]);

        $image = $request->file('image')->store('public/images');

        OrthopedicImplant::create([
            'name' => $request->name,
            'description' => $request->description,
            'screw_types_id' => $request->screw_type,
            'plate_types_id' => $request->plate_type,
            'grades_id' => $request->grade,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'diameter' => $request->diameter,
            'length' => $request->length,
            'image' => $image,
        ]);

        return redirect()->back()->with('message', 'Orthopedic implant added successfully');
    }
}
