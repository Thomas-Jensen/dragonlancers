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
        'services',
        'fee',
        'renews'

    ];

    /**
     * A subscription belongs to a client.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo('App\Client');
    }

}
