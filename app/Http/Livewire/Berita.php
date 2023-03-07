<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Komentar;

class Berita extends Component
{
    public $txtkomentar;
    public function render()
    {
        return view('livewire.berita', [
            'isi_komentar' => Komentar::orderBy('created_at', 'desc')->get()
        ]);
    }
    public function simpan()
    {
        // dd('Method Berhasil');
        $simpan = new Komentar();
        $simpan ->isi_komentar = $this->txtkomentar;
        $simpan->save();
        $this->reset();
    }
    public function hapus($idhapus)
    {
        $hapus = Komentar::findorFail($idhapus);
        $hapus->delete();
        $this->reset();
    }
}
