<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use DB;

class EventsController extends Controller
{
    public function addEvent()
    {
        //$events = new Events;


        $topLeft = Event::explodeCoordinates($_GET['top_left']);
        $bottomRight = Event::explodeCoordinates($_GET['bottom_right']);

        $title = $_GET['title'];
        $description = $_GET['description'];
        $lat = $topLeft[0] . ', ' . $topLeft[1];
        $lng = $bottomRight[0] . ', ' . $bottomRight[1];


        DB::table('event')->insert([
             'title' => $title,
             'description' => $description,
             'lng' => $lng,
             'lat' => $lat
        ]);

        //Event::explodeCoordinates($topLeft, $bottomRight);

    }
}
