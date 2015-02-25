<?php namespace DragonLancers;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model {

	protected $fillable = [
        'title_en',
        'title_da',
        'category',
        'author',
        'body_en',
        'body_da',
        'published_at',
        'slug_en',
        'slug_da'


    ];

    protected $dates = ['published_at'];

    public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnPublished($query)
    {
        $query->where('published_at', '>=', Carbon::now());
    }

    protected function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);
    }

    public function scopePhp($query)
    {
        $query->where('category', '=', 'php');
    }

    public function scopeHtml($query)
    {
        $query->where('category', '=', 'html');
    }

    public function scopeJavascript($query)
    {
        $query->where('category', '=', 'javascript');
    }

    public function scopeCss($query)
    {
        $query->where('category', '=', 'css');
    }

    public function scopeDesign($query)
    {
        $query->where('category', '=', 'design');
    }

    public function scopeSeo($query)
    {
        $query->where('category', '=', 'seo');
    }

    public function scopeBusiness($query)
    {
        $query->where('category', '=', 'business');
    }

    public function scopeNews($query)
    {
        $query->where('category', '=', 'news');
    }


}
