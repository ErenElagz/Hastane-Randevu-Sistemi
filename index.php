<!DOCTYPE html>
<html lang="tr">
    <head>
        <!--Meta-->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Giriş Sayfası</title>
        <link rel="icon" type="image/x-icon" href="./src/img/favicon.ico" />

        <!--CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="./src/css/style.css" />
    </head>

    <body data-bs-theme="dark" class="my-4">
        <!--Header-->
        <header class="container bg-warning bg-gradient rounded-2 p-1">
            <h1 class="h2 text-center text-dark">Hastane Randevu Sistemi Giriş Sayfası</h1>
        </header>

        <!--Login-->
        <form action="./src/php/login.php" method="post" class="container d-flex justify-content-center mt-5">
            <div class="w-75 bg-black bg-opacity-25 rounded-2 p-4">
                <h4>Giriş Yapın</h4>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Kullanıcı adı</div>
                    </div>
                    <input type="text" name="name" class="form-control" /><br />
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Parola</div>
                    </div>
                    <input type="password" name="password" class="form-control" /><br />
                </div>

                <?php if (isset($_GET['error'])) { ?>
                <p class="error">
                    <?php echo $_GET['error']; ?>
                </p>
                <?php } ?>

                <button type="submit" class="w-100 btn btn-success">Login</button>
            </div>
        </form>

        <!--JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="./src/js/script.js"></script>
    </body>
</html>
