<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\CashIn;
use App\Models\CashOut;
use Carbon\Carbon;

class User extends \TCG\Voyager\Models\User
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function cashIns(){
        
        return $this->hasMany(CashIn::class,"user_id");
    }
    public function cashOuts(){
        return $this->hasMany(CashOut::class,"user_id");
    }

    public function getCashIns(){
        return $this->cashIns()->whereDate('created_at', Carbon::today())->get();
    }

    public function getCashOuts(){
        return $this->cashOuts()->get();
    }
}
