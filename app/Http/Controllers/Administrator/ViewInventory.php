<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrthopedicImplant;

class ViewInventory extends Controller
{
    public function index()
    {
        $orthopedic_implant = OrthopedicImplant::with('grades')
            ->get();

        return view('admin.modules.ViewInventory.view', compact('orthopedic_implant'));
    }

    public function destroy($id)
    {
        $orthopedic_implant = OrthopedicImplant::find($id);
        $orthopedic_implant->delete();

        return redirect()->back()->with('message', 'Orthopedic implant removed successfully');
    }

    public function edit($id)
    {
        $orthopedic_implant = OrthopedicImplant::find($id);
        return view('admin.modules.ViewInventory.edit', compact('orthopedic_implant'));
    }

    public function update(Request $request, $id)
    {
        $orthopedic_implant = OrthopedicImplant::find($id);
        $image = $orthopedic_implant->image;
        if ($request->file('image')) {
            $image = $request->file('image')->store('public/files');
        }

        $orthopedic_implant->name = $request->name;
        $orthopedic_implant->description = $request->description;
        $orthopedic_implant->price = $request->price;
        $orthopedic_implant->diameter = $request->diameter;
        $orthopedic_implant->plate_types_id = $request->plate_type;
        $orthopedic_implant->screw_types_id = $request->screw_type;
        $orthopedic_implant->length = $request->length;
        $orthopedic_implant->grades_id = $request->grade;
        $orthopedic_implant->quantity = $request->quantity;
        $orthopedic_implant->image = $image;
        $orthopedic_implant->save();

        return redirect()->route('viewinventory.view')->with('message', 'Orthopedic implant edited successfully');
    }
}
