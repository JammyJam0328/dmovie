<?php

namespace App\Http\Livewire\Customer;

use App\Models\Customer;
use App\Models\CheckInOut;
use App\Models\Bill;
use App\Models\Room;
use App\Models\Type;
use App\Models\Rate;
use GuzzleHttp\Promise\Create;
use Livewire\Component;
use Carbon\Carbon;

class CheckinForm extends Component
{
    public $infos = [];
    public $room;
    public $floor;
    public $price;
    public $fullname;

    public function mount()
    {
        // dd($this->infos);
        $this->room = Room::where('id', $this->infos['room_id'])->first();
        // dd($this->room );
        $this->room = $this->room;
        //   dd($this->room);
        $this->price = Rate::where('type_id', $this->room->type_id)->first();
    }


    public function render()
    {
        return view('livewire.customer.checkin-form');
    }

    public function confirmCheckin()
    {

        $transaction = CheckInOut::whereDate('created_at', Carbon::today())->count();
        $transaction += 1;
        $transaction_code = Carbon::today()->format('Ymd') . '' . $transaction;
        $transaction_code *= 1000;
        $transaction_code += $transaction;

        // dd($transaction_code);

        $customer = Customer::create([
            'full_name' => $this->fullname,
            'selected_hours' => $this->infos['hrs'],
        ]);



        $checkin = CheckInOut::create([
            'customer_id' => $customer->id,
            'qr_code' => $transaction_code,
            'room_id' => $this->infos['room_id'],
            'hours' => $this->infos['hrs'],
            'check_in_date' => Carbon::today(),
        ]);

        $bill = Bill::create([
            'customer_id' => $customer->id,
            'deposit' => 200,
            'room_amount' => $this->price->price,

        ]);

    redirect()->route('qr', ["id"=>$checkin->id]);
    }
}
