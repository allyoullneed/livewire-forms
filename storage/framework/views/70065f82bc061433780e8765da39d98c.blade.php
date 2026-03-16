@renderif ($transparent)
    {{ $slot }}
@else
    @php
        $arr_position = $parse_position($position);
    @endphp
    <div
        {{ $attributes->except(['position', 'size'])->class([
            'indicator' => !$noIndicator,
            ])->merge() }}
    >
        @if (!$noIndicator && $indicator)
            <div {{ $indicator->attributes->except(['position', 'size'])->class([
                'flex justify-center items-center indicator-item',
                'indicator-top'    => in_array('top'   , $arr_position),
                'indicator-bottom' => in_array('bottom', $arr_position),
                'indicator-left'   => in_array('left'  , $arr_position),
                'indicator-right'  => in_array('right' , $arr_position),
                'indicator-start'  => in_array('start' , $arr_position),
                'indicator-end'    => in_array('end'   , $arr_position),
                'indicator-middle' => $arr_position != [] && !in_array('top', $arr_position)   && !in_array('bottom', $arr_position),
                'indicator-center' => $arr_position != [] && !in_array('start', $arr_position) && !in_array('end', $arr_position),
            ]) }}
            class="indicator-item ">
                {{ $indicator }}
            </div>
        @elseif (!$noIndicator)
            <span 
                {{ $attributes->except(['position', 'size'])->class([
                    'indicator-item status',
                    'indicator-top'    => in_array('top'   , $arr_position),
                    'indicator-bottom' => in_array('bottom', $arr_position),
                    'indicator-left'   => in_array('left'  , $arr_position),
                    'indicator-right'  => in_array('right' , $arr_position),
                    'indicator-start'  => in_array('start' , $arr_position),
                    'indicator-end'    => in_array('end'   , $arr_position),
                    'indicator-middle' => $arr_position != [] && !in_array('top', $arr_position)   && !in_array('bottom', $arr_position),
                    'indicator-center' => $arr_position != [] && !in_array('start', $arr_position) && !in_array('end', $arr_position),
                    'status-primary'   => $color === 'primary',
                    'status-secondary' => $color === 'secondary',
                    'status-accent'    => $color === 'accent',
                    'status-info'      => $color === 'info',
                    'status-success'   => $color === 'success',
                    'status-warning'   => $color === 'warning',
                    'status-error'     => $color === 'error',
                ]) }}
            >
            </span>
        @endif
        {{ $slot }}
    </div>
@endrenderif