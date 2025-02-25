<div>
    <div class="flex my-3 justify-end">
        <button class="btn btn-sm text-xs text-white btn-primary" wire:click="createBook">Create Book</button>
    </div>
    <div class="flex flex-col gap-2">

        @foreach ( $books as $book )
			<livewire:book-item :book="$book" wire:key="{{ $book->id }}" />
		@endforeach
    </div>
</div>