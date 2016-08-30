<?php
namespace KevinGlobal\Repository\Contracts;

/**
 * Interface Presentable
 * @package KevinGlobal\Repository\Contracts
 */
interface Presentable
{
    /**
     * @param PresenterInterface $presenter
     *
     * @return mixed
     */
    public function setPresenter(PresenterInterface $presenter);

    /**
     * @return mixed
     */
    public function presenter();
}
