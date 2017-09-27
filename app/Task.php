<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  public function isComplete() {
    return false;
  }

  // public static function inComplete()
  // {
  //   return static::where('completed', false)->get();
  // }
  public function scopeIncomplete($query)
  {
    return $query->where('completed', false);
  }
}
