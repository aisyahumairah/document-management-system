<div class="col-md-12">
  <h2>User Index</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>IC</th>
        <th>Email</th>
        <th>Jawatan</th>
        <th>Jabatan</th>
        <th>Role</th>
        <th>Tindakan</th>
      </tr>
    </thead>
    <tbody>
      <?php

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $row['s_id'] . "</td>";
          echo "<td>" . $row['s_name'] . "</td>";
          echo "<td>" . $row['s_ic'] . "</td>";
          echo "<td>" . $row['s_email'] . "</td>";
          echo "<td>" . $row['s_jawatan'] . "</td>";
          echo "<td>" . $row['s_dept'] . "</td>";
          echo "<td>" . $row['role'] . "</td>";
          echo '<td>';
          echo '<a href="../folder-user/profile.php?id=' . $row['s_id'] . '" class="btn mb-1 btn-rounded btn-outline-primary btn-sm mr-1">View</a>';
          echo '<a href="../folder-user/editUser.php?id=' . $row['s_id'] . '" class="btn mb-1 btn-rounded btn-outline-info btn-sm mr-1">Edit</a>';
          echo '<a href="../folder-user/delete.php?id=' . $row['s_id'] . '" class="btn mb-1 btn-rounded btn-outline-danger btn-sm">Delete</a>';
          echo '</td>';
          echo "</tr>";
        }
      } else {
        echo "<tr><td colspan='7'>No users found.</td></tr>";
      }

      $mysqli->close();
      ?>
    </tbody>
  </table>
</div>