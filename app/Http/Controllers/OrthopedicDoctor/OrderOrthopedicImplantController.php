<?php

namespace App\Http\Controllers\OrthopedicDoctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OrthopedicImplant;
use App\Models\Order;

class OrderOrthopedicImplantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orthopedic_implants = OrthopedicImplant::get();
        return view('orthopedicDoctor.modules.orderorthopedicimplant.home', compact('orthopedic_implants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $orthopedic_implant = OrthopedicImplant::find($id);
        return view('orthopedicDoctor.modules.orderorthopedicimplant.showimplant', compact('orthopedic_implant'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
