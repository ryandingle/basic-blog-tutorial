<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'recent_blog' => Article::limit(6)->orderBy('id', 'desc')->get() 
        ];

        return view('landing.index', $data);
    }

    public function blog($slug = FALSE)
    {
        $data = [
            'blog_post' => Article::limit(10)->orderBy('id', 'desc')->get()
        ];

        if($slug)
        {
            $item = Article::where('slug', $slug)->get();
            
            if(count($item) == 0)
            {
                abort(404);
            }
            else
            {
                $data['post'] = $item[0];
                return view('landing.blog-item', $data);
            }
        }
            

        
        return view('landing.blog', $data);
    }

    public function about()
    {
        return view('landing.about');
    }

    public function contact()
    {
        return view('landing.contact');
    }
}
