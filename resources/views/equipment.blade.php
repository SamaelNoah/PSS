<x-layouts::app title="Equipment">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        <!-- Hero Paperdoll Card -->
        <section class="lg:col-span-5">
            <flux:card class="relative flex flex-col items-center justify-center min-h-[600px] overflow-hidden">
                <flux:heading size="lg" class="mb-12">Hero Loadout</flux:heading>

                <!-- Silhouette & Slot Container -->
                <div class="relative w-64 h-[450px] flex items-center justify-center">
                    <!-- Background Silhouette Placeholder -->
                    <div class="absolute inset-0 flex items-center justify-center opacity-5 dark:opacity-15 pointer-events-none">
                        <flux:icon icon="user" class="w-full h-full" />
                    </div>

                    <!-- 7 Equipment Slots -->
                    <!-- Head -->
                    <div class="absolute top-0 left-1/2 -translate-x-1/2">
                        <x-equipment-slot icon="view-columns" label="Head" />
                    </div>

                    <!-- Neck/Accessory (7th Slot) -->
                    <div class="absolute top-20 left-1/2 -translate-x-1/2">
                        <x-equipment-slot icon="sparkles" label="Amulet" />
                    </div>

                    <!-- Torso -->
                    <div class="absolute top-40 left-1/2 -translate-x-1/2">
                        <x-equipment-slot icon="shield-check" label="Armor" />
                    </div>

                    <!-- Main Hand -->
                    <div class="absolute top-40 left-0">
                        <x-equipment-slot icon="bolt" label="Main Hand" />
                    </div>

                    <!-- Off Hand -->
                    <div class="absolute top-40 right-0">
                        <x-equipment-slot icon="shield-exclamation" label="Off Hand" />
                    </div>

                    <!-- Ring -->
                    <div class="absolute bottom-20 left-4">
                        <x-equipment-slot icon="stop" label="Signet Ring" />
                    </div>

                    <!-- Legs -->
                    <div class="absolute bottom-0 left-1/2 -translate-x-1/2">
                        <x-equipment-slot icon="variable" label="Legwear" />
                    </div>
                </div>

                <!-- Summary Stats -->
                <div class="mt-12 w-full pt-6 border-t border-zinc-100 dark:border-zinc-800">
                    <div class="grid grid-cols-2 gap-4 text-center">
                        <div>
                            <flux:heading size="sm">Power</flux:heading>
                            <flux:text strong class="text-red-500">1,240</flux:text>
                        </div>
                        <div>
                            <flux:heading size="sm">Defense</flux:heading>
                            <flux:text strong class="text-blue-500">850</flux:text>
                        </div>
                    </div>
                </div>
            </flux:card>
        </section>

        <!-- Inventory Card -->
        <section class="lg:col-span-7">
            <flux:card class="h-full flex flex-col">
                <div class="flex items-center justify-between mb-8">
                    <flux:heading size="lg">Stashed Items</flux:heading>
                    <flux:badge color="zinc" size="sm">42 / 100 Slots</flux:badge>
                </div>

                <!-- Inventory Grid -->
                <div class="grid grid-cols-4 sm:grid-cols-5 md:grid-cols-6 gap-3 flex-1 overflow-y-auto pr-2">
                    @for ($i = 0; $i < 24; $i++)
                        <div class="aspect-square border border-dashed border-zinc-200 dark:border-zinc-700 rounded-xl flex items-center justify-center bg-zinc-50/50 dark:bg-zinc-800/50 hover:border-zinc-400 dark:hover:border-zinc-500 transition-colors cursor-pointer group shadow-sm">
                            @if($i < 5)
                                <flux:icon icon="gift" class="size-6 text-zinc-400 group-hover:text-zinc-800 dark:group-hover:text-white transition-colors" />
                            @endif
                        </div>
                    @endfor
                </div>

                <!-- Pagination Facade -->
                <div class="mt-8 border-t border-zinc-100 dark:border-zinc-800 pt-6">
                    <div class="flex justify-center gap-1">
                        <flux:button icon="chevron-left" variant="ghost" size="sm" />
                        <flux:button variant="filled" size="sm">1</flux:button>
                        <flux:button variant="ghost" size="sm">2</flux:button>
                        <flux:button variant="ghost" size="sm">3</flux:button>
                        <flux:button icon="chevron-right" variant="ghost" size="sm" />
                    </div>
                </div>
            </flux:card>
        </section>
    </div>
</x-layouts::app>