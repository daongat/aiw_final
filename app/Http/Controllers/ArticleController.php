<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\ArticleTag;
use App\Tag;
use App\Category;
use App\Author;
use App\Feedback;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_posts = Article::select('id', 'title', 'thumbnail', 'slug', 'description', 'category_id', 'view_count', 'created_at')
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
            $random_posts = Article::select('id', 'title','thumbnail', 'slug', 'description', 'category_id', 'view_count', 'created_at')
                                    ->where('category_id', $category->id)
                                    ->inRandomOrder()
                                    ->take(2)
                                    ->get();
            foreach ($random_posts as $random_post) { 
                $category2 = Category::where('id', $random_post->category_id)
                                ->select('name')
                                ->first();
                $random_post['category'] = $category2->name;
                $random_post['date'] = date('H:i | d-m-Y', strtotime($random_post->created_at));
                $random_post['short_des'] = substr($random_post->description, 0, 150); 
            }
            array_push($category_posts, array($category->name => $random_posts));
        }

        $popular_posts = Article::select('id', 'title','thumbnail', 'slug', 'description', 'category_id', 'view_count', 'created_at')
                                ->orderBy('view_count', 'desc')
                                ->take(6)
                                ->get();
        foreach ($popular_posts as $popular_post) { 
                $category3 = Category::where('id', $popular_post->category_id)
                                ->select('name')
                                ->first();
                $popular_post['category'] = $category3->name;
                $popular_post['date'] = date('H:i | d-m-Y', strtotime($popular_post->created_at));
                $popular_post['short_des'] = substr($popular_post->description, 0, 200);
            }
            // return response()->json([
            //                     'current_posts'     =>  $current_posts,
            //                     'category_posts'    =>  $category_posts,
            //                     'popular_posts'     =>  $popular_posts
            //                     ]);
            return view('home')->with([
                                'current_posts'     =>  $current_posts,
                                'category_posts'    =>  $category_posts,
                                'popular_posts'     =>  $popular_posts
                                ]);
    }
    public function getThroughCategory($id)
    {
        $category_posts = Article::select('id', 'title','thumbnail', 'slug', 'description', 'category_id', 'view_count', 'created_at')
                                    ->where('category_id', $id)
                                    ->orderBy('id', 'desc')
                                    ->paginate(10);
        foreach ($category_posts as $category_post) { 
            $category = Category::where('id', $id)
                            ->select('name')
                            ->first();
            $category_name = $category->name;
            $category_post['category'] = $category_name;
            $category_post['date'] = date('H:i | d-m-Y', strtotime($category_post->created_at));
            $category_post['short_des'] = substr($category_post->description, 0, 150); 
        }

        $popular_posts = Article::select('id', 'title','thumbnail', 'slug', 'description', 'category_id', 'view_count', 'created_at')
                                ->where('category_id', $id)
                                ->orderBy('view_count', 'desc')
                                ->take(4)
                                ->get();
        foreach ($popular_posts as $popular_post) { 
                $category3 = Category::where('id', $popular_post->category_id)
                                ->select('name')
                                ->first();
                $popular_post['category'] = $category3->name;
                $popular_post['date'] = date('H:i | d-m-Y', strtotime($popular_post->created_at));
                $popular_post['short_des'] = substr($popular_post->description, 0, 150);
            }
            // return response()->json([
            //                     'category_name'     =>  $category_name,
            //                     'category_posts'    =>  $category_posts,
            //                     'popular_posts'     =>  $popular_posts
            //                     ]);
            return view('category')->with([
                                'category_name'     =>  $category_name,
                                'category_posts'    =>  $category_posts,
                                'popular_posts'     =>  $popular_posts
                                ]);
    }

    public function getDetail($slug)
    {
        $article = Article::where('slug', $slug)->first();
        $category = Category::where('id', $article->category_id)
                                ->select('name')
                                ->first();
        $author = Author::where('id', $article->author_id)->select('name')->first();
                $article['category'] = $category->name;
                $article['author'] = $author->name;
                $article['date'] = date('H:i | d-m-Y', strtotime($article->created_at));
        $feedback_count = Feedback::where('article_id', $article->id)->count();
        $feedbacks = Feedback::where('article_id', $article->id)->get();
        foreach ($feedbacks as $feedback) {
            $feedback['date'] = date('H:i | d-m-Y', strtotime($feedback->created_at));
        }
        $popular_posts = Article::where('category_id', $article->category_id)
                                ->select('id', 'title','thumbnail', 'slug', 'description', 'category_id', 'view_count', 'created_at')
                                ->orderBy('view_count', 'desc')
                                ->take(4)
                                ->get();
        foreach ($popular_posts as $popular_post) { 
            $category3 = Category::where('id', $popular_post->category_id)
                            ->select('name')
                            ->first();
            $popular_post['category'] = $category3->name;
            $popular_post['date'] = date('H:i | d-m-Y', strtotime($popular_post->created_at));
            $popular_post['short_des'] = substr($popular_post->description, 0, 150);
        }
        $tags = ArticleTag::where('article_id', $article->id)->get();
        foreach ($tags as $tag) {
            $tag_name = Tag::where('id', $tag->tag_id)->select('name')->first();
            $tag['name'] = $tag_name['name'];
        }
        return view('detail', [
                            'article'           =>  $article,
                            'feedback_count'    =>  $feedback_count,
                            'feedbacks'         =>  $feedbacks,
                            'popular_posts'     =>  $popular_posts,
                            'tags'              =>  $tags

                        ]);
    }

    public function getTag($id)
    {
        $tag_name = Tag::where('id', $id)->select('name')->first();
        $tag_posts = ArticleTag::where('tag_id', $id)->select('article_id')->orderBy('id', 'desc')->get();
        foreach ($tag_posts as $tag_post) {
            $posts = Article::select('id', 'title','thumbnail', 'slug', 'description', 'category_id', 'view_count', 'created_at')
                                    ->where('id', $tag_post->article_id)
                                    ->orderBy('id', 'desc')
                                    ->paginate(10);
            foreach ($posts as $post) { 
                $category = Category::where('id', $post->category_id)
                                ->select('name')
                                ->first();
                $post['category'] = $category->name;
                $post['date'] = date('H:i | d-m-Y', strtotime($post->created_at));
                $post['short_des'] = substr($post->description, 0, 150); 
            }
        }

        $popular_posts = Article::select('id', 'title','thumbnail', 'slug', 'description', 'category_id', 'view_count', 'created_at')
                                ->orderBy('view_count', 'desc')
                                ->take(4)
                                ->get();
        foreach ($popular_posts as $popular_post) { 
            $category3 = Category::where('id', $popular_post->category_id)
                            ->select('name')
                            ->first();
            $popular_post['category'] = $category3->name;
            $popular_post['date'] = date('H:i | d-m-Y', strtotime($popular_post->created_at));
            $popular_post['short_des'] = substr($popular_post->description, 0, 150);
        }
            
        return view('tag')->with([
                            'tag_name' =>  $tag_name,
                            'posts'         =>  $posts,
                            'popular_posts' =>  $popular_posts
                            ]);
    }
}