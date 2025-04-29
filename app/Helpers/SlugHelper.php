<?php 

use Illuminate\Support\Str;

if (!function_exists('slugify')) {
  function slugify($string) {
    return Str::slug($string);
  }
}
