@php
    $tab = request('tab', 'shop');
@endphp

<x-layouts::app title="Town">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        <!-- Town Navigation -->
        <aside class="lg:col-span-3">
            <flux:card class="p-2">
                <flux:heading size="md" class="px-3 mb-4 text-zinc-500 uppercase tracking-widest">District Map</flux:heading>
                
                <flux:navlist>
                    <flux:navlist.item icon="building-storefront" href="?tab=shop" :current="$tab === 'shop'" wire:navigate>General Shop</flux:navlist.item>
                    <flux:navlist.item icon="sparkles" href="?tab=enchanter" :current="$tab === 'enchanter'" wire:navigate>Mystic Enchanter</flux:navlist.item>
                    <flux:navlist.item icon="trophy" href="?tab=training" :current="$tab === 'training'" wire:navigate>Training Field</flux:navlist.item>
                    <flux:navlist.item icon="map-pin" href="?tab=teleport" :current="$tab === 'teleport'" wire:navigate>Teleport Circle</flux:navlist.item>
                </flux:navlist>

                <div class="mt-8 px-3">
                    <flux:separator variant="subtle" />
                    <div class="mt-4">
                        <flux:text size="xs" class="uppercase tracking-wider text-zinc-500">Local Rumors</flux:text>
                        <flux:text size="sm" class="mt-2 italic">"The Enchanter has been seen experimenting with void energy lately..."</flux:text>
                    </div>
                </div>
            </flux:card>
        </aside>

        <!-- Location Content Area -->
        <main class="lg:col-span-9 space-y-6">
            @switch($tab)
                @case('enchanter') @include('partials.town.enchanter') @break
                @case('training') @include('partials.town.training') @break
                @case('teleport') @include('partials.town.teleportationcircle') @break
                @default @include('partials.town.shop')
            @endswitch
        </main>
    </div>
</x-layouts::app>