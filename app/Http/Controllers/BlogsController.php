<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
class BlogsController extends Controller
{
    public function index()
    {
        return Blogs::all();
    }

    public function show(Blogs $blog)
    {
        return $blog;
    }

    public function store(Request $request)
    {

        $blog = Blogs::create($request->all());

        return response()->json($blog, 201);
    }

    public function update(Request $request, Blogs $blog)
    {
        $blog->update($request->all());

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