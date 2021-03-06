<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $book_id
 * @property string $issue_date
 * @property string $due_date
 * @property string $return_date
 * @property string $status
 * @property float $fine
 * @property string $created_at
 * @property string $updated_at
 * @property Book $book
 */
class Issue extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['book_id', 'issue_date', 'due_date', 'return_date', 'status', 'fine', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function book()
    {
        return $this->belongsTo('App\Book');
    }
}
