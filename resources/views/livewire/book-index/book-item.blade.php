<div>
    <div class="card bg-gray-100 text-black w-full">
        <div class=" card-body">
            @if ( $isEditing )
				<livewire:book-index.update-book :book="$book" />
			@endif
            <h2 class="card-title leading-snug">{{ $book->title }}</h2>
            <p class="text-xs  mb-5 leading-snug">by {{ $book->author }}</p>
            <p>{{ $book->notes }}</p>
            <div class="card-actions justify-end">
                <button class="btn btn-info text-white !btn-sm !text-xs" wire:click="toggleEdit">
                    <span> {{ $isEditing ? 'Save' : 'Edit' }}</span>
                </button>
                <button class="btn btn-error text-white !btn-sm !text-xs">
                    <span> Delete</span>
                </button>
            </div>
        </div>
    </div>
</div>