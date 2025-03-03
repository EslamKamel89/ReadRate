<?php

namespace App\Livewire\BookIndex;

use App\Models\Book;
use Livewire\Attributes\On;
use Livewire\Component;

class BookItem extends Component {
	protected $listeners = [
		// 'book-item.{book.id}.update' => '$refresh',
	];
	public Book $book;
	public bool $isEditing = false;
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
	// public function delete() {
	// 	$this->parent->deleteBook( $this->book->id );
	// }
}
