<?php
  foreach ($nm_siswa as $row){
      echo "<option value='$row[nama_siswa]'>$row[nama_siswa]</option>";
  }