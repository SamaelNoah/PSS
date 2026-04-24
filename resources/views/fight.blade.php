<x-layouts::app :title="__('Fight')">
    <div class="flex flex-col gap-8">
        <!-- Battle Arena -->
        <section class="relative flex flex-col items-center justify-center p-12 overflow-hidden border rounded-2xl bg-zinc-50 dark:bg-zinc-900/50 border-zinc-200 dark:border-zinc-700 shadow-inner">
            <!-- Background Decorative Texture -->
            <div class="absolute inset-0 pointer-events-none opacity-5">
                <x-placeholder-pattern />
            </div>

            <div class="relative z-10 flex flex-col items-center justify-between w-full gap-12 md:flex-row max-w-5xl">
                <!-- User Side -->
                <div class="flex flex-col items-center order-1 gap-4 text-center">
                    <div class="p-1 rounded-full ring-4 ring-zinc-200 dark:ring-zinc-800">
                        <flux:avatar size="xl" :name="auth()->user()->name" :initials="auth()->user()->initials()" />
                    </div>
                    <div class="space-y-1">
                        <flux:heading size="lg">{{ auth()->user()->name }}</flux:heading>
                        <flux:subheading>{{ __('Level 1 Warrior') }}</flux:subheading>
                    </div>
                </div>

                <!-- VS / Combat Animation -->
                <div class="flex flex-col items-center justify-center order-2">
                    <div class="relative group">
                        <!-- Simple Pulse/Ping Animation for "Danger" feel -->
                        <div class="absolute inset-0 transition-transform duration-1000 scale-150 rounded-full bg-red-500/20 animate-pulse group-hover:scale-175"></div>
                        <div class="absolute inset-0 transition-transform duration-700 scale-125 rounded-full bg-red-500/10 animate-ping"></div>
                        
                        <div class="relative flex items-center justify-center bg-white border-4 border-red-500 rounded-full size-20 dark:bg-zinc-800 shadow-xl shadow-red-500/20">
                            <flux:icon icon="bolt" variant="solid" class="text-red-500 size-10" />
                        </div>
                    </div>
                    <flux:heading level="2" class="mt-6 font-black tracking-widest text-red-500 uppercase italic text-4xl transform -rotate-6 drop-shadow-md">VS</flux:heading>
                </div>

                <!-- Monster Side -->
                <div class="flex flex-col items-center order-3 gap-4 text-center">
                    <div class="p-1 rounded-full ring-4 ring-red-500/20">
                        <flux:avatar size="xl" icon="bug-ant" class="bg-red-50 dark:bg-red-900/20 text-red-600 dark:text-red-400" />
                    </div>
                    <div class="space-y-1">
                        <flux:heading size="lg" class="text-red-600 dark:text-red-400">Gloom Weaver</flux:heading>
                        <flux:subheading>{{ __('Dread Level 5') }}</flux:subheading>
                    </div>
                </div>
            </div>
        </section>

        <!-- Statistics Interface -->
        <section class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <!-- Player Statistics -->
            <flux:card class="space-y-6">
                <flux:heading size="lg" icon="user" class="flex items-center gap-2">{{ __('Your Vitality') }}</flux:heading>
                <div class="space-y-4">
                    <div class="flex justify-between items-center"><flux:text>{{ __('Health Points') }}</flux:text><flux:text strong class="text-green-600 dark:text-green-400">100 / 100</flux:text></div>
                    <div class="flex justify-between items-center"><flux:text>{{ __('Energy Reserve') }}</flux:text><flux:text strong class="text-blue-600 dark:text-blue-400">45 / 50</flux:text></div>
                    <div class="flex justify-between items-center border-t border-zinc-100 dark:border-zinc-800 pt-4"><flux:text>{{ __('Combat Strength') }}</flux:text><flux:text strong>12</flux:text></div>
                </div>
            </flux:card>

            <!-- Opponent Analysis -->
            <flux:card class="space-y-6">
                <flux:heading size="lg" icon="swatch" class="flex items-center gap-2 text-red-600 dark:text-red-400">{{ __('Entity Analysis') }}</flux:heading>
                <div class="space-y-4">
                    <div class="flex justify-between items-center"><flux:text>{{ __('Health Points') }}</flux:text><flux:text strong class="text-red-500">250 / 250</flux:text></div>
                    <div class="flex justify-between items-center"><flux:text>{{ __('Armor Class') }}</flux:text><flux:text strong>8</flux:text></div>
                    <div class="flex justify-between items-center border-t border-zinc-100 dark:border-zinc-800 pt-4"><flux:text>{{ __('Threat Level') }}</flux:text><flux:badge color="red" size="sm" inset="top bottom">{{ __('High') }}</flux:badge></div>
                </div>
            </flux:card>
        </section>
    </div>
</x-layouts::app>
