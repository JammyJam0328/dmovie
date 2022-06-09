<?php

namespace App\Http\Livewire\Fd\Rooms;

use Livewire\Component;
use App\Traits\Notify;

class RoomList extends Component
{
    use Notify;
    public function render()
    {
        return view('livewire.fd.rooms.room-list');
    }
    public function notif()
    {
        $this->notify([
            'title' => 'Success',
            'message'=> 'Room Created Successfully',
            'type' => 'success'
        ]);
    }
}