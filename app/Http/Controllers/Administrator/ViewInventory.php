<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewInventory extends Controller
{
    public function index()
    {
        return view('admin.modules.ViewInventory.view');
    }
}
