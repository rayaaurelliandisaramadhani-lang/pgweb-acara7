<?php
    $kecamatan = array("Moyudan", "Minggir", "Sayegan", "Godean", "Gamping");
    $luas = array(27.62, 27.27, 26.63, 26.84, 29.25);
    $jumlah_penduduk = array(31497, 29886, 47129, 72028, 10867);

    echo "<table border='1'>";
    echo "<tr> <th>No</th> <th>Kecamatan</th> <th>Luas</th> <th>Penduduk</th> </tr>";

    echo "<tr> <td>1</td> <td>$kecamatan[0]</td> <td>$luas[0]</td> <td>$jumlah_penduduk[0]</td> </tr>";
    echo "<tr> <td>2</td> <td>$kecamatan[1]</td> <td>$luas[1]</td> <td>$jumlah_penduduk[1]</td> </tr>";
    echo "<tr> <td>3</td> <td>$kecamatan[2]</td> <td>$luas[2]</td> <td>$jumlah_penduduk[2]</td> </tr>";
    echo "<tr> <td>4</td> <td>$kecamatan[3]</td> <td>$luas[3]</td> <td>$jumlah_penduduk[3]</td> </tr>";
    echo "<tr> <td>5</td> <td>$kecamatan[4]</td> <td>$luas[4]</td> <td>$jumlah_penduduk[4]</td> </tr>";
    echo "</table>";
?>