<?php

namespace App\Livewire\BookIndex;

use App\Livewire\Forms\BookForm;
use App\Models\Book;
use Livewire\Component;

class UpdateBook extends Component {
	public Book $book;
	public BookForm $form;
	public function mount() {
		$this->form->title = $this->book->title;
		$this->form->author = $this->book->author;
	}
	public function render() {
		return view( 'livewire.book-index.update-book' );
	}
	public function submit() {
		$this->form->validate();
		$this->form->update( $this->book );
		$this->dispatch( "book-item.{$this->book->id}.update" );
	}
}
