<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use NinjaPortal\Portal\Translatable\HasTranslations;

class Faq extends Model
{
    use HasTranslations;
    protected $fillable = ['slug'];

    public array $translated_attributes = ['question', 'answer'];

}
