<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class BookForm extends Form {
	public string $title = '';
	public string $author = '';
	public function create() {
		auth()->user()->books()->create( [ 
			'title' => $this->title,
			'author' => $this->author,
		] );
		$this->reset();

	}

}
