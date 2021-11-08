<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrthopedicTechnician;
use Illuminate\Support\Facades\Storage;

class ViewOrthopedicTechnicians extends Controller
{
    public function index()
    {
        $orthopedic_technician = OrthopedicTechnician::get();
        return view('admin.modules.ViewOrthopedicTechnicians.view', compact('orthopedic_technician'));
    }

    public function destroy($id)
    {
        $orthopedic_technician = OrthopedicTechnician::find($id);
        $orthopedic_technician->delete();

        return redirect()->back()->with('message', 'Orthopedic technician removed successfully');
    }

    public function edit($id)
    {
        $orthopedic_technician = OrthopedicTechnician::find($id);
        return view('admin.modules.ViewOrthopedicTechnicians.edit', compact('orthopedic_technician'));
    }

    public function update(Request $request, $id)
    {
        $orthopedic_technician = OrthopedicTechnician::find($id);
        $image = $orthopedic_technician->image;
        if ($request->file('image')) {
            $image = $request->file('image')->store('public/files');
        }

        $orthopedic_technician->name = $request->name;
        $orthopedic_technician->email = $request->email;
        $orthopedic_technician->contact_number = $request->contact_number;
        $orthopedic_technician->status = 'On hold';
        $orthopedic_technician->image = $image;
        $orthopedic_technician->save();

        return redirect()->route('vieworthopedictechnicians.home')->with('message', 'Orthopedic technician edited successfully');
    }
}
