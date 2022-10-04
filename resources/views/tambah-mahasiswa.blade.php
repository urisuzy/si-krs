@include('includes.header')
<div class="card mt-3">
    <div class="card-body">
        <form action="/mahasiswa" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="mb-3">
                <label class="form-label">password</label>
                <input type="text" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label class="form-label">jenis_kelamin</label>
                <input type="text" class="form-control" name="jenis_kelamin">
            </div>
            <div class="mb-3">
                <label class="form-label">angkatan</label>
                <input type="text" class="form-control" name="angkatan">
            </div>
            <div class="mb-3">
                <label class="form-label">tgl_lahir</label>
                <input type="text" class="form-control" name="tgl_lahir">
            </div>
            <div class="mb-3">
                <label class="form-label">no_hp</label>
                <input type="text" class="form-control" name="no_hp">
            </div>
            <div class="mb-3">
                <label class="form-label">email</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">program_studi</label>
                <input type="text" class="form-control" name="program_studi">
            </div>
            <div class="mb-3">
                <label class="form-label">fakultas</label>
                <input type="text" class="form-control" name="fakultas">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@include('includes.footer')