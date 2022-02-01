<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('admin.pages.service.index', ['services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $request)
    {

        if($request->hasFile('photo')){
            $image1=$request->file('photo');
            $reThumbImage=time().'.'.$image1->getClientOriginalExtension();
            $dest1=public_path('/imgs/thumb');
            $image1->move($dest1,$reThumbImage);
        }else{
            $reThumbImage='na';
        }
       $service = Service::create(collect($request->only(['title', 'small_desc', 'detail_desc']))
            ->put('photo',$reThumbImage)
            ->all());
        $service->save();

        return redirect()->route('services.index')->with('success', 'service added sucessfully');

    }


    public function show(Service $service)
    {
        return view('admin.pages.service.show', ['service'=> $service]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.pages.service.edit', ['service'=> $service]);
    }


    public function update(Request $request,Service $service )
    {

        if($service){
            if($request->hasFile('photo')){
                $image1=$request->file('photo');
                $reThumbImage=time().'.'.$image1->getClientOriginalExtension();
                $dest1=public_path('/imgs/thumb');
                $image1->move($dest1,$reThumbImage);
            }else{
                $reThumbImage='na';
            }


            $service->update(collect($request->only(['title', 'small_desc', 'detail_desc']))->put('photo',$reThumbImage)->all());
            return redirect()->route('services.index')
                ->with('success', 'services updated sucessfully!');
        }
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->back();
    }
}
