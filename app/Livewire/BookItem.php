<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class BookItem extends Component {
	public Book $book;
	public function render() {
		return view( 'livewire.book-item' );
	}
}
