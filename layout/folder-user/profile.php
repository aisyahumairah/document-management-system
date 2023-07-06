<div class="row">
  <div class="col-md-6 offset-md-3">
    <div class="profile-view">
      <h4>Profile</h4>
      <div class="form-group">
        <label for="staff-id">Staff ID</label>
        <input type="text" class="form-control" id="staff-id" value="<?php echo $user['s_id']; ?>" readonly>
      </div>
      <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" value="<?php echo $user['s_name']; ?>" readonly>
      </div>
      <div class="form-group">
        <label for="ic-no">IC No.</label>
        <input type="text" class="form-control" id="ic-no" value="<?php echo $user['s_ic']; ?>" readonly>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" value="<?php echo $user['s_email']; ?>" readonly>
      </div>
      <div class="form-group">
        <label for="jawatan">Jawatan</label>
        <input type="text" class="form-control" id="jawatan" value="<?php echo $user['s_jawatan']; ?>" readonly>
      </div>
      <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <input type="text" class="form-control" id="jabatan" value="<?php echo $user['s_dept']; ?>" readonly>
      </div>
    </div>
  </div>
</div>
