<?php

namespace App\Http\Controllers\Admin\Days;

use App\Http\Controllers\Controller;
use App\Models\Monday;
use Illuminate\Http\Request;

class MondayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $mondays = Monday::all();
        return  view('admin.pages.days.monday.index', ['mondays'=> $mondays]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.pages.days.monday.create');
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
        $status=Monday::create($data);
        if ($status){
            return redirect()->route('monday.index');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Monday $monday)
    {
        return view ('admin.pages.days.monday.show', ['monday'=> $monday]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Monday $monday)
    {
        return view ('admin.pages.days.monday.edit', ['monday'=> $monday]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Monday $monday)
    {
        $monday->update($request->only(['programme', 'host','time', 'image']));

        return redirect()->route('monday.index')
            ->with('success', 'post updated sucessfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Monday $monday)
    {
        $monday->delete();
        return redirect()->route('monday.index');
    }
}
