<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public static function getEvents($topLeft, $bottomRight)
    {
        $topLeft = explode(',', $topLeft);
        $bottomRight = explode(',', $bottomRight);

        $result = Event::where('lng', '<=', $topLeft[0])
            ->where('lng', '>=', $topLeft[1])
            ->where('lat', '<=', $bottomRight[0])
            ->where('lat', '>=', $bottomRight[1])
            ->get();

        return $result;
    }

    public static function explodeCoordinates($topLeft = null, $bottomRight = null)
    {
        if ($topLeft != null) {
            $topLeft = explode(',', $topLeft);
        } else {
            $topLeft = array();
        }

        if($bottomRight != null) {
            $bottomRight = explode(',', $bottomRight);
        } else {
            $bottomRight = array();
        }

        return $result = array_merge($topLeft, $bottomRight);

    }
}
