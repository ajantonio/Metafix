<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrthopedicTechnician;

class ViewOrthopedicTechnicians extends Controller
{
    public function index()
    {
        $orthopedic_technician = OrthopedicTechnician::get();
        return view('admin.modules.ViewOrthopedicTechnicians.view', compact('orthopedic_technician'));
    }
}
