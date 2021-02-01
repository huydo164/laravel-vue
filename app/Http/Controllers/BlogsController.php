<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
class BlogsController extends Controller
{
    public function index()
    {
        if(request()->input('title')){
            return Blogs::where('title', 'LIKE', '%'.request()->input('title').'%')->get();
        }
        return Blogs::all();
    }

    public function show(Blogs $blog)
    {
        return $blog;
    }

    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'des' => 'required',
            'detail' => 'required',
            'category' => 'required',
            'public' => 'required',
            'position' => 'required',
        ]);
        $blog = Blogs::create($request->all());

        return response()->json($blog, 201);
    }

    public function update(Request $request, Blogs $blog)
    {
        $request->validate([
            'title' => 'required',
            'des' => 'required',
            'detail' => 'required',
            'category' => 'required',
            'public' => 'required',
            'position' => 'required',
        ]);
        
        $blog->update($request->only(['title', 'des', 'detail', 'category', 'public', 'data_pubblic', 'position', 'thumbs']));

        return response()->json([
            'messages' => 'Update thành công',
            'blog' => $blog,
        ]);
    }

    public function destroy(Blogs $blog)
    {
        $blog->delete();

        return response()->json([
            'messages' => 'Xóa thành công!'
        ]);
    }
}