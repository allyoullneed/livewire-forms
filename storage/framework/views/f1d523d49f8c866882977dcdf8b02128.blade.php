<div class="columns-1 @xl:columns-2 @4xl:columns-3 space-y-4">
    <x-card class="bg-base-100 border-1 border-base-300 flex flex-col gap-1">
        
        <div class="flex justify-start gap-2">
            <x-icon class="h-lh opacity-60" name="heroicon-o-chart-pie"/>
            <span class="font-semibold mb-2">Preview</span>
        </div>
        <div class="flex gap-2 mb-2">
            <x-badge variant="soft" label="Shoes"/>
            <x-badge variant="soft" label="Bags"/>
        </div>
        <x-checkboxes class="w-full">
            <x-checkbox size="sm" label="Hoodies" checked/>
            <x-checkbox size="sm" label="Bags" checked/>
            <x-checkbox size="sm" label="Shoes"/>
            <x-checkbox size="sm" label="Accessories"/>
        </x-checkboxes>
    </x-card>

    <x-tabs class="break-inside-avoid border-base-300
            [&>label]:has-checked:before:!w-[calc(100%_+_2_*_min(var(--radius-field,.375rem),.75rem))] [&>label]:before:!h-[min(var(--radius-field,.375rem),.75rem)] [&>label]:before:!bg-size-[min(var(--radius-field,.375rem),.75rem)]
            [&>label]:!border-b-0 [&>div]:rounded-[var(--radius-box)] [&>div]:nth-of-type-1:rounded-ss-none"

            variant="lift">
        <x-tab
            class="p-6 bg-base-100 border-1 border-base-300 rounded-e-[var(--radius-box)] rounded-es-[var(--radius-box)]"
            style="--tab-border-color: var(--color-base-300);"
            label="Tab 1">
            Tab content 1
        </x-tab>
        <x-tab
            class="p-6 bg-base-100 border-1 border-base-300 rounded-e-[var(--radius-box)] rounded-es-[var(--radius-box)]"
            style="--tab-border-color: var(--color-base-300);"
            label="Tab 2">
            Tab content 2
        </x-tab>
        <x-tab
            class="p-6 bg-base-100 border-1 border-base-300 rounded-e-[var(--radius-box)] rounded-es-[var(--radius-box)]"
            style="--tab-border-color: var(--color-base-300);"
            label="Tab 3">
            Tab content 3
        </x-tab>
    </x-tabs>

    <x-card class="break-inside-avoid bg-base-100 border-1 border-base-300" x-data="{ value: 50 }">
        <div class="flex justify-start gap-2">
            <x-icon class="h-lh opacity-60" name="heroicon-o-cog-6-tooth"/>
            <span class="font-semibold col-span-full">Price range</span>
        </div>
        <div class="w-full max-w-80 space-y-2">
            <span class="block w-full text-5xl font-light text-center" x-text="value"></span>
            <x-range show-steps="25" minor="5" min="50" max="100" x-model="value"/>
        </div>
    </x-card>

    <x-card class="break-inside-avoid bg-base-100 border-1 border-base-300 ">
        <x-slot:figure class="p-2">
        <img class="rounded-[calc(var(--radius-box)-.5rem)]" src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Shoes">
        </x-slot:figure>
        <x-slot:title class="flex justify-between">
            Nike shoes
            <x-badge color="success" label="SALE"/>
        </x-slot:title>
        <x-slot class="flex flex-col items-start gap-4">
            <div class="flex items-center gap-2">
            <x-rating size="xs" x-model="rating" class="inline text-orange-400" value="4"/>
            <span class="text-xs">420 reviews</span>
            </div><div>
            <span class="text-2xl font-semibold">$120</span> <span class="text-sm line-through opacity-60">$150</span>
            </div>
        </x-slot>
    </x-card>

    <x-card class="break-inside-avoid bg-base-100 border-1 border-base-300 ">
        <x-slot class="join">
        <x-input class="join-item" icon="heroicon-o-magnifying-glass" placeholder="Search"/>
        <x-button class="join-item" color="neutral" label="Find"/>
        </x-slot>
    </x-card>

    <x-card class="break-inside-avoid bg-base-100 border-1 border-base-300 ">
        <x-slot class="flex flex-col items-start gap-4">
            <div class="flex justify-start gap-2">
                <x-icon class="h-lh opacity-60" name="heroicon-o-user-plus"/>
                <span class="font-semibold mb-2 text-left">Create new account</span>
            </div>
            <x-input icon="heroicon-o-user" placeholder="Username"/>
            <x-input icon="heroicon-o-lock-open" placeholder="Password"/>
            <x-toggle size="xs" label="Accept terms without reading"/>
            <x-toggle size="xs" label="Subscribe to spam emails"/>
        </x-slot>
        <x-slot:actions class="justify-start">
            <x-button color="primary" label="Register"/>
            <x-button variant="ghost" label="Or login"/>

        </x-slot:actions>
    </x-card>

    <x-card class="break-inside-avoid bg-base-100 border-1 border-base-300">
        <x-slot class="grid grid-cols-2 justify-between">
            <span class="font-semibold mb-2 col-span-full">Page score</span>
            <div>
                <span class="text-4xl font-black">91</span>
                <span class="text-lg text-bold">/ 100</span>
            </div>
            <x-radial-progress class="justify-self-end" style="--size:3rem" value="91"/>
            <div class="text-xs flex items-center gap-1">
                <x-icon class="h-lh text-success" name="heroicon-c-shield-check"/>
                <span class="opacity-60">All good</span>
            </div>
        </x-slot>
    </x-card>

    <x-card class="break-inside-avoid bg-base-100 border-1 border-base-300">
        <x-slot class="grid grid-cols-2 justify-between">
            <div class="flex justify-start gap-2 col-span-full">
                <x-icon class="h-lh opacity-60" name="heroicon-o-arrow-trending-up"/>
                <span class="font-semibold mb-2">Recent orders</span>
            </div>
            Charlie Chapman <x-badge size="xs" color="info" class="place-self-end" label="Send"/>
            Howard Hudson <x-badge size="xs" color="error" class="place-self-end" label="Failed"/>
            Fiona Fisher <x-badge size="xs" color="warning" class="place-self-end" label="In progress"/>
            Nick Nelson <x-badge size="xs" color="success" class="place-self-end" label="Completed"/>
            Amanda Anderson <x-badge size="xs" color="success" class="place-self-end" label="Completed"/>
        </x-slot>
    </x-card>

    <x-card class="break-inside-avoid bg-base-100 border-1 border-base-300">
        <x-slot class="grid grid-cols-2 justify-between gap-2">
            <div class="flex justify-start gap-2 col-span-full">
                <x-icon class="h-lh opacity-60" name="heroicon-o-pencil-square"/>
                <span class="font-semibold mb-2">Write a new post</span>
            </div>
            <div class="col-span-full flex justify-between">
            <x-dropdown hover class="text-nowrap text-xs bg-base-100 rounded-sm border-1 border-info mt-1 ms-2 p-2">
                <x-slot:trigger class="join">
                    <x-button size="xs" class="join-item px-3 border-1 border-base-300 font-bold" label="B"/>
                    <x-button size="xs" class="join-item px-3 border-1 border-base-300 italic font-mono " label="I"/>
                    <x-button size="xs" class="join-item px-3 border-1 border-base-300 underline" label="U"/>
                </x-slot:trigger>
                The buttons have no effect in this demo.
            </x-dropdown>
            <x-dropdown hover class="text-nowrap text-xs bg-base-100 rounded-sm border-1 border-info mt-1 ms-2 p-2">
                <x-slot:trigger class="justify-self-end">
                    <x-button size="xs" class="px-3" label="Add files"/>
                </x-slot:trigger>
                The buttons have no effect in this demo.
            </x-dropdown>
            </div>
            <x-textarea class="col-span-full" rows="6" maxlength="500" length-indicator resize="none"/>
            
            <x-button label="Draft"/>
            <x-button color="primary" label="Publish"/>
        </x-slot>
    </x-card>
    
    <x-menu class="break-inside-avoid w-full bg-base-100 border-1 border-base-300 rounded-lg">
        <x-menuItem title>Admin panel menu</x-menuItem>
        <x-menuItem>
            <x-slot:icon>
                <x-icon class="h-lh opacity-30" name="heroicon-o-circle-stack"/>
            </x-slot:icon>
            <span>Databases</span>
            <span class="text-right">7</span>
        </x-menuItem>
        <x-menuItem>
            <x-slot:icon>
                <x-icon class="h-lh opacity-30" name="heroicon-o-cube"/>
            </x-slot:icon>
            Products
        </x-menuItem>
        <x-menuItem>
            <x-slot:icon>
                <x-icon class="h-lh opacity-30" name="heroicon-o-envelope"/>
            </x-slot:icon>
            <span>Messages</span>
            <span class="text-right">29</span>
        </x-menuItem>
        <x-menuItem>
            <x-slot:icon>
                <x-icon class="h-lh opacity-30" name="heroicon-o-key"/>
            </x-slot:icon>
            Access tokens
        </x-menuItem>
        <x-menuItem>
            <x-slot:icon>
                <x-icon class="h-lh opacity-30" name="heroicon-o-user"/>
            </x-slot:icon>
            <span>User</span>
            <span class="text-right status status-info"></span>
        </x-menuItem>
        <x-menuItem>
            <x-slot:icon>
                <x-icon class="h-lh opacity-30" name="heroicon-o-adjustments-vertical"/>
            </x-slot:icon>
            Settings
        </x-menuItem>
    </x-menu>

    <div class="break-inside-avoid flex flex-col gap-4">
        <x-alert class="break-inside-avoid" type="info" icon="heroicon-o-inbox" description="There are 9 new messages"/> 
        <x-alert class="break-inside-avoid" type="success" variant="outline" icon="heroicon-o-check-badge" description="Verification process completed"/>
        <x-alert class="break-inside-avoid" type="warning" variant="dash" icon="heroicon-o-shield-exclamation">
            <x-slot:description class="flex items-center">
                <x-button class="h-lh px-1 py-0" href="#"  variant="ghost" label="Click"/> to verify your email
            </x-slot:description>
            </x-alert>
            <x-alert type="error" variant="soft" icon="heroicon-o-inbox" description="Access denied ">
            <x-slot:actions>
                <x-button variant="ghost" label="Support"/>
            </x-slot:actions>
        </x-alert>
    </div>

    <x-card class="break-inside-avoid bg-base-100 border-1 border-base-300 flex flex-col gap-1">
        <x-slot:figure class="p-4">
            <x-indicator>
                <x-slot:indicator>
                    <x-badge size="xs" color="warning" label="SALE"/>
                </x-slot:indicator>
                <x-tabs variant="box">
                    <x-tab label="Monthly"/>
                    <x-tab label="Yearly"/>
                </x-tabs>
            </x-indicator>
        </x-slot:figure>
        <x-slot class="flex flex-col gap-2">
        <span class="font-semibold mb-2">Starter plan</span>
        <div>
        <span class="text-4xl font-black">$200</span>/month
        </div>
        <div class="flex items-center gap-2 text-xs">
            <x-icon class="h-lh text-success" name="heroicon-c-check-circle"/>
            20 tokens per day
        </div>
        <div class="flex items-center gap-2 text-xs">
            <x-icon class="h-lh text-success" name="heroicon-c-check-circle"/>
            10 projects
        </div>
        <div class="flex items-center gap-2 text-xs">
            <x-icon class="h-lh text-success" name="heroicon-c-check-circle"/>
            API access
        </div>
        <div class="flex items-center gap-2 text-xs">
            <x-icon class="h-lh text-error" name="heroicon-c-x-circle"/>
            Priority support
        </div>
        </x-slot>
    </x-card>

    @php
        $country = ['China', 'France', 'Japan', 'Italy', 'Spain', 'USA'][rand(0, 3)];
    @endphp
    <x-card class="*:px-0 bg-base-100 border-1 border-base-300">
        <x-slot:figure>
            <x-carousel
                :slides="$countries[$country]"
                time-per-slide="6"
                rotation-time=".5"
                class="h-40 [--slides_per_stop:1]"
                >
                @foreach ($component->slides as $slide)
                <x-slide image="{{ $slide['img'] }}"/>
                @endforeach
            </x-carousel>
        </x-slot:figure>
        <x-slot:title class="px-0 flex flex-col items-stretch gap-0">
            <span class="carousel-slide px-6 -mb-2">{{ $country }}</span>
            <x-carousel
                :slides="$countries[$country]"
                time-per-slide="6"
                rotation-time=".5"
                class="[--slides_per_stop:1]"
                >
                @foreach ($component->slides as $slide)
                <span class="carousel-slide px-6 text-xl">{{ $slide['site'] }}</span>
                @endforeach
            </x-carousel>
        </x-slot:title>
        <x-carousel
            :slides="$countries[$country]"
            time-per-slide="6"
            rotation-time=".5"
            class="[--slides_per_stop:1]"
            >
            @foreach ($component->slides as $slide)
            <span class="carousel-slide px-6">{{ $slide['description'] }}</span>
            @endforeach
        </x-carousel>
        <x-slot:actions class="px-6">
            <x-button color="primary" label="Book a flight"/>
        </x-slot:actions>
    </x-card>

    <x-timeline vertical class="timeline-compact">
        @foreach ([
            'Harry Potter and Sorcerer\'s Stack' => ['success', 'success'],
            'Harry Potter and Chamber of Servers' => ['success', 'success'],
            'Harry Potter and Prisoner of Azure' => ['success', 'success'],
            'Harry Potter and Goblet of Firebase' => 'success',
            'Harry Potter and Elixir of Phoenix' => null,
            'Harry Potter and Half-Deployed App' => null,
            'Harry Potter and Deathly Frameworks' => null,
        ] as $title => $color)
        <x-timeline-event @class([
                '[&>hr:first-child]:bg-success' => (is_array($color) ? $color[0] : $color) === 'success',
                '[&>hr:last-child]:bg-success' => is_array($color) && $color[1]  === 'success',
            ])>
            <x-slot:icon>
                <x-icon @class([
                    'h-5 timeline-middle',
                    'text-success' => (is_array($color) ? $color[0] : $color) === 'success',
                    ])
                    name="heroicon-m-check-circle"
                    />
            </x-slot:icon>
            
            <x-slot:end class="timeline-box text-sm">{{ $title }}</x-slot:end>
        </x-timeline-event>
        @endforeach
    </x-timeline>

</div>