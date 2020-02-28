<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><table border="1" width="50%">
    <table>
    <th bgcolor="grey" >Nama Pangan</th>
    <th bgcolor="grey">Nama Perusahaan</th>
    <th bgcolor="grey">Jenis Kemasan</th>
    <th bgcolor="grey">Alamat Perusahaan</th>
    <th bgcolor="grey">Berat Bersih</th>
    <?php 
    
    include "connect.php";
    $query="SELECT * FROM pangan";
    $sql=mysqli_query($connect,$query);
    
    while($data=mysqli_fetch_array($sql)){
    echo "<tr>";
    echo "<td>".$data['Nama_Pangan']."</td>";
    echo "<td>".$data['Nama_Perusahaan']."</td>";
    echo "<td>".$data['Jenis_Kemasan']."</td>";
    echo "<td>".$data['Alamat_Perusahaan']."</td>";
    echo "<td>".$data['Berat_Bersih']."</td>";
    echo "</tr>";
    }
    ?>
    </center>
</body>
</html>