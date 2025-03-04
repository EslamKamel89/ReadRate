<?php

namespace App\Livewire\BookIndex;

use App\Livewire\Forms\BookForm;
use App\Models\Book;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class BookIndex extends Component {
	use \App\Traits\Pr, WithPagination;
	protected $listeners = [ 
		'book-index.update' => '$refresh'
	];
	#[Url(as: 'search') ]
	public string $query = '';
	public function render() {

		return view( 'livewire.book-index.book-index', [ 
			'books' => auth()
				->user()
				->books()
				->search( $this->query )
				->latest()
				->paginate( 5 ),
		] );
	}
	public function deleteBook( $id ) {
		$book = Book::find( $id );
		$this->authorize( 'delete', $book );
		$book->delete();
	}


}
