<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Author;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_posts = Article::select('id', 'title', 'description', 'category_id', 'view_count', 'created_at')
                                ->orderBy('id', 'desc')
                                ->take(4)
                                ->get();
        foreach ($current_posts as $current_post) { 
            $category1 = Category::where('id', $current_post->category_id)
                            ->select('name')
                            ->first();
            $current_post['category'] = $category1->name;
            $current_post['date'] = date('H:i | d-m-Y', strtotime($current_post->created_at));
            $current_post['short_des'] = substr($current_post->description, 0, 200); 
        }

        $categories = Category::select('id', 'name')->get();
        $category_posts = array();
        foreach ($categories as $category) {
            $random_posts = Article::select('id', 'title', 'description', 'category_id', 'view_count', 'created_at')
                                    ->where('category_id', $category->id)
                                    ->inRandomOrder()
                                    ->take(4)
                                    ->get();
            foreach ($random_posts as $random_post) { 
                $category2 = Category::where('id', $random_post->category_id)
                                ->select('name')
                                ->first();
                $random_post['category'] = $category2->name;
                $random_post['date'] = date('H:i | d-m-Y', strtotime($random_post->created_at));
                $random_post['short_des'] = substr($random_post->description, 0, 200); 
            }
            array_push($category_posts, array($category->name => $random_posts));
        }

        $popular_posts = Article::select('id', 'title', 'description', 'category_id', 'view_count', 'created_at')
                                ->orderBy('view_count', 'desc')
                                ->take(10)
                                ->get();
        foreach ($popular_posts as $popular_post) { 
                $category3 = Category::where('id', $popular_post->category_id)
                                ->select('name')
                                ->first();
                $popular_post['category'] = $category3->name;
                $popular_post['date'] = date('H:i | d-m-Y', strtotime($popular_post->created_at));
                $popular_post['short_des'] = substr($popular_post->description, 0, 200);
            }
        return response()->json([
                                'current_posts'     =>  $current_posts,
                                'category_posts'    =>  $category_posts,
                                'popular_posts'     =>  $popular_posts
                                ]);
    }
    public function getThroughCategory($slug)
    {
        $category_id = Category::where('slug', $slug)->select('id')->first();
        $articles = Article::where('category_id', $category_id->id)->get();
        $posts = array();
        foreach ($articles as $article) {
            $author = Author::where('id', $article->author_id)
                            ->select('name')
                            ->first();
            $article['author'] = $author->name;
            array_push($posts, $article);
        }
        return $posts;
    }
}