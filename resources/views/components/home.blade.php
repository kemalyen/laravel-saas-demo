<?php

use App\Models\Blog;
use Livewire\Component;

use Livewire\Attributes\Layout;

new  #[Layout('layouts::frontend')]  class extends Component {

    public $posts;
    public string $tenantName = '';


    public function mount()
    { 
        $this->posts = Blog::all();
        $this->tenantName = tenant('tenancy_db_name');
    }
};
?> <div class="mx-auto space-y-6">

     <h2 class="text-3xl font-medium text-[#1B1B18] dark:text-[#EDEDEC]">Latest Posts for {{ $this->tenantName }}</h2>


    <a href="{{ route('tenant.login') }}" class="text-sm mb-3 font-medium text-primary-600 hover:text-primary-700 dark:text-primary-400 dark:hover:text-primary-300" wire:navigate>
        Login to {{ $this->tenantName }} Dashboard
    </a> 
    <div class="flex flex-col justify-center max-w-[60%]">

        @foreach($this->posts as $post)
        <div class="flex flex-col max-w-2xl gap-4 mb-12 lg:mb-2">
            <h2 class="text-2xl font-medium text-[#1B1B18] dark:text-[#EDEDEC]">
                {{ $post->title }}
            </h2>
            <p class="text-sm leading-normal text-[#706f6c] dark:text-[#A1A09A]">
                {{ $post->content }}
            </p>
        </div>
        @endforeach

    </div>
</div>