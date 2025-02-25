<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class BookIndex extends Component {
	use \App\Traits\Pr;
	public function createBook() {
		Book::factory()->create( [ 
			'user_id' => 1,
		] );
	}
	public function render() {
		return view( 'livewire.book-index', [ 
			'books' => auth()->user()->books()->latest()->get(),
		] );
	}
}
