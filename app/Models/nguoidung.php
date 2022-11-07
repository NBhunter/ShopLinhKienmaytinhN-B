<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;
    

class nguoidung extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    protected $table = 'users';
	
	protected $fillable = [
		'id','name', 'username', 'email', 'password', 'phanquyen','create_at','update_at','status',
	];
	
	protected $hidden = [
		'password', 'remember_token',
	];
	
	protected $casts = [
		'email_verified_at' => 'datetime',
	];
	
	public function DonHang()
	{
		return $this->hasMany('App\Models\DonHang', 'nguoidung_id', 'id');
	}
	
	
}
