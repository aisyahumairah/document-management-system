<div class="row">
  <?php
  if (isset($alert)) {
    echo $alert;
  }
  ?>
  <div class="col-md-8 offset-md-2">
    <h4>Senarai Dokumen</h4>
    <div class="text-right mb-2">
      <a href="../folder-doc/addDoc.php"><button class="btn btn-primary">Tambah Dokumen</button></a>
    </div>
    <?php
    if ($result !== false && $result->num_rows > 0) {
      // Output the table
      echo '<table class="table">';
      echo '<thead>';
      echo '<tr>';
      echo '<th>Kod No</th>';
      echo '<th>Tajuk</th>';
      echo '<th>Catatan</th>';
      echo '<th>Pemilik</th>';
      echo '<th>Fail</th>';
      echo '<th>Tarikh Keluaran</th>';
      // Add additional table headers for other document fields as needed
      echo '<th>Tindakan</th>';
      echo '</tr>';
      echo '</thead>';
      echo '<tbody>';

      // Output each document row
      while ($row = $result->fetch_assoc()) {
        $kodNo = $row['d_code'];
        $tajuk = $row['d_name'];
        $tarikh = $row['d_tarikh_keluaran'];
        $catatan = $row['d_catatan'];
        $pemilik = $row['owner_code'];
        $fileName = $row['d_file'];
        // Retrieve other document fields as needed

        // Generate HTML for the document row
        echo '<tr>';
        echo '<td>' . $kodNo . '</td>';
        echo '<td>' . $tajuk . '</td>';
        echo '<td>' . $catatan . '</td>';
        echo '<td>' . $pemilik . '</td>';
        echo '<td><a href="../file/' . $fileName . '" download>' . $fileName . '</a></td>';
        echo '<td>' . $tarikh . '</td>';
        // Add additional table cells for other document fields as needed
        echo '<td>';
        echo '<a href="../folder-doc/viewDoc.php?id=' . $kodNo . '" class="btn mb-1 btn-rounded btn-outline-primary btn-sm mr-1">View</a>';
        echo '<a href="../folder-Doc/editDoc.php?id=' . $kodNo . '" class="btn mb-1 btn-rounded btn-outline-info btn-sm mr-1">Edit</a>';
        echo '<a href="../folder-Doc/deleteDoc.php?id=' . $kodNo . '" class="btn mb-1 btn-rounded btn-outline-danger btn-sm">Delete</a>';
        echo '</td>';
        echo '</tr>';
      }

      echo '</tbody>';
      echo '</table>';
    } else {
      echo '<p>No documents found.</p>';
    }
    ?>
  </div>
</div>