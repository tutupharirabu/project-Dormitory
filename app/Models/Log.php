<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Log extends Model
{
    use HasFactory;
    protected $table = 'logs';
    protected $primaryKey = 'id_logs';
    protected $fillable = ['id_users', 'waktuTap'];

    public function users(){
        return $this->belongsTo(User::class, 'id_users', 'id_users');
    }
}
