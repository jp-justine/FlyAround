<?php
namespace App\Services;

class GeoService
{
  public function calcDistance(
       float $latitudeOrigin,
       float $longitudeOrigin,
       float $latitudeDestination,
       float $longitudeDestination
  ) : float
  {
    $earthRadius = 6372.795477598;

    $latitude = ($latitudeOrigin - $latitudeDestination);
    $longitude = ($longitudeOrigin - $longitudeDestination);

    $alpha = $latitude/2;
    $beta = $longitude/2;

    $a = sin(deg2rad($alpha)) * sin(deg2rad($alpha)) + cos(deg2rad($latitudeOrigin)) * cos(deg2rad($latitudeDestination)) * sin(deg2rad($beta)) * sin(deg2rad($beta)) ;
    $c = asin(min(1, sqrt($a)));
    $distance = 2*$earthRadius * $c;
    $distance = round(($distance /1.6), 4);

    return $distance;
  }
}