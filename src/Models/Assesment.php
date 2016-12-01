<?php

namespace Scool\Assesments\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Assesment
 * @package Scool\Assesments\Models
 */
class Assesment extends Model implements Transformable
{

    use TransformableTrait;
    /**
     * @var array
     */
    protected $fillable = [

        'grade_id',
        'user_id',
        'item_id',
        'note',
        'item_type',
        'weight',
        'parent_grade_id',


    ];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function grade()
    {

        return $this->hasOne(Grade::class);

    }


}
