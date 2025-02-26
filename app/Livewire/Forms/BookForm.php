<?php

namespace App\Livewire\Forms;

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
	public function create() {
		auth()->user()->books()->create( [ 
			'title' => $this->title,
			'author' => $this->author,
		] );
		$this->reset();

	}

}
