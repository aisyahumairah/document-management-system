<div class="row">
    <style>
        /* Additional custom styles */
        .document-container {
            margin-top: 50px;
        }

        .document-item {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #f5f5f5;
            border-radius: 5px;
        }
    </style>
    <?php
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    ?>

        <div class="col-md-6">
            <div class="document-item">
                <strong>Kod:</strong> <?php echo $row['d_code']; ?><br>
                <strong>Tajuk:</strong> <?php echo $row['tajuk']; ?><br>
                <strong>Fail:</strong> <?php echo $row['d_file']; ?><br>
                <strong>Tarikh Keluaran:</strong> <?php echo $row['d_tarikh_keluaran']; ?><br>
                <strong>Pemilik:</strong> <?php echo $row['owner_code']; ?><br>
                <strong>Perkhidmatan:</strong> <?php echo $row['d_perkhidmatan']; ?><br>
                <strong>Pecahan Perkhidmatan:</strong> <?php echo $row['d_pecahan']; ?><br>
                <strong>Kategori:</strong> <?php echo $row['d_kategori']; ?><br>
                <strong>Catatan:</strong> <?php echo $row['d_catatan']; ?><br>
            </div>
        </div>
    <?php
    } else {
        echo "<p class='col-12'>No document found with ID: $id</p>";
    }
    ?>
</div>