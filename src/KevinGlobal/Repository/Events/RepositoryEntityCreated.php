<?php
namespace KevinGlobal\Repository\Events;

/**
 * Class RepositoryEntityCreated
 * @package KevinGlobal\Repository\Events
 */
class RepositoryEntityCreated extends RepositoryEventBase
{
    /**
     * @var string
     */
    protected $action = "created";
}
