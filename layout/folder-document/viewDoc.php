<div class="row">
    <style>
        /* Additional custom styles */
        .document-container {
            margin-top: 50px;
        }

        .document-card {
            margin-bottom: 20px;
        }

        .document-card-header {
            background-color: #f5f5f5;
            padding: 15px;
            border-bottom: 1px solid #ddd;
            border-top-left-radius: 3px;
            border-top-right-radius: 3px;
        }

        .document-card-body {
            padding: 15px;
            background-color: #fff;
            border-bottom-left-radius: 3px;
            border-bottom-right-radius: 3px;
        }

        .document-card-body p {
            margin-bottom: 10px;
        }
    </style>
    <?php
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    ?>
        <div class="container-fluid document-container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="mt-3">Maklumat Dokumen : <?php echo $row['d_code']; ?></h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card document-card">
                                <div class="card-body document-card-body">
                                    <p><strong>Kod:</strong> <?php echo $row['d_code']; ?></p>
                                    <p><strong>Tajuk:</strong> <?php echo $row['d_name']; ?></p>
                                    <p><strong>Fail:</strong> <a href="../file/<?php echo $row['d_file'];  ?>"><?php echo $row['d_file']; ?></a></p>
                                    <p><strong>Tarikh Keluaran:</strong> <?php echo $row['d_tarikh_keluaran']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card document-card">
                                <div class="card-body document-card-body">
                                    <p><strong>Pemilik:</strong> <?php echo $row['owner_code']; ?></p>
                                    <p><strong>Perkhidmatan:</strong><?php echo $row['d_perkhidmatan']; ?></p>
                                    <p><strong>Pecahan Perkhidmatan:</strong> <?php echo $row['d_pecahan']; ?></p>
                                    <p><strong>Kategori:</strong> <?php echo $row['d_kategori']; ?></p>
                                    <p><strong>Catatan:</strong> <?php echo $row['d_catatan']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    } else {
        echo "<p class='col-12'>Tiada dokumen dijumpai:" .  $row['d_code'] . "</p>";
    }
    ?>
</div>