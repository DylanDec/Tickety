<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function title()
    {
        if(auth()->user()->hasRole('Helpdesk Administrator')) {
            return "Helpdesk Administrator";
        } else if (auth()->user()->hasRole('Helpdesk Coordinator')) {
            return "Helpdesk Coordinator";
        } else if (auth()->user()->hasRole('Helpdesk Specialist')) {
            return "Helpdesk Specialist";
        } else if (auth()->user()->hasRole('Helpdesk Team Lead')) {
            return "Helpdesk Team Lead";
        } else if (auth()->user()->hasRole('Helpdesk Supervisor')) {
            return "Helpdesk Supervisor";
        } else if (auth()->user()->hasRole('Helpdesk Senior Support')) {
            return "Helpdesk Senior Support";
        } else if (auth()->user()->hasRole('Helpdesk Support')) {
            return "Helpdesk Support";
        } else if (auth()->user()->hasRole('Helpdesk Senior Analyst')) {
            return "Helpdesk Senior Analyst";
        } else if (auth()->user()->hasRole('Helpdesk Analyst')) {
            return "Helpdesk Analyst";
        } else if (auth()->user()->hasRole('Guest')) {
            return "Guest";
        } else {
            return "Unknown";
        }
    }
}
