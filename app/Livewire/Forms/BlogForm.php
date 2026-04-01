<?php

namespace App\Livewire\Forms;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Validate;
use Livewire\Form;

class BlogForm extends Form
{
    public ?User $author = null;

    public $title;

    public $post;

    public function setAuthor(User $author)
    {
        $this->author = $author;
        $this->title = $author->title;
        $this->post = $author->post;
    }

    public function store()
    {
        $validated = $this->validate([
            'title' => ['required', 'string', 'max:255'],
            'post' => ['required', 'string'],
            'author_id' => ['required', 'exists:users,id'],
        ]);

        Blog::create($validated);

        $this->reset();
    }
  
}