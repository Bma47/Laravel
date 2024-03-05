<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopicController extends Controller
{
    private static function getData() {
        return [
            ['id' => 1, 'name' => 'Bashir', 'from' => 'syria'],
            ['id' => 2, 'name' => 'Bashir', 'from' => 'syria'],
            ['id' => 3, 'name' => 'Bashir', 'from' => 'syria'],
        ];
    }




    public function index(){
        return view('topic.topic',[
            'topic' =>self::getData()

        ]);
    }

    public function show($id)
    {
    $topic = self::getData();
    $index = array_search($id, array_column($topic, 'id'));
    return view('topic.show',[
    'topic' => $topic[$index]
        ]);
    }
}

