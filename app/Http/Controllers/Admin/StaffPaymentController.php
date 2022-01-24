<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Staff;
use App\Models\StaffPayment;
use Illuminate\Http\Request;

class StaffPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffpayment = StaffPayment::all();
        return view('admin.pages.staffpayment.index', ['staffpayment' =>  $staffpayment]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $staffs = Staff::all();
        return  view('admin.pages.staffpayment.create', ['staffs'=>$staffs]);
    }


    public function store(Request $request)
    {
          $this->validate($request,[
              'staff_id',
              'amount',
              'payment_date'
          ]);
          $staffpayment = StaffPayment::create(collect($request->only('staff_id','amount','payment_date'))->all());
          $staffpayment->save();
          return  redirect()->route('staffpayment.index')->with('success', 'staffpayemnt added successfully');
    }


    public function show($id)
    {

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
    public function destroy(Request $request, StaffPayment $staff)
    {
        $staff->delete();
        return redirect()->back();
    }
}
