<?php

namespace App\Http\Controllers;

use App\Graffiti;
use Illuminate\Http\Request;
use App\Events\AddGraffitiEvent;

class GraffitiController extends Controller
{
    /**
     * 落書きデータの読み出し
     *
     * @return \Illuminate\Http\Response
     */
    public function read(Request $request, int $room)
    {
        // TODO: 削除済みデータを省いて読み出せるようにしたい。
        return \App\Graffiti::where('room', $room)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, int $room)
    {
        // TODO: バリデーションする

        event(new AddGraffitiEvent($request->input('text'), $request->input('position_x'), $request->input('position_y'), $room));

        \App\Graffiti::create(
            [
                'position_x' => $request->input('position_x'),
                'position_y' => $request->input('position_y'),
                'room' => $room,
                'text' => $request->input('text')
            ]
        );
    }
}
