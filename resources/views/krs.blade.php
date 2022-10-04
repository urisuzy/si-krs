@include('includes.header')
<div class="mt-3">
    <h2>Ambil KRS</h2>
</div>
<div class="card mt-3">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">SKS</th>
                    <th scope="col">Dosen</th>
                    <th scope="col">Ruang</th>
                    <th scope="col">Act</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($matakuliah as $siswa)
                <?php $data = \App\Helpers\Helper::cacheKRS($siswa->id); ?>
                <?php $available = \App\Helpers\Helper::checkKrsAvailable($siswa->id, \Cookie::get('id')); ?>
                <tr>
                    <th scope="row">{{$siswa->nama}}</th>
                    <td>{{$data['hari']}} {{$data['jam'][0]}} - {{$data['jam'][1]}}</td>
                    <td>{{$siswa->sks}}</td>
                    <td>{{$siswa->dosen->nama}}</td>
                    <td>{{$data['ruang']->gedung}}-{{$data['ruang']->nomor}}</td>
                    <td>
                        @if($available)
                        <a href="/krs/ambil?user_id={{Cookie::get('id')}}&matakuliah_id={{$siswa->id}}&ruang_id={{$data['ruang']->id}}" class="btn btn-primary btn-sm">Ambil</a>
                        @else
                        <span class="text-success">Krs sudah diambil</span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('includes.footer')