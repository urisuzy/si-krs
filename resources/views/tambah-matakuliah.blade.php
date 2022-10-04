@include('includes.header')
<div class="card mt-3">
    <div class="card-body">
        <form action="/matakuliah" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Dosen ID</label>
                <input type="text" class="form-control" name="dosen_id">
            </div>
            <div class="mb-3">
                <label class="form-label">kode</label>
                <input type="text" class="form-control" name="kode">
            </div>
            <div class="mb-3">
                <label class="form-label">nama</label>
                <input type="text" class="form-control" name="nama">
            </div>
            <div class="mb-3">
                <label class="form-label">sks</label>
                <input type="text" class="form-control" name="sks">
            </div>
            <div class="mb-3">
                <label class="form-label">jenis</label>
                <input type="text" class="form-control" name="jenis">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@include('includes.footer')