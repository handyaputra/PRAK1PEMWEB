<!DOCTYPE html>
<html>
	<form action="response_form.php" method="get">
		Nama: <input type="text" name="nama"/><br />
		Prodi: <input type="text" name="prodi"/><br />
		<input type="submit" value="Submit"/>
    </form>
</html>

<?php
$hari = date("d");
if ($hari < "15") {
    echo "Awal Bulan";
} else if ($hari == "15") {
    echo "Akhir Bulan";
} else {
    echo "Tengah Bulan";
}

$meletus = "hijau";
switch ($meletus) {
    case "hijau":
        echo "DOR!!";
        break;
    case "kuning":
        echo "KUNING";
        break;
    case "kelabu":
        echo "KELABU";
        break;
    default:
        echo "HATIKU SANGAT BIRU";
}

$w = 99;
while ($w <= 100) {
    echo "Masih belum";
    $w++;
}
do {
    echo "Sitik engkas";
    $w++;
} while ($w <= 100);

$kelas = array('A', 'B', 'C');
$room = ["satu", "dua", "tiga"];
print_r($kelas);
print_r($room);
?>