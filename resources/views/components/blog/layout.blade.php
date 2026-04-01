<div class="">
    <div class="flex justify-end">
        <div class="ml-5 p-4">

            <flux:navbar>
                <flux:navbar.item :href="route('blog')" wire:navigate>{{ __('List blog') }}</flux:navbar.item>
                <flux:navbar.item :href="route('blog.create')" wire:navigate>{{ __('Create post') }}</flux:navbar.item>
                </flux:navlist>
        </div>
    </div>

    <flux:heading>{{ $heading ?? '' }}</flux:heading>

    <div class="flex w-full">

        {{ $slot }}

    </div>
</div>