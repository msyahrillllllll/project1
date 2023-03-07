<div>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card">
                    <div class="card-header">
                        Status
                    </div>
                    <div class="card-body">
                      Komentar
                        <br />
                        <input type="text" class="form-control" wire:model='txtkomentar' />
                        <br />
                        <input type="submit" class="btn btn-primary" value="Kirim" wire:click='simpan' />
                    </div>
                </div>
            </div>
            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                       Kiriman Saya
                    </div>
                    <div class="card-body">
                        @foreach($isi_komentar as $item)
                        Saya pada {{ Carbon\Carbon::parse($item->created_at)->isoFormat('dddd, D MMMM Y') }} 
                        Menulis :<br />
                        <p>
                            <i>
                                {{ $item->isi_komentar }}
                            </i>
                            <button class="btn btn-danger" wire:click="hapus('{{ $item->id }}')">Hapus</button>
                        </p>
                        <hr />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
