<div>
    <livewire:toggle-item />
    <livewire:book-index.create-book />
    <div>
        <input wire:model.live.debounce.750="query" type="search"
            class="rounded-lg px-3 py-2 my-2 border-slate-500 w-full" placeholder="Search books...">
    </div>
    <div id="books"></div>
    @if ( $books->count() > 0 )
		<div class="flex flex-col gap-2">
			@foreach ( $books as $book )
				<livewire:book-index.book-item :book="$book" wire:key="{{ $book->id }}" />
			@endforeach
		</div>
		<div class="mt-4">
			{{ $books->links( data: [ 'scrollTo' => false ] ) }}
		</div>
	@else
		<div class="flex justify-center items-center h-64">
			<p class="text-gray-500">No books found</p>
		</div>
	@endif
</div>