<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/css.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>

<body>
    <header>
        <h1>Welcome to My Website</h1>
    </header>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/profile">Profile</a></li>
            <li><a href="/experience">Experience</a></li>
        </ul>
    </nav>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
        <p>
        <h2>Dibuat oleh Iven Aurananta Damaivila</h2>
        <h5>Praktikum Web Programming</h5>
        </p>
    </footer>
</body>

</html>