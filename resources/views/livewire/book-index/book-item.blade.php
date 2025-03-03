<div>
    <div class="card bg-gray-100 text-black w-full">
        <div class=" card-body">
            @if ( $isEditing )
				<livewire:book-index.update-book :book="$book" />
			@else
				<h2 class="card-title leading-snug">{{ $book->title }}</h2>
				<p class="text-xs  mb-5 leading-snug">by {{ $book->author }}</p>
				<!-- <p>{{ $book->notes }}</p> -->
			@endif
            <div>
                <textarea id="notes" rows="4" class="w-full border border-slate-300 rounded-lg"
                    placeholder="Your notes for this book" wire:model.live.debounce.750="form.notes"></textarea>
            </div>
            <div class="card-actions justify-end">
                <button class="btn btn-info text-white !btn-sm !text-xs" wire:click="toggleEdit">
                    <span> {{ $isEditing ? 'Cancel' : 'Edit' }}</span>
                </button>
                <!-- <button class="btn btn-error text-white !btn-sm !text-xs"
                    wire:click="$parent.deleteBook({{ $book->id }})">
                    <span> Delete</span>
                </button> -->
                <button x-data @click="
                if(window.confirm('Are you sure you want to delete this book?')){
                    $wire.$parent.deleteBook({{ $book->id }});
                }
                " class="btn btn-error text-white !btn-sm !text-xs">
                    <span> Delete</span>
                </button>
            </div>
        </div>
    </div>
</div>