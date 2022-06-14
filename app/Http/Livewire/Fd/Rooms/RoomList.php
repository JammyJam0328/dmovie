<?php

namespace App\Http\Livewire\Fd\Rooms;

use Livewire\Component;
use App\Traits\Notify;
use App\Models\Room;
use Livewire\WithPagination;
class RoomList extends Component
{
    use Notify, WithPagination;
    protected $listeners = ['loadNewRooms' => '$refresh'];
    public $status_filter='';
    public function render()
    {
        return view('livewire.fd.rooms.room-list',[
            'rooms' => Room::where('status_id','like','%'.$this->status_filter.'%')->with(['type','status'])->paginate(10)
        ]);
    }
}