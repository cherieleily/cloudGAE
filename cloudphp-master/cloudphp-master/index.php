<?php
    $nama = "Cheriel Leily Antoinette";
    $nim = "51020003";
    $jurusan = "Sistem Informasi";
    $instagram = "https://www.instagram.com/pandacipuru/";
?>

<!DOCTYPE html>
<html>

<head>
    <title>hadiah</title>
    <style>
        .wrap {
            background-color: rgba(255, 255, 255, 0.7);
            width: 800px;
            color: black;
            margin: 20px auto;
            padding: 25px;
        }
    </style>
</head>

<body style="background: url(https://static.vecteezy.com/system/resources/previews/009/948/963/original/aesthetic-minimal-purple-wallpaper-illustration-perfect-for-wallpaper-backdrop-postcard-background-for-your-design-vector.jpg);background-size:cover;background-attachment: fixed;">
    <div class="wrap">
        <h1 class="class" align="center">Halo !</h1><hr/align="center" width="75%" style="border-top: 3px double #8c8b8b;">
        
        <table>
            <tr>
                <td rowspan="10" width="100px">
                    <img src="https://lh3.googleusercontent.com/a/AGNmyxbqLypfP98Yx1kEJdomC5EKb5RldS4zsu3q_DEyqg=s360" width="200px"
                        style="display: block;border-radius: 50%;border-color:white;margin-right:30px" border="2px">
                </td>
            </tr>
            <tr>
                <td><b>Nama</b></td>
                <td>:</td>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <td><b>NIM</b></td>
                <td>:</td>
                <td><?= $nim ?></td>
            </tr>
            <tr>
                <td><b>Jurusan</b></td>
                <td>:</td>
                <td><?= $jurusan ?></td>
            </tr>
            <tr>
                <td><b>Instagram</b></td>
                <td>:</td>
                <td><a href="<?= $instagram ?>"><?= $instagram ?></a></td>
            </tr>
        </table>
    </div>
</body>

</html>
