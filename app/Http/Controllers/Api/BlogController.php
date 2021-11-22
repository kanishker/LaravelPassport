<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Blogs;

class BlogController extends Controller
{
    public function viewBlogs()
    {
        $blogs = Blogs::all();
        return $blogs;
    }
    Public function createBlog(Request $request)
    {
        $blog = new Blogs;

        try {
            $blog->name = $request->name;
            $blog->content = $request->content;
            $blog->save();
    
            return response()->json([
                'success'=>true,
                'messege'=>'Blog Created',
                'Topic'=>$blog->name
            ]);
    
        } catch (\Throwable $th) {
            return response()->json([
                'success'=>true,
                'messege'=> $th
            ]);
        }
    }
    Public function UpdateBlog()
    {
        //
    }
}
