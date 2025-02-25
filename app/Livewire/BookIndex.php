<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class BookIndex extends Component {
	use \App\Traits\Pr;

	public string $title = '';
	public function createBook() {
		dd( $this->title );
	}
	public function render() {
		return view( 'livewire.book-index', [ 
			'books' => auth()->user()->books()->latest()->get(),
		] );
	}
}
