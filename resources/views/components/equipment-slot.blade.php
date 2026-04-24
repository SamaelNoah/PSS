@props(['icon', 'label'])

<div {{ $attributes->merge(['class' => 'group relative']) }}>
    <div class="size-16 rounded-2xl border-2 border-zinc-200 dark:border-zinc-700 bg-white/80 dark:bg-zinc-900/80 backdrop-blur-sm flex items-center justify-center shadow-sm hover:border-zinc-400 dark:hover:border-zinc-500 transition-all cursor-pointer">
        <flux:icon :icon="$icon" class="size-8 text-zinc-400 group-hover:text-zinc-800 dark:group-hover:text-white transition-colors" />
    </div>
    
    <div class="absolute -bottom-7 left-1/2 -translate-x-1/2 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none z-50">
        <flux:badge size="sm" color="zinc" class="whitespace-nowrap">{{ $label }}</flux:badge>
    </div>
</div>