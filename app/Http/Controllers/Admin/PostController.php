<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with(['tags'])->get();

        return view('admin.pages.post.index',['posts'=> $posts] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tags::all();
        $categories = Category::all();
        return view('admin.pages.post.create', ['tags'=>$tags, 'categories' => $categories  ] );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
//
////        dd($request->all());
//
//        $this->validate($request,[
//            'title' => 'required',
//            'body' => 'required',
//            'image' => 'required',
//            'categories_id' => 'required'
//        ]);
////        $data= $request->all();
//        $data = collect($request->only(['title', 'body', 'image', 'tag_id', 'categories_id']))->all();
////        dd($data);
//        $slug=Str::slug($request->input('title'));
//
//        $slug_count=Post::where('slug', $slug)->count();
//
//        if ($slug_count>0){
//            $slug = time(). '_'.$slug;
//        }
//        $data['slug']=$slug;
////        return $data;
//        $status=Post::create([$data]);
//
////        dd($status);
//        if ($status){
//            return redirect()->route('post.index');
//        }
//        return redirect()->back();
//    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'body' => 'required',
            'image' => 'required',
            'categories_id' => 'required'
        ]);

        // Post Thumbnail
        if($request->hasFile('image')){
            $image1=$request->file('image');
            $reThumbImage=time().'.'.$image1->getClientOriginalExtension();
            $dest1=public_path('/imgs/image');
            $image1->move($dest1,$reThumbImage);
        }else{
            $reThumbImage='na';
        }


        $post=new Post;
        $post->categories_id=$request->categories_id;
        $post->title=$request->title;
        $post->image=$reThumbImage;
        $post->body=$request->body;
        $post->tag_id=$request->tag_id;
        $post->save();

        return redirect()->back()->with('success','Data has been added');
    }
    public function show(Post $post)
    {

        return view('admin.pages.post.show', ['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.pages.post.edit', ['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }


    public function destroy(Request $request, Post $post)
    {
        $post->delete();
        return redirect()->back();
    }
}
