<?php

namespace App\Livewire\Forms;

use App\Models\Book;
use Livewire\Attributes\Validate;
use Livewire\Form;

class BookForm extends Form {
	#[Validate('required', message: "You can't leave thet title empty") ]
	#[Validate('min:3', message: 'The title is too short') ]
	#[Validate('max:100', message: 'The title is too long') ]
	public string $title = '';
	#[Validate('required', message: "You can't leave thet title empty") ]
	#[Validate('min:3', message: 'The author is too short') ]
	#[Validate('max:100', message: 'The author is too long') ]
	public string $author = '';
	#[Validate('nullable') ]
	public ?string $notes = '';
	public function create(): Book {
		/** @var \App\Models\Book $book */
		$book = auth()->user()->books()->create( [ 
			'title' => $this->title,
			'author' => $this->author,
		] );
		$this->reset();
		return $book;
	}
	public function update( Book $book, ) {
		$book->update( [ 
			'title' => $this->title,
			'author' => $this->author,
		] );
		return $book;
	}
	public function updateNotes( Book $book, ) {
		$book->update( [ 
			'notes' => $this->notes,
		] );
	}
}
