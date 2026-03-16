<div class="w-full max-w-240 grid grid-cols-1 lg:grid-cols-2 gap-4">
  <x-skewed-gallery  class="min-h-80 h-full gap-[3px] *:hover:w-90 md:*:hover:w-80 xl:*:hover:w-60 *:duration-500 rounded-lg">
	@foreach(['spring', 'summer', 'autumn', 'winter'] as $season)
	<img class="h-full" src="assets/seasons/{{ $season }}1.webp"/>
	@endforeach
  </x-skewed-gallery>

  <x-carousel time-per-slide="3" class="min-h-80 h-full rounded-box [--slides_per_stop:1]" count="20">
	@for($i = 2; $i <= 6; $i++)
		@foreach(['spring', 'summer', 'autumn', 'winter'] as $season)
		  <img src="assets/seasons/{{ $season }}{{ $i }}.webp"/>
		@endforeach
	@endfor
  </x-carousel>
</div>