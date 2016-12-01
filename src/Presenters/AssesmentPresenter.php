<?php

namespace Scool\Assesments\Presenters;

use Prettus\Repository\Presenter\FractalPresenter;
use Scool\Assesments\Transformers\AssesmentTransformer;

/**
 * Class AssesmentPresenter
 *
 * @package namespace App\Presenters;
 */
class AssesmentPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     *
     */
    public function getTransformer()
    {
        return new AssesmentTransformer();
    }
}
