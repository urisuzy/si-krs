@include('includes.header')
<div class="mt-3">
    <a href="/tambah-dosen" class="btn btn-primary float-end">Tambah</a>
    <h2>Dosen</h2>
</div>
<div class="card mt-3">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Nim</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Fakultas</th>
                    <th scope="col">Pendidikan</th>
                    <th scope="col">Act</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dosen as $siswa)
                <tr>
                    <th scope="row">{{$siswa->id}}</th>
                    <td>{{$siswa->nama}}</td>
                    <td>{{$siswa->jenis_kelamin}}</td>
                    <td>{{$siswa->program_studi}}</td>
                    <td>{{$siswa->fakultas}}</td>
                    <td>{{$siswa->pendidikan}}</td>
                    <td><a href="/dosen/{{$siswa->id}}" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('includes.footer')