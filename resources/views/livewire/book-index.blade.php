<div>
    <div class="flex flex-col gap-2">

        @foreach ( $books as $book )
			<div class="card bg-gray-100 text-black w-full">
				<div class="card-body">
					<h2 class="card-title leading-snug">{{ $book->title }}</h2>
					<p class="text-xs  mb-5 leading-snug">by {{ $book->author }}</p>
					<p>{{ $book->notes }}</p>
					<div class="card-actions justify-end">
						<!-- <button class="btn">Buy Now</button> -->
					</div>
				</div>
			</div>

		@endforeach
    </div>
</div>