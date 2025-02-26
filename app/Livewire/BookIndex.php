<?php

namespace App\Livewire;

use App\Livewire\Forms\BookForm;
use App\Models\Book;
use Livewire\Component;

class BookIndex extends Component {
	use \App\Traits\Pr;
	public BookForm $form;

	public function render() {
		return view( 'livewire.book-index', [ 
			'books' => auth()->user()->books()->latest()->get(),
		] );
	}

	public function submit() {
		$this->form->validate();
		$this->form->create();
	}
}
