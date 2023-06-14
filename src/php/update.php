<?php
include "dbcon.php";

$id = $_GET["updateid"];
$sql = "Select * from `randevu`where id=$id";
$result = mysqli_query($dbcon, $sql);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$surname = $row['surname'];
$tc = $row['tc'];
$city = $row['city'];
$department = $row['department'];
$date = $row['date'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $tc = $_POST['tc'];
    $city = $_POST['city'];
    $department = $_POST['department'];
    $date = $_POST['date'];
    mysqli_query($dbcon, "update `randevu` set id=$id,name='$name',surname='$surname',tc='$tc',city='$city',department='$department' where id='$id'");
    header('location:home.php');
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <!--Meta-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hastane Randevu Sistemi</title>
    <link rel="icon" type="image/x-icon" href="./src/img/favicon.ico" />

    <!--CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body data-bs-theme="dark" class="my-4">

    <!--Header-->
    <header class="container bg-warning bg-gradient rounded-2 p-1">
        <h1 class="h2 text-center text-dark">Hastane Randevu Sistemi</h1>
    </header>

    <!--Randevu-->
    <section class="container rounded-2 mt-3">
        <div class="row">
            
            <!--Input-->
            <form method="post" class="col col-md-6 d-flex flex-column align-items-center justify-content-center gap-3">
                <h2 class="mt-2">Randevu Güncelle</h2>
                <div class="w-100 bg-black bg-opacity-25 rounded-2 p-4">
                    <h4>Temel Bilgiler</h4>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Adınız</div>
                        </div>
                        <input type="text" class="form-control" id="NameInput" name="name" required value=<?php echo $name; ?> />
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Soyadınız</div>
                        </div>
                        <input type="text" class="form-control" id="SurnameInput" name="surname" required value=<?php echo $surname; ?> />
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">TC No</div>
                        </div>
                        <input type="text" class="form-control" id="TcInput" name="tc" required value=<?php echo $tc; ?> />
                    </div>
                </div>

                <div class="w-100 bg-black bg-opacity-25 rounded-2 p-4">
                    <h4>Randevu Bilgileri</h4>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Şehir</div>
                        </div>
                        <select class="form-control" id="CityInput" name="city" required>
                            <option>
                                <?php echo $city; ?>
                            </option>
                            <option>Kars Vegas</option>
                            <option>Çorum</option>
                            <option>Tekirdağ</option>
                            <option>İstanbul</option>
                            <option>Ankara</option>
                        </select>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Bölüm</div>
                        </div>
                        <select class="form-control" id="DepartmentInput" name="department" placeholder="Şehir Seçin"
                            required>
                            <option>
                                <?php echo $department ?>
                            </option>
                            <option>Ağız ve Diş Sağlığı</option>
                            <option>Göz Hastalıkları</option>
                            <option>Kulak, Burun, Boğaz</option>
                            <option>Genel Cerrahi</option>
                            <option>Plastik Cerrahi</option>
                        </select>
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Tarih</div>
                        </div>
                        <input type="date" class="form-control" id="DateInput" name="date" required value=<?php echo $date; ?> />
                    </div>
                </div>

                <!--Buton-->
                <div class="container d-flex gap-2">
                    <button class="btn btn-outline-secondary w-100 rounded-2 text-light" type="button">
                        <a href="./index.php" class="link">Anasayfaya Dön</a> </button>
                    <button class="btn btn-success w-100 rounded-2 text-light" id="BtnSubmit" name="submit"
                        type="submit">
                        Randevuyu Güncelle
                    </button>
                </div>
            </form>
    
            <!--Animasyon-->
            <div class="col col-md-6 d-flex align-items-center justify-content-center">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_x1gjdldd.json" mode="bounce"
                    background="transparent" speed="0.6" style="width: fit-content; height: fit-content" loop
                    autoplay></lottie-player>
            </div>
        </div>
    </section>

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/script.js"></script>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>