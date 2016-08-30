<?php namespace KevinGlobal\Repository\Transformer;

use League\Fractal\TransformerAbstract;
use KevinGlobal\Repository\Contracts\Transformable;

/**
 * Class ModelTransformer
 * @package KevinGlobal\Repository\Transformer
 */
class ModelTransformer extends TransformerAbstract
{
    public function transform(Transformable $model)
    {
        return $model->transform();
    }
}
