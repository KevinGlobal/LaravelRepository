<?php
namespace KevinGlobal\Repository\Events;

/**
 * Class RepositoryEntityDeleted
 * @package KevinGlobal\Repository\Events
 */
class RepositoryEntityDeleted extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "deleted";
}
