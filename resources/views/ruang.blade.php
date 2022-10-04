@include('includes.header')
<div class="mt-3">
    <a href="/tambah-ruang" class="btn btn-primary float-end">Tambah</a>
    <h2>Ruang</h2>
</div>
<div class="card mt-3">
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Kode</th>
                    <th scope="col">Nomor</th>
                    <th scope="col">Gedung</th>
                    <th scope="col">Act</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ruang as $siswa)
                <tr>
                    <th scope="row">{{$siswa->gedung}}-{{$siswa->nomor}}</th>
                    <td>{{$siswa->nomor}}</td>
                    <td>{{$siswa->gedung}}</td>
                    <td><a href="/ruang/{{$siswa->id}}" class="btn btn-danger btn-sm">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('includes.footer')