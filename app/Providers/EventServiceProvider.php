<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Відображення події для програми для слухача.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Зареєструйте будь-які події для вашої програми.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Визначте, чи слід автоматично виявляти події та слухачів.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
