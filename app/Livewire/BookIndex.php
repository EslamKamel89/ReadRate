<?php

namespace App\Livewire;

use App\Models\Book;
use Livewire\Component;

class BookIndex extends Component {
	use \App\Traits\Pr;

	public string $title = '';
	public string $author = '';
	public function createBook() {
		auth()->user()->books()->create( [ 
			'title' => $this->title,
			'author' => $this->author,
		] );
		$this->title = '';
		$this->author = '';
	}
	public function render() {
		return view( 'livewire.book-index', [ 
			'books' => auth()->user()->books()->latest()->get(),
		] );
	}
}
