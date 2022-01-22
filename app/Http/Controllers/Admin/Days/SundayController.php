<?php

namespace App\Http\Controllers\Admin\Days;

use App\Http\Controllers\Controller;
use App\Models\Saturday;
use App\Models\Sunday;
use Illuminate\Http\Request;

class SundayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sundays = Sunday::all();
        return  view('admin.pages.days.sunday.index', ['sundays'=>  $sundays]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.pages.days.sunday.create');
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
        $status=Sunday::create($data);
        if ($status){
            return redirect()->route('sunday.index');
        }
        return redirect()->back();
    }


    public function show(Sunday $sunday)
    {
        return view('admin.pages.days.sunday.show', ['sunday'=>$sunday]);
    }


    public function edit( Sunday $sunday)
    {
        return view('admin.pages.days.sunday.edit', ['sunday'=>$sunday]);
    }


    public function update(Request $request, Sunday $sunday)
    {
        $sunday->update($request->only(['programme', 'host', 'time', 'image']));

        return redirect()->route('sunday.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Sunday $sunday)
    {
        $sunday->delete();
        return redirect()->back();
    }
}
