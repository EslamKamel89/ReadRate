<div>

    <div class="my-3">
        <form wire:submit.prevent="submit">
            <div class="flex flex-col gap-y-2">
                <input type="text" placeholder="Title"
                    class="input input-bordered w-full max-w-md bg-gray-300 text-black placeholder:text-black"
                    id="title" wire:model.live.blur="form.title" />
                @error( 'form.title' )
					<div class="text-xs text-red-500">{{ $message }}</div>
				@enderror
                <input type="text" placeholder="Author"
                    class="input input-bordered w-full max-w-md bg-gray-300 text-black placeholder:text-black"
                    id="author" wire:model.live.blur="form.author" />
                @error( 'form.author' )
					<div class="text-xs text-red-500">{{ $message }}</div>
				@enderror
                <div class="flex gap-2 items-center">
                    <button class="btn btn-primary btn-sm text-sm text-white w-fit disabled:text-gray-800"
                        type="submit">
                        <span wire:loading.remove wire:target="submit">Submit</span>
                        <span wire:loading wire:target="submit">Loading</span>
                    </button>
                </div>
            </div>
        </form>

    </div>
    <div class="flex flex-col gap-2">

        @foreach ( $books as $book )
			<livewire:book-item :book="$book" wire:key="{{ $book->id }}" />
		@endforeach
    </div>
</div>