<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of news 
     */
    public function indexNews()
    {
        $news = Post::where('type', 'news')
                   ->latest()
                   ->paginate(10);
                   
        return view('posts.news-index', compact('news'));
    }

    /**
     * Display a listing of projects
     */
    public function indexProjects()
    {
        $projects = Post::where('type', 'project')
                      ->latest()
                      ->paginate(10);
                      
        return view('posts.projects-index', compact('projects'));
    }

    /**
     * Display the specified post by slug
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        
        // Determine which view to use based on post type
        $view = $post->type === 'news' ? 'posts.news-show' : 'posts.project-show';
        
        return view($view, compact('post'));
    }

}