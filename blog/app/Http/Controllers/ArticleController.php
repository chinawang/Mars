<?php

namespace App\Http\Controllers;

use App\Article;
//use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;


/**
 * Class ArticleController
 * @package App\Http\Controllers
 */
class ArticleController extends Controller
{
    public function index(){

//        $article_list = Article::all();
//        $article_list = Article::latest()->get();
        $article_list = Article::latest('published_at')->get();
        return view('articles.index',compact('article_list'));

    }

    public function detail($id){

        $article = Article::find($id);
        if(is_null($article)){
            abort(404);
        }

        return view('articles.detail',compact('article'));

    }

    public function create(){
        $tags = Tag::pluck('name','id');
        return view('articles.create',compact('tags'));
    }

//    public function store(){
//        $input_data = Request::all();
//        $input_data['published_at'] = Carbon::now();
//        Article::create($input_data);
//        return redirect('/');
//    }

    public function store(StoreArticleRequest $request){
        $input_data = $request->all();
        $input_data['published_at'] = Carbon::now();
        $article = Article::create($input_data);
        $tag_data = $request->input('tag_list');
        if(!is_null($tag_data)){
            $article->tags()->attach($tag_data);
        }

        return redirect('/');
    }

    public function edit($id){

        $article = Article::findorFail($id);
        $tags = Tag::pluck('name','id');
        $article_tags = DB::table('tags')
            ->join('article_tag','tags.id','=','article_tag.tag_id')
            ->where('article_tag.article_id','=',$id)
            ->select('tags.name','tags.id')
            ->get();


        return view('articles.edit',compact('article','tags','article_tags'));
    }

    public function update(StoreArticleRequest $request){

        $article = Article::find($request->get('id'));
        $article->update($request->except('id'));
        $tag_data = $request->get('tag_list');
        if(!is_null($tag_data)){
            $article->tags()->sync($tag_data);
        }

        return redirect('/');

    }

    public function  delete($id){
        $article = Article::find($id);
        $article->delete();
        return redirect('/');
    }

    public function test(){
        $firstTitle = 'Long';
        $secondTitle = 'China';
        $birthday = '1988-12-12';
        $gender = 'Male';


//        return view('articles.lists')->with('firstTitle',$firstTitle);
//        return view('articles.lists',['firstTitle'=>$firstTitle,'secondTitle'=>$secondTitle]);
        return view('articles.lists',compact('firstTitle','secondTitle','birthday','gender'));
    }
}
