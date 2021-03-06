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
        'start_done',
        'planning_start',
        'planning_end',
        'planning_done',
        'design_start',
        'design_end',
        'design_done',
        'development_start',
        'development_end',
        'development_done',
        'finalizing_start',
        'finalizing_end',
        'finalizing_done',
        'launch_start',
        'launch_end',
        'launch_done',
        'finish',
        'finish_done',
        'status',
        'fee'


    ];


    protected $dates = [
        'start',
        'start_done',
        'planning_start',
        'planning_end',
        'planning_done',
        'design_start',
        'design_end',
        'design_done',
        'development_start',
        'development_end',
        'development_done',
        'finalizing_start',
        'finalizing_end',
        'finalizing_done',
        'launch_start',
        'launch_end',
        'launch_done',
        'finish',
        'finish_done',
    ];


    /**
     * A project belongs to a client.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo('DragonLancers\Client');
    }



}
