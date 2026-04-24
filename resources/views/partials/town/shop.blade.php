            <!-- Active Location Header -->
            <flux:card>
                <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
                    <div class="flex items-center gap-4">
                        <div class="size-12 rounded-xl bg-zinc-100 dark:bg-zinc-800 flex items-center justify-center border border-zinc-200 dark:border-zinc-700 shadow-sm">
                            <flux:icon icon="building-storefront" variant="outline" class="size-6 text-zinc-800 dark:text-white" />
                        </div>
                        <div>
                            <flux:heading size="xl">The Golden Anvil Shop</flux:heading>
                            <flux:subheading>Quality gear for the aspiring dungeoneer.</flux:subheading>
                        </div>
                    </div>
                    <flux:badge color="orange" size="sm" inset="top bottom">Open until Midnight</flux:badge>
                </div>
            </flux:card>

            <!-- Location Specific Content (e.g., Shop Inventory) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Shop Item Placeholder -->
                @for ($i = 0; $i < 4; $i++)
                    <flux:card class="group hover:border-zinc-400 dark:hover:border-zinc-500 transition-colors cursor-pointer">
                        <div class="flex items-center gap-4">
                            <div class="size-20 rounded-lg bg-zinc-50 dark:bg-zinc-900 border border-zinc-200 dark:border-zinc-800 flex items-center justify-center relative overflow-hidden">
                                <flux:icon icon="gift" class="size-8 text-zinc-300 group-hover:text-zinc-600 dark:group-hover:text-zinc-400 transition-colors" />
                                <div class="absolute inset-0 bg-gradient-to-t from-transparent to-zinc-100 dark:to-zinc-800 opacity-0 group-hover:opacity-20 transition-opacity"></div>
                            </div>

                            <div class="flex-1">
                                <flux:heading size="sm">Rusty Shortsword</flux:heading>
                                <flux:text size="xs" class="text-zinc-500">Weapon (Common)</flux:text>
                                <div class="mt-2 flex items-center justify-between">
                                    <flux:text strong size="sm" class="text-yellow-600 dark:text-yellow-400">50 Gold</flux:text>
                                    <flux:button size="xs" variant="ghost" icon="shopping-cart" />
                                </div>
                            </div>
                        </div>
                    </flux:card>
                @endfor
            </div>