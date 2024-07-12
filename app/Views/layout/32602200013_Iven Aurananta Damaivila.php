<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styling CSS</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <div class="navbar">
        <div class="navbar-icon">
            <i class="fa-solid fa-circle-user fa-2x1"></i>
        </div>
        <div class="navbar-page">
            <ul type='none'>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Portofolio</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div clas="navbar-sosmed">
            <ul type='none'>
                <li><i class="fa-brands fa-Linkedin fa-lg"></i></li>
                <li><i class="fa-brands fa-Instagram fa-lg"></i></li>
                <li><i class="fa-brands fa-Facebook fa-lg"></i></li>
                <li><i class="fa-brands fa-square-Whatsapp fa-lg"></i></li>
            </ul>
        </div>
    </div>
    <div class="banner">
        <span class="name">
            Iven Aurananta Damaivila
        </span><br>
        <span class="description">
            Mahasiswa lulusan teknik informatika jurusan Teknik Informatika angkatan 2022
        </span>
    </div>
    <?= $this->renderSection('content') ?>
</body>

</html>