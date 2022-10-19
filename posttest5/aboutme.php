<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun Saya</title>
    <link rel="stylesheet" href="style0.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login-style.css">
    <script src="jquery.js"></script>
</head>

<body>
    <div class="header">
        <div class="header-logo">Print Online Samarinda</div>
        <div class="header-item">
            <ul>
                <li><button id="mode"><img src="logo/icons8-180-degree-30.png" alt="dark mode"></button></li>
                <li><button id="keranjang" onclick="cart()"><img src="logo/icons8-cart-32.png" alt="cart"></button></li>
                <li>Login/Daftar</li>
                <li style="text-decoration: none;">Akun</li>
                <li><a href="home.html" style="text-decoration: none;">Beranda</li></a>
            </ul>
            </div>
        </div>
    </div>

    <div class="list-table center" style="overflow-x: auto;">
        <table>
            <thead>
                <tr>
                    <th colspan="7" class="thead">
                        <h3 class="center">Informasi Akun</h3>
                    </th>
                </tr>
                <tr>
                    <th nowrap>Nama Lengkap</th>
                    <th>No Telepon</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th colspan="2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require "config.php";
                $query = mysqli_query($db, "SELECT * FROM users");
                $i = 1;
                while ($row = mysqli_fetch_assoc($query)) {
                ?>
                    <tr>
                        <td nowrap><?=$row['nama']?></td>
                        <td><?=$row['telp']?></td>
                        <td><?=$row['email']?></td>
                        <td><?=$row['regisUsername']?></td>
                        <td><?=$row['regisPassword']?></td>
                        <td class="edit">
                            <a href="edit.php?id=<?=$row['id']?>">
                                <center><img src="logo/icons8-edit-64.png" alt="edit" width="30" height="30"></center>
                            </a>
                        </td>
                        <td class="hapus">
                            <a href="hapus.php?id=<?=$row['id']?>">
                                <center><img src="logo/icons8-delete-64.png" alt="hapus"width="30" height="30"></center>
                            </a>
                        </td>
                    </tr>
                <?php
                    $i++;
                }
                ?>
            </tbody>
        </table>
        <img class="latar" src="image/login-background0.jpg" alt="">
    </div>

    <div class="copyright">
        <p><center>@Copyright 2022 - by Rista Safitri</center></p>
    </div>
</body>

</html>