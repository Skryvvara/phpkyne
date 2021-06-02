<?php

namespace App\Models;

use App\Models\Concerns\UsesUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use UsesUUID;
    use HasFactory;

    protected $table = 'role';

    protected $fillable = [
        'alias',
        'short_alias',
        'description',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_role');
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'role_permission');
    }
}
