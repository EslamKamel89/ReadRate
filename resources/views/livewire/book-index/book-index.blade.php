<div>
    <livewire:book-index.create-book />
    <div class="flex flex-col gap-2">
        @foreach ( $books as $book )
			<livewire:book-index.book-item :book="$book" wire:key="{{ $book->id }}" />
		@endforeach
    </div>
</div>