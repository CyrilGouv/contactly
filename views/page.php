<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= SITE_URL ?>public/assets/css/app.css">
</head>
<body>

    <nav class="navbar">
        <div class="container-fluid">
            <a class="navbar__brand" href="<?= SITE_URL ?>">Contactly</a>

            <ul class="navbar__connect">
                <li class="navbar__connect__item">
                    <span class="navbar__connect__msg">Howdy, Cyril</span>
                    <span class="navbar__connect__img">
                        <img src="<?= SITE_URL ?>public/assets/images/cyril.png" alt="Photo de profil">
                    </span>
                </li>
            </ul>
        </div>
    </nav>

    <main class="main">
        <div class="container">
            <?= $content ?>
        </div>
    </main>


    <footer class="footer">
        <div class="container-fluid">
            <p>&copy; Contactly - Created by Cyril Gouv</p>
        </div>
    </footer>

</body>
</html>