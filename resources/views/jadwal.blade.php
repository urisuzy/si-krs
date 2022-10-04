@include('includes.header')
<div class="mt-3">
    <h2>Jadwal Kuliah</h2>
</div>
<div class="card mt-3">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Matakuliah</th>
                    <th scope="col">Jadwal Kuliah</th>
                    <th scope="col">Ruang</th>
                    <th scope="col">Dosen Pengampu</th>
                    <th scope="col">Peserta</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jadwals as $jadwal)
                <tr>
                    <th scope="row">{{$jadwal->matakuliah->nama}}</th>
                    <td>{{$jadwal->hari}} {{$jadwal->mulai}}-{{$jadwal->selesai}}</td>
                    <td>{{$jadwal->ruang->gedung}}-{{$jadwal->ruang->nomor}}</td>
                    <td>{{$jadwal->dosen->nama}}</td>
                    <td>{{\App\Helpers\Helper::countPeserta($jadwal->matakuliah_id)}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('includes.footer')