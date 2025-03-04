<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 *
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $author
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\BookFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Book search()
 * @mixin \Eloquent
 */
class Book extends Model {
	/** @use HasFactory<\Database\Factories\BookFactory> */
	use HasFactory;
	protected $fillable = [ 
		'user_id',
		'title',
		'author',
		'notes',
	];
	public function user(): BelongsTo {
		return $this->belongsTo( User::class);
	}
	public function scopeSearch( Builder $builder, string $search ) {
		$builder->when( $search, function (Builder $query, string $search) {
			$query->where( 'title', 'LIKE', "%{$search}%" )
				->orWhere( 'author', 'LIKE', "%{$search}%" );
		} );
	}
}
