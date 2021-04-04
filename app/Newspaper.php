<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $language
 * @property string $name
 * @property string $dateReceipt
 * @property string $datePublished
 * @property int $pages
 * @property float $price
 * @property string $type
 * @property string $publisher
 * @property string $created_at
 * @property string $updated_at
 */
class Newspaper extends Model
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
    protected $fillable = ['language', 'name', 'dateReceipt', 'datePublished', 'pages', 'price', 'type', 'publisher', 'created_at', 'updated_at'];

}
