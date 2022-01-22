<?php

namespace App\Http\Controllers\Admin\Days;

use App\Http\Controllers\Controller;
use App\Models\Friday;
use Illuminate\Http\Request;

class FridayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fridays = Friday::all();
        return  view('admin.pages.days.friday.index', ['fridays'=>  $fridays]);
    }


    public function create()
    {
        return  view('admin.pages.days.friday.create');
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
        $status=Friday::create($data);
        if ($status){
            return redirect()->route('friday.index');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Friday $friday)
    {
        return view('admin.pages.days.friday.show', ['friday'=>$friday]);
    }


    public function edit(Friday $friday)
    {
        return view('admin.pages.days.friday.edit', ['friday'=>$friday]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Friday $friday)
    {
        $friday->update($request->only(['host', 'programme','time', 'image']));
        return redirect()->route('friday.index')->with('success', 'programme updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Friday $friday)
    {
        $friday->delete();
        return redirect()->back();
    }
}
