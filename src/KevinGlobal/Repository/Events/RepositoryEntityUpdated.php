<?php
namespace KevinGlobal\Repository\Events;

/**
 * Class RepositoryEntityUpdated
 * @package KevinGlobal\Repository\Events
 */
class RepositoryEntityUpdated extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "updated";
}
