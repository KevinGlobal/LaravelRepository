<?php
namespace KevinGlobal\Repository\Contracts;

/**
 * Interface CriteriaInterface
 * @package KevinGlobal\Repository\Contracts
 */
interface CriteriaInterface
{
    /**
     * Apply criteria in query repository
     *
     * @param                     $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository);
}
