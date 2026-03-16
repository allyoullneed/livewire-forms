<x-card class="bg-base-200 w-80">
	<x-slot class="flex flex-col gap-3">
		<x-input type="email" placeholder="Email"/>
		<x-toggle size="sm" label="Submit to newsletter"/>
		<x-toggle size="sm" label="Accept terms of use"/>
		<x-button class="self-streth" color="neutral" label="Save"/>
	</x-slot>
</x-card>