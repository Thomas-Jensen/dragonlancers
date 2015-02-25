<?php namespace DragonLancers;

use Illuminate\Database\Eloquent\Model;

class Author extends Model {

    protected $fillable = [
        'author',
        'image',
        'description_en',
        'description_da',
        'slug_author'

    ];

}
