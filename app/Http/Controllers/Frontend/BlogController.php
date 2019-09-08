<?php

namespace App\Http\Controllers\Frontend;

use Auth;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    
    public function showPage($page)
    {
        
        $page = Blog::where('slug', $page)->where('type', 'page')->first();
        $pages = Blog::latest()->where('type', 'page')->where('id', '<>', $page->id)->get();
        return view('frontend._blog.show_page', compact('page', 'pages'));  
    }
    
    public function getPosts()
    {   if(Auth::user()){
            $type = Auth::user()->user_type;
        
            if($type != 1 )
            {
                $posts = Blog::latest()->where(array('type'=> 'article','blog_type'=>0))->paginate(6);
            
            }
            else {
                $posts = Blog::latest()->where(array('type'=> 'article','blog_type'=>1))->paginate(6);
            }
        }else{
            $posts = Blog::latest()->where(array('type'=> 'article','blog_type'=>0))->paginate(6);
        }
        
        $postCategories = BlogCategory::whereHas('blogs', function($q){
            $q->where('published', true)
                ->where('type', 'article');
        })->get();
        // dd($posts->toArray());
        $dataPrem =Blog::select('title','thumnail','id')->orderBy('id','desc')->where('blog_type',1)->paginate(6);
        return view('frontend._blog.index', compact('posts','dataPrem','postCategories'));

    }
    
    public function getPostsByCategory(BlogCategory $category)
    {
        $posts = Blog::latest()->where('published', true)->where('type', 'article')->where('blog_category_id', $category->id)->paginate(10);

        $postCategories = BlogCategory::whereHas('blogs', function($q){
            $q->where('published', true)
                ->where('type', 'article');
        })->get();
        return view('frontend._blog.index', compact('posts', 'postCategories'));
    }
    
    public function showPost($slug)
    { 
       
        $blog = Blog::where('slug', $slug)->first();
        $related_posts = Blog::where('blog_category_id', $blog->blog_category_id)->where('id', '!=', $blog->id)->where('published', true)->get();
        return view('frontend._blog.show_post', compact('blog', 'related_posts')); 
    }
}
