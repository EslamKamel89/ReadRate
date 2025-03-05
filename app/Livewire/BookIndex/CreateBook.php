<?php

namespace App\Livewire\BookIndex;

use App\Livewire\Forms\BookForm;
use Livewire\Component;

class CreateBook extends Component {
	use \App\Traits\Pr;

	public BookForm $form;

	public function render() {

		return view( 'livewire.book-index.create-book' );
	}
	public function submit() {
		$this->form->validate();
		$book = $this->form->create();
		// dd( $book );
		$this->dispatch( 'book-index.update' );
		$this->dispatch( 'alert', body: "Book {$book->title} Created Successfully" );
	}
}
