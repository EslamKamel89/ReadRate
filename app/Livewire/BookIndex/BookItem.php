<?php

namespace App\Livewire\BookIndex;

use App\Livewire\Forms\BookForm;
use App\Models\Book;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;

class BookItem extends Component {
	use \App\Traits\Pr;
	protected $listeners = [
		// 'book-item.{book.id}.update' => '$refresh',
	];
	public Book $book;
	public bool $isEditing = false;

	public BookForm $form;
	public function mount() {
		$this->form->notes = $this->book->notes;
	}

	public function render() {
		return view( 'livewire.book-index.book-item' );
	}
	public function toggleEdit() {
		$this->isEditing = ! $this->isEditing;
	}
	#[On('book-item.{book.id}.update') ]
	public function updateBookItem() {
		$this->isEditing = false;
	}
	public function updatedFormNotes() {
		$this->form->updateNotes( $this->book );
	}
}
