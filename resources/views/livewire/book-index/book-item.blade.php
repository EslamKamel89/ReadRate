<div>
    <div class="card bg-gray-100 text-black w-full">
        <div class=" card-body">
            @if ( $isEditing )
				<div>
					Show Edit form
				</div>
			@endif
            <h2 class="card-title leading-snug">{{ $book->title }}</h2>
            <p class="text-xs  mb-5 leading-snug">by {{ $book->author }}</p>
            <p>{{ $book->notes }}</p>
            <div class="card-actions justify-end">
                <button class="btn btn-info text-white !btn-sm !text-xs" wire:click="toggleEdit">
                    <span> {{ $isEditing ? 'Save' : 'Edit' }}</span>
                </button>
            </div>
        </div>
    </div>
</div>