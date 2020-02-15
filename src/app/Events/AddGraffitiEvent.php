<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class AddGraffitiEvent implements ShouldBroadcast
{
  use Dispatchable, InteractsWithSockets, SerializesModels;

  public $text;
  public $position_x;
  public $position_y;
  public $room;

  public function __construct($text, $position_x, $position_y, $room)
  {
      $this->text = $text;
      $this->position_x = $position_x;
      $this->position_y = $position_y;
      $this->room = $room;
  }

  public function broadcastOn()
  {
      return ['graffiti-channel'];
  }

  public function broadcastAs()
  {
      return 'add-graffiti-event';
  }
}