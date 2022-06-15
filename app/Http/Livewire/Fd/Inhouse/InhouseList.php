<?php

namespace App\Http\Livewire\Fd\Inhouse;

use Livewire\Component;
use App\Models\{CheckInOut,Bill};

class InhouseList extends Component
{
    public function render()
    {
        return view('livewire.fd.inhouse.inhouse-list',[
            'customers'=>CheckInOut::where('status','checked-in')
                        ->with(['customer','customer.bill','room','room.type','room.status'])
                        ->paginate(10)
        ]);
    }
}