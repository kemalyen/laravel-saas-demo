<?php

namespace App\Livewire\Blog;

use App\Livewire\Forms\BlogForm;
use Livewire\Component;

class CreatePost extends Component
{
    public BlogForm $form;

    public function save()
    {
        $this->form->store(); 
 
        return $this->redirect('/blogs');
    }

    public function render()
    {
        return view('livewire.blog.form');
    }
}