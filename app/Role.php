<?php

namespace App;

use App\Permission;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $guarded = [];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }


    public function assign(Permission $permission)
    {
        return $this->permissions()->save($permission);
    }
}
