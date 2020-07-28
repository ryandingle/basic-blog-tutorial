<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;
use App\Tag;
use App\Category;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'data' => Article::all()
        ];

        return view('article.article', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'category' => Category::all(),
            'tag' => Tag::all()
        ];

        return view('article.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->title;
        $slug = str_replace(' ', '-', $request->title);
        $body = $request->body;
        $category_id = $request->category_id;
        $tag_id = $request->tag_id;

        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'category_id' => 'required',
            'tag_id' => 'required',
        ]);

        $tag = new Article;
        $tag->title = $title;
        $tag->slug = $slug;
        $tag->body = $body;
        $tag->tag_id = $tag_id;
        $tag->category_id = $category_id;
        $tag->save();

        return redirect()->back()->with('status', 'Successfully Inserted!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'data' => Article::find($id),
            'id' => $id
        ];

        return view('article.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'data' => Article::find($id),
            'id' => $id,
            'category' => Category::all(),
            'tag' => Tag::all()
        ];

        return view('article.edit', $data);
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
        $data = Article::find($id);
        $data->title = $request->title;
        $data->body = $request->body;
        $data->tag_id = $request->tag_id;
        $data->category_id = $request->category_id;
        $data->save();

        return redirect()->back()->with('status', 'Successfully Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Article::where('id' ,$id)->delete();

        return redirect()->back()->with('status', 'Successfully Deleted!');
    }
}
