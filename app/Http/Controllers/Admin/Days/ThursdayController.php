<?php

namespace App\Http\Controllers\Admin\Days;

use App\Http\Controllers\Controller;
use App\Models\Thursday;
use Illuminate\Http\Request;

class ThursdayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thursdays = Thursday::all();
        return  view('admin.pages.days.thursday.index', ['thursdays'=>  $thursdays]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.pages.days.thursday.create');
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
        $status=Thursday::create($data);
        if ($status){
            return redirect()->route('thursday.index');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Thursday $thursday)
    {
        return view('admin.pages.days.thursday.show', ['thursday'=>$thursday]);
    }


    public function edit(Thursday $thursday)
    {
        return view('admin.pages.days.thursday.edit', ['thursday'=>$thursday]);
    }


    public function update(Request $request, Thursday $thursday)
    {
        $thursday->update($request->only(['host','programme','time', 'image']));

        return view('thursday.index')->with('success', 'programme added succcessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Thursday $thursday)
    {
        $thursday->delete();
        redirect()->back()->with('success', 'programme deleted successfully');
    }
}
