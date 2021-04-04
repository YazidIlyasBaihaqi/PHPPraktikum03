<?php
require_once 'fungsiBMI.php';
$nama = $_GET['nama'];
$gender = $_GET['gender'];
$umur = $_GET['umur'];
$berat = $_GET['berat'];
$tinggi = $_GET['tinggi'];
$hasilBMI = new BMI($tinggi,$berat);


$data = array(
);
$temp = array($nama,$gender,$umur,$berat,$tinggi,$hasilBMI->get_BMI(),$hasilBMI->get_hasil());
array_push($data, $temp);

?>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Gender</th>
      <th scope="col">Umur</th>
      <th scope="col">Berat (Kg)</th>
      <th scope="col">Tinggi (cm)</th>
      <th scope="col">BMI</th>
      <th scope="col">Hasil</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php
      for ($x = 0; $x = count($data); $x++){
        echo "<td>";
         for ($y = 0; $y = $count($data[x]); $y++){
           echo "<td>", $data[x][y], "</td>";
         }
        echo "</td>";
      }
    ?>
      <th scope="row">1</th>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>
      <td>5</td>
      <td>6</td>
    </tr>
  </tbody>
</table>
</body>
