<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::user()->id;
        $articles = Article::where('user_id', $userId)->get();
        return view('article.list', ['articles'=>$articles])->with([
            'message_success' => Session::get('message_success')
        ]);
    }

    public function indexFiltered($category_id, Request $request) {
        $articles = Article::where('category_id', '=', $category_id)->where('title', 'like', "%$request->search%")->paginate(10);
        $category = Category::where('id', '=', $category_id)->first();
        $search = $request->search;
        return view('article.index', compact('articles', 'category', 'search'))->with([
            'message_success' => Session::get('message_success'),
        ]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('article.create')->with([
            'categories' => $categories,
            'message_success' => Session::get('message_success'),
            'message_warning' => Session::get('message_warning'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => ['required', 'exists:categories,id'],
            'title' => ['required', 'max:255'],
            'description' => ['required'],
            'image' => ['required', 'file', 'mimes:jpg,jpeg,png,gif', 'max:10000'],
        ]);

        $image = $request->image;
        $fileName = $image->getClientOriginalName();

        Storage::putFileAs('public/images', $image, $fileName);

        Article::create([
            'user_id' => Auth::user()->id,
            'category_id' => $request->category_id,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $fileName,
        ]);
        
        return redirect()->back()->with(
            [
                'message_success' => "The article was successfully created."
            ]
        );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        Storage::delete('public/images/'.$article->image);
        $article->delete();
        return redirect()->back()->with(
            [
                'message_success' => "The article was successfully deleted."
            ]
        );
    }
}
