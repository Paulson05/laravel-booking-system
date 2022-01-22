<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.pages.team.index', ['teams' => $teams]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.team.create');
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
           'name' => 'required',
           'job_title' => 'required',
           'image' => 'required',
           'facebook_acc' => 'required',
           'instagram_acc' => 'required',
           'twitter_acc' =>  'required'
        ]);
        $data= $request->all();
        $slug=Str::slug($request->input('name'));
        $slug_count=Team::where('slug', $slug)->count();
        if ($slug_count>0){
            $slug = time(). '_'.$slug;
        }
        $data['slug']=$slug;
//        return $data;
        $status=Team::create($data);
        if ($status){
            return redirect()->route('team.index');
        }
              return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Team  $team){

        return view ('admin.pages.team.show')->with([
            'team'=> $team  // note id is post

        ]);
    }

    public function edit(Team $team)
    {

        return view ('admin.pages.team.edit')->with([
            'team'=> $team,

        ]);
    }

    public function update(Request $request, Team  $team)
    {
        $team->update($request->only(['name', 'job_title','facebook_acc', 'twitter_acc', 'instagram_acc']));

        return redirect()->route('team.index')
            ->with('success', 'post updated sucessfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Team $team)
    {
        $team->delete();
        return redirect()->route('team.index')->with('sucsess', 'team memeber deleted successfully');
    }
}
