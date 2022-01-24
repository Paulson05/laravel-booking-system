<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StaffStoreRequest;
use App\Models\Department;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::all();
        return view('admin.pages.staff.index', ['staffs'=>$staffs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departs = Department::all();
        return view('admin.pages.staff.create',['departs' => $departs ] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StaffStoreRequest $request)
    {


        if($request->hasFile('photo')){
            $image1=$request->file('photo');
            $reThumbImage=time().'.'.$image1->getClientOriginalExtension();
            $dest1=public_path('/imgs/thumb');
            $image1->move($dest1,$reThumbImage);
        }else{
            $reThumbImage='na';
        }
        $staff = Staff::create(collect($request->only(['full_name','department_id','bio','salary_type','salary_amt']))
            ->put('photo',$reThumbImage)
            ->all());
        $staff->save();

        return redirect()->route('staff.index')->with('success', 'customer added sucessfully');

    }


    public function show(Staff $staff)
    {
        return view ('admin.pages.staff.show', ['staff'=>$staff]);

    }


    public function edit(Staff $staff)
    {
         $departs = Department::all();

        return view('admin.pages.staff.edit', ['staff'=>$staff, 'departs'=>$departs]);

    }

    public function update(Request $request, Staff $staff)
    {
        if($staff) {
            if ($request->hasFile('photo')) {
                $image1 = $request->file('photo');
                $reThumbImage = time() . '.' . $image1->getClientOriginalExtension();
                $dest1 = public_path('/imgs/thumb');
                $image1->move($dest1, $reThumbImage);
            } else {
                $reThumbImage = 'na';
            }


            $staff->update(collect($request->only(['full_name','department_id','bio','salary_type','salary_amt']))
                ->put('photo',$reThumbImage)->all());
            return redirect()->route('staff.index')
                ->with('success', 'staff updated sucessfully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();
        return redirect()->back();
    }
}
