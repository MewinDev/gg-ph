<?php

use Carbon\Carbon;

if (!function_exists('dateFormat')) {
  function dateFormat($date, $format = 'F d, Y') {
    return $date ? Carbon::parse($date)->format($format) : 'N/A' ;
  }
}