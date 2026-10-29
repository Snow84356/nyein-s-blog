<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // ဤနေရာတွင် ထည့်သွင်းခွင့်ပြုမည့် Column များကို သတ်မှတ်ပေးပါ
    protected $fillable = [
        'title',
        'body',
        'image',
    ];
}
