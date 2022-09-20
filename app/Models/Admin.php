<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $primaryKey = 'admin_ID';
    protected $table = 'tbl_admin';

    protected $fillable = [
        'lastName',
        'firstName',
        'middleName',
        'suffix',
        'email',
        'username',
        'password',
        'user_role',
    ];
}
