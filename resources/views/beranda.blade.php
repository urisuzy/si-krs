@include('includes.header-empty')

<div class="card mt-3">
  <div class="card-header">
    Login
  </div>
  <div class="card-body card-primary">
    <h5 class="card-title">Pilih Role</h5>
    <p class="card-text">Anda akan masuk ke halaman sesuai dengan role yang dipilih</p>
    <div class="d-grid gap-2">
      <a href="/role?role=admin" class="btn btn-primary" type="button">Admin</a>
    </div>
  </div>
</div>
@include('includes.footer')