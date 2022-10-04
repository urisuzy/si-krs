@include('includes.header')
<div class="card mt-3">
    <div class="card-body">
        <form action="/ruang" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Gedung</label>
                <input type="text" class="form-control" name="gedung">
            </div>
            <div class="mb-3">
                <label class="form-label">Nomor</label>
                <input type="text" class="form-control" name="nomor">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@include('includes.footer')