<!-- Active Room Header -->
<flux:card>
    <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
        <div class="flex items-center gap-4">
            <div class="size-12 rounded-xl bg-zinc-100 dark:bg-zinc-800 flex items-center justify-center border border-zinc-200 dark:border-zinc-700 shadow-sm">
                <flux:icon icon="home" variant="outline" class="size-6 text-zinc-800 dark:text-white" />
            </div>
            <div>
                <flux:heading size="xl">Personal Quarters</flux:heading>
                <flux:subheading>A private sanctuary for rest and reflection.</flux:subheading>
            </div>
        </div>
        <flux:badge color="green" size="sm">Safe Zone</flux:badge>
    </div>
</flux:card>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <flux:card class="space-y-4">
        <flux:heading size="lg">Rest and Recovery</flux:heading>
        <flux:text>Spend time resting to restore your Health and Energy to maximum levels.</flux:text>
        <div class="pt-4">
            <flux:button variant="primary" icon="moon" class="w-full">Sleep (Restores 100% HP/MP)</flux:button>
        </div>
    </flux:card>
    <flux:card class="flex flex-col items-center justify-center text-center p-8 space-y-4">
        <flux:icon icon="book-open" class="size-12 text-zinc-300 dark:text-zinc-600" />
        <flux:heading size="md">Hero's Journal</flux:heading>
        <flux:button size="sm" variant="ghost">View Records</flux:button>
    </flux:card>
</div>