<?php namespace DragonLancers;

use Illuminate\Database\Eloquent\Model;
use DragonLancers\Project;

class Client extends Model {


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id',
        'name',
        'slug',
        'phone',
        'email',
        'reg_number',
        'address',
        'zip_code',
        'city',
        'country',
        'language',
        'currency'
    ];


    /**
     * A client can have many projects.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projects()
    {
        return $this->hasMany('DragonLancers\Project');
    }


    /**
     * A client can have many subscriptions.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptions()
    {
        return $this->hasMany('DragonLancers\Subscription');
    }


    /**
     * A client can have many invoices.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoices()
    {
      return $this->hasMany('DragonLancers\Invoice');
    }


}

