<?php

namespace App\Http\Livewire\Fd\Rooms;
use Livewire\Component;
use App\Models\{Room,Type};
use App\Traits\Notify;
class CreateRoom extends Component
{
    use Notify;
    public $room_types=[];
    public $room_number, $room_type, $room_floor, $room_description;
    protected $rules = [
        'room_number' => 'required|unique:rooms,number|numeric',
        'room_type' => 'required|exists:types,id',
        'room_floor' => 'required',
        'room_description' => 'nullable',
    ];
    public function mount()
    {
        $this->room_types = Type::all();
    }
    public function render()
    {
        return view('livewire.fd.rooms.create-room');
    }

    public function submitHandler()
    {
        $this->validate();
        $this->createRoom();
    }

    protected function createRoom()
    {
        Room::create([
            'number' => $this->room_number,
            'type_id' => $this->room_type,
            'floor' => $this->room_floor,
            'description' => $this->room_description,
            'status_id' => 2,
        ]);
        $this->reset([
            'room_number',
            'room_type',
            'room_floor',
            'room_description',
        ]);
        $this->emit('loadNewRooms');
        $this->notify([
            'title' => 'Success',
            'message'=> 'Room Created Successfully',
            'type' => 'success'
        ]);
    }


}