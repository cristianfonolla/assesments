<?php

namespace Scool\Assesments\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Assesment
 * @package Scool\Assesments\Models
 */
class Assesment extends Model
{
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
