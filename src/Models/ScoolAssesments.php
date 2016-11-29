<?php
/**
 * Created by PhpStorm.
 * User: cristian
 * Date: 24/11/16
 * Time: 20:20
 */

namespace Scool\Assesments\Models;


/**
 * Class ScoolAssesments
 * @package Scool\Assesments\Models
 */
class ScoolAssesments
{

    /**
     * @return array
     */
    public static function factories()
    {
        return [

            SCOOL_ASSESMENT_PATH . '/database/factories/AssesmentsFactory.php' =>
                database_path('/factories/AssesmentsFactory.php'),
            SCOOL_ASSESMENT_PATH . '/database/factories/GradeFactory.php' =>
                database_path('/factories/GradeFactory.php'),
            SCOOL_ASSESMENT_PATH . '/database/factories/ScaleFactory.php' =>
                database_path('/factories/ScaleFactory.php'),


        ];
    }






}