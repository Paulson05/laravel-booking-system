<?php

namespace App\Http\Controllers\Admin\Days;

use App\Http\Controllers\Controller;
use App\Models\Saturday;
use Illuminate\Http\Request;

class SaturdayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $saturdays = Saturday::all();
        return  view('admin.pages.days.saturday.index', ['saturdays'=>  $saturdays]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.pages.days.saturday.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'programme' => 'required',
            'host' => 'required',
            'time' => 'required',
        ]);
        $data= $request->all();
//        return $data;
        $status=Saturday::create($data);
        if ($status){
            return redirect()->route('saturday.index');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(Saturday $saturday)
    {
        return view('admin.pages.days.saturday.show', ['saturday'=>$saturday]);
    }


    public function edit( Saturday $saturday)
    {
        return view('admin.pages.days.saturday.edit', ['saturday'=>$saturday]);
    }


    public function update(Request $request, Saturday $saturday)
    {
        $saturday->update($request->only(['programme', 'host', 'time', 'image']));

        return redirect()->route('saturday.index')->with('success', 'programme updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Saturday $saturday)
    {
        $saturday->delete();
        return redirect()->back();
    }
}
