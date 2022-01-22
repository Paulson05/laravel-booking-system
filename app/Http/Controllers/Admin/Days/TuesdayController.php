<?php

namespace App\Http\Controllers\Admin\Days;

use App\Http\Controllers\Controller;
use App\Models\Tuesday;
use Illuminate\Http\Request;

class TuesdayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tuesdays = Tuesday::all();
        return  view('admin.pages.days.tuesday.index', ['tuesdays'=>  $tuesdays]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.pages.days.tuesday.create');
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
        $status=Tuesday::create($data);
        if ($status){
            return redirect()->route('tuesday.index');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tuesday $tuesday)
    {
        return view('admin.pages.days.tuesday.show', ['tuesday'=> $tuesday]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tuesday $tuesday)
    {
          return view('admin.pages.days.tuesday.edit', ['tuesday'=>$tuesday]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tuesday $tuesday)
    {
        $tuesday->update($request->only(['programme', 'host','time', 'image']));

        return redirect()->route('tuesday.index')
            ->with('success', 'post updated sucessfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Tuesday $tuesday)
    {
        $tuesday->delete();
        return redirect()->back();
    }
}
