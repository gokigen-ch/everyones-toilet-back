<?php

namespace App\Http\Controllers;

use App\Graffiti;
use Illuminate\Http\Request;

class GraffitiController extends Controller
{
    /**
     * 落書きデータの読み出し
     *
     * @return \Illuminate\Http\Response
     */
    public function read()
    {
        // TODO: 削除済みデータを省いて読み出せるようにしたい。
        return \App\Graffiti::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // TODO: バリデーションする
        \App\Graffiti::create(
            [
                'position_x' => $request->input('position_x'),
                'position_y' => $request->input('position_y'),
                'text' => $request->input('text')
            ]
        );
    }
}
