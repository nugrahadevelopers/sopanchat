<?php

namespace App\Http\Livewire;

use App\Models\Chat;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class CreateChat extends Component
{
    public $isiPesan;
    public $nomorTujuan;
    public $jenisChat;
    public $chatURL;

    public function render()
    {
        $chats = Chat::all();
        $pesanDosen = Chat::where('slug', 'chat-dosen')->first();
        $pesanHRD = Chat::where('slug', 'chat-hrd')->first();

        if ($this->jenisChat == 'chat-dosen') {
            $this->isiPesan = urldecode($pesanDosen->pesan);
        } else if ($this->jenisChat == 'chat-hrd') {
            $this->isiPesan = urldecode($pesanHRD->pesan);
        }

        return view('livewire.create-chat', [
            'chats' => $chats,
        ]);
    }

    public function buatLink()
    {
        $this->chatURL = "https://api.whatsapp.com/send?phone=" . $this->nomorTujuan . "&text=" . urlencode($this->isiPesan);
        return redirect($this->chatURL);
    }
}
