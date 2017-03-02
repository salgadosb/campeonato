<?php

namespace App\Providers;

use App\Participante;
use App\Policies\ParticipantePolicy;
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        //'App\Model' => 'App\Policies\ModelPolicy',
        Participante::class => ParticipantePolicy::class // REGLA PARA RUTAS DE ACCESO
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $gate->before(function ($user) {

            if($user->isAdmin()){

                return true;

            }

        });
        $this->registerPolicies($gate);

        // REGLA PARA RUTAS DE ACCESO
        // $gate->define('update-post', 'App\Policies\ParticipantePolicy@update');
    }
}
