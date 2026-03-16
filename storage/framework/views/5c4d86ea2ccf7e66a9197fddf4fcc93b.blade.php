<x-card class="self-end bg-base-200 xl:w-160 border-1 border-base-300">
    <x-slot:title class="text-xl" style="font-variant-caps: small-caps">Today's schedule</x-slot:title>
    <div class="grid grid-cols-[auto_1fr] xl:grid-cols-[auto_1fr_auto_auto] gap-4">
        @foreach($meetings as $meeting)
            <span class="min-w-0 text-lg small-caps">{{ $meeting['start'] }}</span>
            <div class="min-w-0 flex flex-col whitespace-nowrap">
                <span class="text-lg font-bolder">{{ $meeting['title'] }}</span>
                <span class="text-base-content/75">{{ $meeting['description'] }}</span>
            </div>
            <div class="min-w-0 avatar-group items-center -space-x-6">
                @foreach(array_slice($meeting['attendees'], 0, 4) as $attendee)
                    @if($attendee && isset($attendees[$attendee]))
                        <x-avatar class="cursor pointer hover:z-1 size-12 rounded-full {{ $attendees[$attendee] }}" picture="/people/fake/{{ $attendee }}.webp"/>
                    @else
                        <x-avatar class="cursor pointer hover:z-1    text-base-100">
                            <x-slot:picture>
                                <x-icon name="icon-account_circle" class="bg-base-content size-12"/>
                            </x-slot:picture>
                        </x-avatar>
                    @endif
                @endforeach
                @if(count($meeting['attendees']) > 4)
                    <div class="min-w-0 avatar avatar-placeholder">
                        <div class="bg-neutral text-neutral-content size-12 font-bold">+{{ count($meeting['attendees']) - 4 }}</div>
                    </div>
                @endif
            </div>
            <x-toggle class="min-w-0 justify-self-end" label-before="Won't attend" label-checked="Will attend" :checked="$meeting['attending'] ? 'checked' : false" />
        @endforeach
     </div>
</x-card>