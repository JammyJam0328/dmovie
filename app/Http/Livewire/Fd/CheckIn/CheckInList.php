<?php

namespace App\Http\Livewire\Fd\CheckIn;

use Livewire\Component;
use App\Models\{CheckInOut,Bill};
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

    public function payAll($checkInId)
    {
        $checkIn = CheckInOut::where('id',$checkInId)->first();
        $checkIn->update([
            'status'=>'checked-in',
        ]);
        $bill = Bill::where('customer_id',$checkIn->customer_id)->first();
        $bill->update([
            'given_amount'=>$bill->room_amount + 200,
            'paid_at'=> now(),
        ]);

        $this->dispatchBrowserEvent('close-payment');
    }

    public function payDeposit($checkInId)
    {
        $checkIn = CheckInOut::where('id',$checkInId)->first();
        $checkIn->update([
            'status'=>'checked-in',
        ]);
        $bill = Bill::where('customer_id',$checkIn->customer_id)->first();
        $bill->update([
            'given_amount'=>200,
        ]);
        $this->dispatchBrowserEvent('close-payment');

    }
}