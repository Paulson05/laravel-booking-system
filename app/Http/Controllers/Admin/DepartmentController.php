<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Collection;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();
                return view('admin.pages.department.index', ['departments' => $departments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'detail' => 'required',
           'title' => 'required'
        ]);

        $dept = Department::create(collect($request->only(['detail', 'title']))->all());
        $dept->save();
        return redirect()->route('department.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        return view('admin.pages.department.show', ['department' => $department]);
    }


    public function edit(Department $department)
    {
        return view('admin.pages.department.edit', ['department'=> $department]);
    }


    public function update(Request $request, Department $department)
    {
        $department->update(collect($request->only(['title', 'detail']))->all());
        return redirect()->route('department.index')->with('success', 'department updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Department $department)
    {
        $department->delete();
        return redirect()->back()->with('success', 'department deleted succesfully');
    }
}
