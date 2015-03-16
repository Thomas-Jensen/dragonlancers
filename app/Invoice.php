<?php namespace DragonLancers;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model {

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected  $fillable = [
        'client_id',
        'amount',
        'due',
        'paid',
    ];


    public function client()
    {
        return $this->belongsTo('DragonLancers\Client');
    }



}
