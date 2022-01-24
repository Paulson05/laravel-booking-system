<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RoomType;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomtypes = RoomType::all();
        return  view('admin.pages.roomtype.index', ['roomtypes'=>$roomtypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.pages.roomtype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $this->validate($request,[
            'title' => 'required',
            'price' => 'required',
            'detail' => 'required'
        ]);

        $room = RoomType::create(collect($request->only(['title', 'price', 'detail']))->all());
        $room->save();
        return redirect()->route('roomtype.index');
    }


    public function show(RoomType $roomtype)
    {
        return view('admin.pages.roomtype.show', ['roometype'=> $roomtype]);
    }

    public function edit(RoomType $roomtype)
    {
        return view('admin.pages.roomtype.edit', ['roomtype'=> $roomtype]);
    }


    public function update(Request $request, RoomType $roomtype)
    {
        $roomtype->update(collect($request->only(['title', 'price', 'detail']))->all());
        return redirect()->route('roomtype.index');
    }


    public function destroy(Request $request, RoomType $roomtype)
    {
        $roomtype->delete();
        return redirect()->back();
    }
}
