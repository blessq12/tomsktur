<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nameShort',
        'owner',
        'tel',
        'inn',
        'kpp',
        'ogrn',
        'addressUR',
        'addressFC',
        'basis'
    ];
    public function bankRequisite(){
        return $this->hasOne(BankRequisite::class);
    }
}
