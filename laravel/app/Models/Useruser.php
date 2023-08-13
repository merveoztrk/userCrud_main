<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Useruser extends Model
{
    use HasFactory;

    protected $table = 'useruser';

    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
    ];
    //Modelin doldurulabilir alanları

    /* Eloquent(ORM-object relational mapping yapıtaşıdır) modeli Laravel projelerinde veritabanı işlemlerini nesne odaklı bir yaklaşımla yönetmek için kullanılır. Her bir model, veritabanındaki bir tabloyu temsil eder ve bu tabloyla etkileşim kurmak için gerekli araçları sunar.*/
}
