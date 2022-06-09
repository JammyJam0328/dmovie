<?php
namespace App\Traits;
trait Notify {
    public function notify($details=[]) {
        $this->dispatchBrowserEvent('notify', [
            'type' => $details['type'],
            'title' => $details['title'],
            'message' => $details['message']
        ]);
    }
}