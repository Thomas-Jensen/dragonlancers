<?php namespace DragonLancers;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id',
        'name',
        'start',
        'finish',
        'stage',


    ];


    /**
     * A project belongs to a client.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo('App\Client');
    }



}
