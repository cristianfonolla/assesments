<?php

namespace Scool\Assesments\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Grade
 * @package Scool\Assesments\Models
 */
class Grade extends Model
{
    /**
     * @var array
     */
    protected $fillable = [


        'value'


    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function assesment()
    {

        return $this->hasOne(Assesment::class);

    }

}
