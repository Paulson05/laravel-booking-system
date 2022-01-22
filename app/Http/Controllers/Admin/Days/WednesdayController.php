<?php

namespace App\Http\Controllers\Admin\Days;

use App\Http\Controllers\Controller;
use App\Models\Wednesday;
use Illuminate\Http\Request;

class WednesdayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wednesdays = Wednesday::all();
        return  view('admin.pages.days.wednesday.index', ['wednesdays'=>  $wednesdays]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.pages.days.wednesday.create');
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
        $status=Wednesday::create($data);
        if ($status){
            return redirect()->route('wednesday.index');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Wednesday $wednesday)
    {
        return  view('admin.pages.days.wednesday.show',['wednesday'=>$wednesday]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Wednesday $wednesday)
    {
        return view('admin.pages.days.wednesday.edit',['wednesday'=>$wednesday]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wednesday $wednesday)
    {
        $wednesday->update($request->only(['programme', 'host','time', 'image']));
        return redirect()->route('wednesday.index')
            ->with('success', 'post updated sucessfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Wednesday $wednesday)
    {
        $wednesday->delete();
        return redirect()->route('wednesday.index')->with('success', 'programme successfully deleted');
    }
}
