<?php
namespace KevinGlobal\Repository\Contracts;

/**
 * Interface PresenterInterface
 * @package KevinGlobal\Repository\Contracts
 */
interface PresenterInterface
{
    /**
     * Prepare data to present
     *
     * @param $data
     *
     * @return mixed
     */
    public function present($data);
}
