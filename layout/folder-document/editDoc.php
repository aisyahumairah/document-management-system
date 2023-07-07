<div class="row">
    <div class="col-md-6 offset-md-3">
        <h4>Kemaskini Dokumen</h4>
        <form action="../folder-doc/updateDoc.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="kod">Kod</label>
                        <input type="text" class="form-control" id="d_code" name="d_code" readonly value=" <?php echo $doc['d_code']; ?> ">
                    </div>
                    <div class="form-group">
                        <label for="tajuk">Tajuk</label>
                        <input type="text" class="form-control" id="d_name" name="d_name" value=" <?php echo $doc['d_name']; ?> " required>
                    </div>
                    <div class="form-group">
                        <label for="fail">Fail</label>
                        <input type="file" class="form-control-file" id="d_file" name="d_file" required>
                    </div>
                    <div class="form-group">
                        <label for="tarikh-keluaran">Tarikh Keluaran</label>
                        <input type="date" class="form-control" id="d_tarikh_keluaran" name="d_tarikh_keluaran" value="<?php echo $doc['d_tarikh_keluaran']; ?>" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="pemilik">Pemilik</label>
                        <select class="form-control" id="owner_code" name="owner_code" required>
                            <option value="">Select Pemilik</option>
                            <?php
                            if ($pemilikResult->num_rows > 0) {
                                // Process tb_pemilik data
                                while ($row = $pemilikResult->fetch_assoc()) {
                                    // Access row data
                                    $pemilikId = $row["dept_code"];
                                    $pemilikName = $row["dept_name"];

                                    if ($pemilikId == $doc['owner_code']) {
                                        echo '<option value="' . $pemilikId . '" selected>' . $pemilikName . '</option>';
                                    } else {
                                        echo '<option value="' . $pemilikId . ' ">' . $pemilikName . '</option>';
                                    }
                                }
                            }
                            ?>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="perkhidmatan">Perkhidmatan</label>
                        <select class="form-control" id="d_perkhidmatan" name="d_perkhidmatan" required>
                            <option value="">Select Perkhidmatan</option>
                            <?php
                            if ($perkhidmatanResult->num_rows > 0) {
                                // Process tb_perkhidmatan data
                                while ($row = $perkhidmatanResult->fetch_assoc()) {
                                    // Access row data
                                    $perkhidmatanId = $row["p_id"];
                                    $perkhidmatanName = $row["p_name"];

                                    if ($perkhidmatanId == $doc['d_perkhidmatan']) {
                                        echo '<option value="' . $perkhidmatanId . '" selected>' . $perkhidmatanName . '</option>';
                                    } else {
                                        echo '<option value="' . $perkhidmatanId . '">' . $perkhidmatanName . '</option>';
                                    }
                                }
                            }
                            ?>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pecahan-perkhidmatan">Pecahan Perkhidmatan</label>
                        <select class="form-control" id="d_pecahan" name="d_pecahan" required>
                            <option value="">Select Pecahan Perkhidmatan</option>
                            <?php
                            if ($pecahanResult->num_rows > 0) {
                                // Process tb_pecahan data
                                while ($row = $pecahanResult->fetch_assoc()) {
                                    // Access row data
                                    $pecahanId = $row["pecahan_id"];
                                    $pecahanName = $row["pecahan_name"];

                                    if ($pecahanId == $doc['d_pecahan']) {
                                        echo '<option value="' . $pecahanId . '" selected>' . $pecahanName . '</option>';
                                    } else {
                                        echo '<option value="' . $pecahanId . '">' . $pecahanName . '</option>';
                                    }
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select class="form-control" id="d_kategori" name="d_kategori" required>
                            <option value="">Select Kategori</option>
                            <?php
                            if ($kategoriResult->num_rows > 0) {
                                // Process tb_kategori data
                                while ($row = $kategoriResult->fetch_assoc()) {
                                    // Access row data
                                    $kategoriId = $row["k_code"];
                                    $kategoriName = $row["k_name"];

                                    if ($kategoriId == $doc['d_kategori']) {
                                        echo '<option value="' . $kategoriId . '" selected>' . $kategoriName . '</option>';
                                    } else {
                                        echo '<option value="' . $kategoriId . '">' . $kategoriName . '</option>';
                                    }
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="catatan">Catatan</label>
                        <textarea class="form-control" id="d_catatan" name="d_catatan" rows="3"><?php echo $doc['d_catatan'] ?></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Kemaskini</button>
        </form>
    </div>
</div>