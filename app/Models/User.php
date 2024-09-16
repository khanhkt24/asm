<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const TYPE_ADMIN = 'admin';

    const TYPE_MEMBER = 'member';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class,'user_role');
    }
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function isAdmin(){
        return $this->type == self::TYPE_ADMIN;
    }

    public function isMember(){
        return $this->type == self::TYPE_MEMBER;
    }

    public function getUser(){

        $news = DB::table('users')
            ->get();
        return $news;

    }

    function hasPermission($permission) {
        //Cái này là kiểm tra user đó có những vai trò nào
        //Từ những vai trò thì kiểm tra tiếp xem nó có những quyền nào
        foreach ($this->roles as $role) {
            if($role->permissions->where('Slug','=',$permission)->count() > 0) {
                return true;
            }
        }
        return false;
    }
}
