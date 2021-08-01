<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // fillable 入れるものフィルター対象(入れないものの設定もできるguarded)どっちかないといけない。
    protected $fillable = [
        'title',
        'content',
    ];
}
