<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankRequisite extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'checkAccount',
        'corrkAccount',
        'bik',
        'ogrn',
        'okpo',
        'okato'
    ];
}
