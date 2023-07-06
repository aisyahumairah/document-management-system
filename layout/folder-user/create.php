<div class="row">
  <div class="col-md-6 offset-md-3">
    <form action="../../function/user/createUser.php" method="post">
      <div class="form-group">
        <label for="staff-id">Staff ID</label>
        <input type="number" class="form-control" id="staff-id" placeholder="Enter Staff ID" required>
      </div>
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="Enter Nama" required>
      </div>
      <div class="form-group">
        <label for="ic-no">IC No.</label>
        <input type="number" class="form-control" id="ic-no" placeholder="Enter IC No." required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Enter Email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter Password" required>
      </div>
      <div class="form-group">
        <label for="jawatan">Jawatan</label>
        <select class="form-control" id="jawatan" required>
          <option value="">Select Jawatan</option>
          <option value="jawatan1">Jawatan 1</option>
          <option value="jawatan2">Jawatan 2</option>
          <option value="jawatan3">Jawatan 3</option>
          <!-- Add more options as needed -->
        </select>
      </div>
      <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <select class="form-control" id="jabatan" required>
          <option value="">Select Jabatan</option>
          <option value="jabatan1">Jabatan 1</option>
          <option value="jabatan2">Jabatan 2</option>
          <option value="jabatan3">Jabatan 3</option>
          <!-- Add more options as needed -->
        </select>
      </div>
      <div class="form-group">
        <label for="peranan">Peranan</label>
        <select class="form-control" id="peranan" required>
          <option value="">Select Peranan</option>
          <option value="peranan1">Pengguna</option>
          <option value="peranan2">Admin</option>
          <option value="peranan3">Super Admin</option>
          <!-- Add more options as needed -->
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
  </div>
</div>