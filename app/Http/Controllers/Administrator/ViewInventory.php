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
}
