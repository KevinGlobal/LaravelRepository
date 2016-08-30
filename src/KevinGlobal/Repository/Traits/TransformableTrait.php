<?php namespace KevinGlobal\Repository\Traits;

/**
 * Class TransformableTrait
 * @package KevinGlobal\Repository\Traits
 */
trait TransformableTrait
{

    /**
     * @return array
     */
    public function transform()
    {
        return $this->toArray();
    }
}
