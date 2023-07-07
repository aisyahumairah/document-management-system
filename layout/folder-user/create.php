<div class="row">
  <div class="col-md-6 offset-md-3">
    <form action="../folder-user/insertUser.php" method="post">
      <div class="form-group">
        <label for="staff-id">Staff ID</label>
        <input type="number" class="form-control" id="staff-id" placeholder="Enter Staff ID" name="s_id" required>
      </div>
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="Enter Nama" name="s_name" required>
      </div>
      <div class="form-group">
        <label for="ic-no">IC No.</label>
        <input type="number" class="form-control" id="ic-no" placeholder="Enter IC No." name="s_ic" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="s_email" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter Password" name="s_password" required>
      </div>
      <div class="form-group">
        <label for="jawatan">Jawatan</label>
        <select class="form-control" id="jawatan" name="s_jawatan" required>
          <option value="">Select Jawatan</option>
          <?php
          if ($jawat->num_rows > 0) {
            // Process tb_kategori data
            while ($row = $jawat->fetch_assoc()) {

              echo '<option value="' . $row['j_id'] . '">' . $row['j_name'] . '</option>';
            }
          }
          ?>
          <!-- Add more options as needed -->
        </select>
      </div>
      <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <select class="form-control" id="jabatan" name="s_dept" required>
          <option value="">Select Jabatan</option>
          <?php
          if ($jab->num_rows > 0) {
            // Process tb_kategori data
            while ($row = $jab->fetch_assoc()) {

              echo '<option value="' . $row['dept_code'] . '">' . $row['dept_name'] . '</option>';
            }
          }
          ?>
          <!-- Add more options as needed -->
        </select>
      </div>
      <div class="form-group">
        <label for="peranan">Peranan</label>
        <select class="form-control" id="peranan" name="role" required>
          <option value="">Select Peranan</option>
          <option value="Pengguna">Pengguna</option>
          <option value="Admin">Admin</option>
          <option value="Super Admin">Super Admin</option>
          <!-- Add more options as needed -->
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Register</button>
    </form>
  </div>
</div>