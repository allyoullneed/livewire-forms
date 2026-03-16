<div class="relative preview grid grid-cols-1 xl:grid-cols-[1fr_auto] items-start justify-center gap-4">
<div class="xl:w-128 grid grid-cols-[1fr_auto] items-start gap-2 justify-self-center">
    <x-alert class="col-span-full justify-self-stretch" color="info" variant="outline" title="New messages!" description="8 unread messages" icon="heroicon-o-information-circle">
    <x-slot:actions>
        <x-button color="info">Open</x-button>
    </x-slot:actions>
    </x-alert>
    <div class="flex flex-col gap-1">
        <div class="flex justify-between items-center gap-2">
            <x-button label="Welcome" x-on:click="$dispatch('notify', { type: 'message', sender:{ name:'John Hammond', avatar:'/people/fake/john-hammond.webp'}, title: 'Important message from an important person', message: 'Welcome to Jurassic Park!' })" />
            <x-rating color="error" svg="heroicon-s-heart" value="5"/>
        </div>
        <div class="flex justify-between items-center gap-2">
            <x-toggle label="Toggle">
            <x-slot:label-checked>
                Toggle <span class="text-sm">(checked)</span>
            </x-slot:label-checked>
            </x-toggle>
            <x-badge size="sm" color="success" label="Badge" />
        </div>
        <x-select class="group" title="Favorite components" placeholder="Select as many as your want" rows="12" max-rows="3" multiple>
            <x-slot:icon class="group-hover:text-pink-400 group-focus-within:text-pink-400">
            <x-icon class="h-lh" name="heroicon-o-heart"/>
            </x-slot:icon>
            <statamic:collection from="components" as="entries">
            @foreach ($entries->groupBy(fn($entry) => $entry->group?->title) as $group => $items)
            <optgroup class="font-bold space-y-1" label="{{ $group }}">
                @foreach ($items as $entry)
                <option :value="$entry->id">{{ $entry->title }}</option>
                @endforeach
                </optgroup>
            @endforeach
            </statamic:collection>
        </x-select>
        <x-input label="Input" placeholder="Type anything here" maxlength="25" length-indicator />
    </div>
    <x-menu class="z-1 bg-base-100 w-max rounded-sm border-1 border-base-content/20">
    <x-menuItem icon="heroicon-o-user" label="Profile"/>
    <hr class="text-base-300"/>
    <x-menuItem icon="heroicon-o-cog-8-tooth" label="Settings"/>
    <x-menuItem icon="heroicon-o-document-currency-dollar" label="Billing"/>
    </x-menu>

</div>
<x-card-demo/>
<img class="max-xl:hidden absolute -bottom-2 rounded-full size-32 left-1/2 -translate-x-1/2" src="/assets/logo-sm.webp" alt="All you need logo"/>
</div>


<div class="xl:-mt-10 grid grid-cols-1 xl:grid-cols-[auto_1fr] gap-4 xl:gap-10 items-start justify-center">
    <div class="contents xl:block min-h-120 xl:w-128 relative justify-self-center">
        <livewire:login class="xl:absolute min-h-120"/>
    </div>
    <x-schedule-demo class="self-end"/>
</div>