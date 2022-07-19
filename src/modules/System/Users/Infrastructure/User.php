<?php

namespace Ceiboo\Module\System\Users\Infrastructure;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;

    protected $table = 'sys_users';
    protected $primaryKey = 'id';

}
