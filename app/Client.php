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
        'phone',
        'email',
        'reg_number',
        'address',
        'zip_code',
        'city',
        'country',
    ];


    /**
     * A client can have many projects.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function projects()
    {
        return $this->hasMany('App\Project');
    }
}
