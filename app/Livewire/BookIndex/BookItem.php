<?php

namespace App\Livewire\BookIndex;

use App\Models\Book;
use Livewire\Component;

class BookItem extends Component {
	public Book $book;
	public function render() {
		return view( 'livewire.book-index.book-item' );
	}
}
