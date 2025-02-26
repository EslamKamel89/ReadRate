<div>
    <div class="my-3">
        <form wire:submit.prevent="createBook">
            <div class="flex flex-col gap-y-2">
                <input type="text" placeholder="Title"
                    class="input input-bordered w-full max-w-md bg-gray-300 text-black placeholder:text-black"
                    id="title" wire:model="title" />
                <input type="text" placeholder="Author"
                    class="input input-bordered w-full max-w-md bg-gray-300 text-black placeholder:text-black"
                    id="author" wire:model="author" />
                <button class="btn btn-primary btn-sm text-sm text-white w-fit" type="submit">Submit</button>
            </div>
        </form>
    </div>
    <div class="flex flex-col gap-2">

        @foreach ( $books as $book )
			<livewire:book-item :book="$book" wire:key="{{ $book->id }}" />
		@endforeach
    </div>
</div>