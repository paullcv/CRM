<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'descripcion',
        'deadline',
        'status',
        'user_id',
        'client_id',
    ];

    public const STATUS = ['Abierto', 'En Progreso', 'Cancelado','Completado'];

    public function user(){
        return $this->belongsTo(User::class)->withDefault();
    }

    public function client(){
        return $this->belongsTo(Client::class)->withDefault();
    }

    public function tasks(){
        return $this->hasMany(Task::class);
    }
}
