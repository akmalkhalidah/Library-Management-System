<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $isbn
 * @property string $title
 * @property string $type
 * @property string $name
 * @property int $qty
 * @property string $date
 * @property int $edition
 * @property float $price
 * @property int $pages
 * @property string $publisher
 * @property string $created_at
 * @property string $updated_at
 */
class Book extends Model
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
    protected $fillable = ['isbn', 'title', 'type', 'name', 'qty', 'date', 'edition', 'price', 'pages', 'publisher', 'created_at', 'updated_at'];

}
