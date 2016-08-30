<?php
namespace KevinGlobal\Repository\Providers;

use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{

    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'KevinGlobal\Repository\Events\RepositoryEntityCreated' => [
            'KevinGlobal\Repository\Listeners\CleanCacheRepository'
        ],
        'KevinGlobal\Repository\Events\RepositoryEntityUpdated' => [
            'KevinGlobal\Repository\Listeners\CleanCacheRepository'
        ],
        'KevinGlobal\Repository\Events\RepositoryEntityDeleted' => [
            'KevinGlobal\Repository\Listeners\CleanCacheRepository'
        ]
    ];

    /**
     * Register the application's event listeners.
     *
     * @return void
     */
    public function boot()
    {
        $events = app('events');

        foreach ($this->listen as $event => $listeners) {
            foreach ($listeners as $listener) {
                $events->listen($event, $listener);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function register()
    {
        //
    }

    /**
     * Get the events and handlers.
     *
     * @return array
     */
    public function listens()
    {
        return $this->listen;
    }
}
