<?php
    $db = mysqli_connect("localhost","root","");
    mysqli_select_db($db, "db_zofi");
    $q = mysqli_query($db,"select s.id, s.nama, s.tgl_lahir, k.kelas, j.jurusan from siswa s, kelas k, jurusan j where s.kelas_id = k.id and s.jurusan_id = j.id;");
?>
<!DOCTYPE html>
<html lang="en">
    <title>Zofi Furnaleta</title>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="https://pbs.twimg.com/media/EvNLq_iXcAIslpt.png" type="image/x-icon">
    <style>
table, td, th {
  border: 1px solid;
  height: 35px;
  width: 150px;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>
<!--<nav>
    <h1 style="font-family: 'Rubik+Iso', serif;">Zofi Furnaleta</h1>
</nav>-->
</head>
<body>
    <nav>
        <h3>Database</h3>
        <ul class="navigation">
        <li><a href="home.html">Home</a></li>
        <li><a href="project.html">Projects</a></li>
        <li><a href="database.php">Database</a></li>
        </ul>
    </nav>
    <div class="container">
        <div class="profile-box">
            <!--<a href="index2.html"> <img src="https://i.pinimg.com/736x/6e/4a/7a/6e4a7ad33ce17e70cb5e5d996c827461.jpg" class="profile"></a>-->
            <h3>Database</h3>
            <br>
            <table>
                <thead>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tggl lahir</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        while($row = mysqli_fetch_array($q)){
                            echo "<tr>";
                            echo "<td>". $row['id'] ."</td>";
                            echo "<td>". $row['nama'] ."</td>";
                            echo "<td>". $row['tgl_lahir'] ."</td>";
                            echo "<td>". $row['kelas'] ."</td>";
                            echo "<td>". $row['jurusan'] ."</td>";
                        } 
                    ?>
                </tbody>
            </table>
            </div>
        </div>

        <i class="scroll-up" id="scroll-up">
            <img src="img/icons8-double-up-48.png" class="socicon up-arrow" alt="scroll-up">
        </i>
        
    <footer>
        <p class="title">&copy;2023 Zofi Furnaleta</p>
    </footer>
</body>
</html>