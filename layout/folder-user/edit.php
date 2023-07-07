<div class="row">
    <div class="col-md-6 offset-md-3">
        <form action="../folder-user/update.php" method="post">
            <div class="form-group">
                <label for="staff-id">Staff ID</label>
                <input type="number" class="form-control" id="staff-id" placeholder="Enter Staff ID" name="s_id" value="<?php echo $user['s_id'] ?>" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Enter Nama" name="s_name" value="<?php echo $user['s_name'] ?>" required>
            </div>
            <div class="form-group">
                <label for="ic-no">IC No.</label>
                <input type="number" class="form-control" id="ic-no" placeholder="Enter IC No." name="s_ic" value="<?php echo $user['s_ic'] ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Email" name="s_email" value="<?php echo $user['s_email'] ?>" required>
            </div>
            <div class="form-group">
                <label for="jawatan">Jawatan</label>
                <select class="form-control" id="jawatan" name="s_jawatan" required>
                    <option value="">Select Jawatan</option>
                    <?php
                    if ($jawat->num_rows > 0) {
                        // Process tb_kategori data
                        while ($row = $jawat->fetch_assoc()) {

                            if($row['j_id'] == $user['s_jawatan']){
                                echo '<option value="' . $row['j_id'] . '" selected>' . $row['j_name'] . '</option>';
                            }
                            else {
                                echo '<option value="' . $row['j_id'] . '">' . $row['j_name'] . '</option>';
                            }
                            
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

                            if($row['dept_code'] == $user['s_dept']){
                                echo '<option value="' . $row['dept_code'] . '" selected>' . $row['dept_name'] . '</option>';
                            }
                            else {
                                echo '<option value="' . $row['dept_code'] . '">' . $row['dept_name'] . '</option>';
                            }
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
                    <option value="Pengguna"
                        <?php
                            if($user['role'] == "Pengguna"){
                                echo "selected";
                            }
                        ?>
                    >Pengguna</option>
                    <option value="Admin"
                        <?php
                            if($user['role'] == "Admin"){
                                echo "selected";
                            }
                        ?>
                    >Admin</option>
                    <option value="Super Admin"
                        <?php
                            if($user['role'] == "Super Admin"){
                                echo "selected";
                            }
                        ?>
                    >Super Admin</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Kemaskini</button>
        </form>
    </div>
</div>