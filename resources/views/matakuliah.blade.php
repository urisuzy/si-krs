@include('includes.header')
<div class="mt-3">
    <a href="/tambah-matakuliah" class="btn btn-primary float-end">Tambah</a>
    <h2>Mata Kuliah</h2>
</div>
<div class="card mt-3">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Kode</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">SKS</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Dosen</th>
                    <th scope="col">Act</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($matakuliah as $siswa)
                <tr>
                    <th scope="row">{{$siswa->kode}}</th>
                    <td>{{$siswa->nama}}</td>
                    <td>{{$siswa->sks}}</td>
                    <td>{{$siswa->jenis}}</td>
                    <td>{{$siswa->dosen->nama}}</td>
                    <td><a href="/matakuliah/{{$siswa->id}}" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('includes.footer')