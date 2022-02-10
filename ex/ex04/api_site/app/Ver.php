<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ver extends Model
{
    //モデルと関連しているテーブルを定義
    protected $table = 'ver';
    protected $dates = ['created_at', 'updated_at'];
    // 複数代入する属性
    protected $fillable = ['id', 'version', 'min_version'];
}
