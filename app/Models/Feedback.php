<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
// Разрешаем редактировать эти поля через админку
       protected $fillable = [
           'email',
           'description',
       ];
}
