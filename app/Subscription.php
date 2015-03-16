<?php namespace DragonLancers;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id',
        'domain',
        'services',
        'fee',
        'renews',
        'status',
        'screen_shot',
        'maintenance',
        'work',
        'seo'

    ];

    /**
     * A subscription belongs to a client.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo('DragonLancers\Client');
    }

}
