<?php

use App\Models\Blog; 
use Livewire\Component;

use Livewire\Attributes\Layout;

new  #[Layout('layouts::auth')]  class extends Component {
     
    public $posts;
    public function mount()
    {
        $this->posts = Blog::all(); 
    }
};
?>
 

 
    <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
        <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
            {{ tenant('id') }}
 
            @foreach($this->posts as $post)
            <div class="flex flex-col items-start gap-4 mb-12 lg:mb-0">
                <h2 class="text-3xl font-medium text-[#1B1B18] dark:text-[#EDEDEC]">
                    {{ $post->title }}
                </h2>       
                <p class="text-sm leading-normal text-[#706f6c] dark:text-[#A1A09A]">
                    {{ $post->content }}
                </p>
            </div>
            @endforeach
        </main>
    </div>
 