<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShareBoard</title>

    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link" href="<?= ROOT_URL ?>">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= ROOT_URL ?>Shares">Shares</a></li>

        </ul>
    </div>
    <div class="mx-auto order-0">
        <a class="navbar-brand mx-auto" href="#">Share Board</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <?php if (isset($_SESSION['is_logged_in'])): ?>


                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT_URL ?>">Weclome <?= $_SESSION['user_data']['name'] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT_URL ?>users/logout">Logout</a>
                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT_URL ?>users/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= ROOT_URL ?>users/register">Register</a>
                </li>

            <?php endif; ?>

        </ul>
    </div>
</nav>

<main role="main" class="container">
    <div class="messages">
        <?php Messages::getMessages() ?>
    </div>

    <div class="row">
        <?php require $view; ?>
    </div>

</main><!-- /.container -->





</body>
</html>