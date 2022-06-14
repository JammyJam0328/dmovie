<?php

namespace App\Http\Livewire\Fd\CheckIn;

use Livewire\Component;
use App\Models\CheckInOut;
use Livewire\WithPagination;
class CheckInList extends Component
{
    use WithPagination;
    public $qr_code='';
    public function render()
    {
        return view('livewire.fd.check-in.check-in-list',[
            'customers'=>CheckInOut::where('qr_code','like','%'.$this->qr_code.'%')
                        ->with(['customer','customer.bill','room','room.type','room.status'])
                        ->paginate(10)
        ]);
    }
}