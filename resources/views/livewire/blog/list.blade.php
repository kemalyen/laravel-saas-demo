<section class="w-full ">
    <x-blog.layout :heading="__('List All Appointment')" :subheading="__('')">
        <div class="w-full">
            @foreach($posts as $post)
            <div class="flex flex-col max-w-2xl gap-4 mb-12 lg:mb-2">
                <h2 class="text-2xl font-medium text-[#1B1B18] dark:text-[#EDEDEC]">
                    {{ $post->title }}
                </h2>           
                <p class="text-sm leading-normal text-[#706f6c] dark:text-[#A1A09A]">
                    {{ $post->content }}
                </p> 
                @endforeach
            </div>   
        </div>
    </x-blog.layout>
</section>