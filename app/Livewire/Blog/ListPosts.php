<?php

namespace App\Livewire\Blog;

use Livewire\Component;

class ListPosts extends Component
{
    public function render()
    {
        dd('rendering list posts');
        $posts = \App\Models\Blog::all();
        return view('livewire.blog.list', compact('posts'));
    }
}