<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paslon extends Model
{

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'namaketua', 'namawakilketua', 'angkatanketua', 'angkatanwakilketua', 'image', 'nomerurut',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'remember_token',
  ];
}
