@php
    $room = request('room', 'quarters');
@endphp

<x-layouts::app title="House">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        <!-- Estate Navigation -->
        <aside class="lg:col-span-3">
            <flux:card class="p-2">
                <flux:heading size="md" class="px-3 mb-4 text-zinc-500 uppercase tracking-widest">Estate Map</flux:heading>
                
                <flux:navlist>
                    <flux:navlist.item icon="home" href="?room=quarters" :current="$room === 'quarters'" wire:navigate>Quarters</flux:navlist.item>
                    <flux:navlist.item icon="key" href="?room=stables" :current="$room === 'stables'" wire:navigate>Mount Stables</flux:navlist.item>
                    <flux:navlist.item icon="sparkles" href="?room=shrine" :current="$room === 'shrine'" wire:navigate>Blessings Shrine</flux:navlist.item>
                    <flux:navlist.item icon="sun" href="?room=garden" :current="$room === 'garden'" wire:navigate>Herb Garden</flux:navlist.item>
                    <flux:navlist.item icon="archive-box" href="?room=crypt" :current="$room === 'crypt'" wire:navigate>Ancestral Crypt</flux:navlist.item>
                    <flux:navlist.item icon="book-open" href="?room=library" :current="$room === 'library'" wire:navigate>Techniques Library</flux:navlist.item>
                </flux:navlist>

                <div class="mt-8 px-3">
                    <flux:separator variant="subtle" />
                    <div class="mt-4">
                        <flux:text size="xs" class="uppercase tracking-wider text-zinc-500">Estate Status</flux:text>
                        <flux:text size="sm" class="mt-2 italic">"The hearth is warm, and the wards are strong."</flux:text>
                    </div>
                </div>
            </flux:card>
        </aside>

        <!-- Room Content Area -->
        <main class="lg:col-span-9 space-y-6">
            @switch($room)
                @case('stables') @include('partials.house.stables') @break
                @case('shrine') @include('partials.house.shrine') @break
                @case('garden') @include('partials.house.garden') @break
                @case('crypt') @include('partials.house.crypt') @break
                @case('library') @include('partials.house.library') @break
                @default @include('partials.house.quarters')
            @endswitch
        </main>
    </div>
</x-layouts::app>