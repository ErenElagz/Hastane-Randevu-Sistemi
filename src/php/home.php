<?php
include "../php/dbcon.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $tc = $_POST['tc'];
    $city = $_POST['city'];
    $department = $_POST['department'];
    $date = $_POST['date'];
    mysqli_query($dbcon, "insert into `randevu` (name,surname,tc,city,department,date) values('$name','$surname','$tc','$city','$department','$date')");
}
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <!--Meta-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hastane Randevu Veritabanı</title>
    <link rel="icon" type="image/x-icon" href="../../src/img/favicon.ico" />

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
            <form method="post" class="col-sm-6 col d-flex flex-column align-items-center justify-content-center gap-3">

                <!--Temel Bilgiler-->
                <div class="w-100 bg-black bg-opacity-25 rounded-2 p-4">
                    <h4>Temel Bilgiler</h4>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Adınız</div>
                        </div>
                        <input type="text" class="form-control" id="NameInput" name="name" required />
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Soyadınız</div>
                        </div>
                        <input type="text" class="form-control" id="SurnameInput" name="surname" required />
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">TC No</div>
                        </div>
                        <input type="text" class="form-control" id="TcInput" name="tc" required />
                    </div>
                </div>

                <!--Randevu-->
                <div class="w-100 bg-black bg-opacity-25 rounded-2 p-4">
                    <h4>Randevu Bilgileri</h4>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">Şehir</div>
                        </div>
                        <select class="form-control" id="CityInput" name="city" required>
                            <option disabled selected hidden></option>
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
                            <option disabled selected hidden></option>
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
                        <input type="date" class="form-control" id="DateInput" name="date" required />
                    </div>
                </div>

                <!--Buton-->
                <div class="container d-flex gap-2">
                    <button class="btn btn-outline-danger w-100 rounded-2 text-light" type="reset">
                        Alanı Temizle
                    </button>
                    <button class="btn btn-success w-100 rounded-2 text-light " name="submit" type="submit">
                        Randevu Kaydet
                    </button>
                </div>
            </form>

            <!--Animasyon-->
            <div class="col-sm-6 col d-flex align-items-center justify-content-center">
                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_x1gjdldd.json" mode="bounce"
                    background="transparent" speed="0.6" style="width: fit-content; height: fit-content" loop autoplay>
                </lottie-player>
            </div>
        </div>
    </section>

    <!--Tablo-->
    <section class="container bg-black bg-opacity-25 rounded-2 p-4 mt-3">
        <h4>Tüm Randevular</h4>
        <table class="table table-striped table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ad</th>
                    <th scope="col">Soyad</th>
                    <th scope="col">TC No</th>
                    <th scope="col">Şehir</th>
                    <th scope="col">Bölüm</th>
                    <th scope="col">Tarih</th>
                    <th scope="col">Güncelle</th>
                    <th scope="col">Sil</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php
                $result = mysqli_query($dbcon, "Select * from `randevu` ");
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $surname = $row['surname'];
                        $tc = $row['tc'];
                        $city = $row['city'];
                        $department = $row['department'];
                        $date = $row['date'];
                        echo '<tr>
                                <td scope="row" class="fw-bold">' . $id . '</td>
                                <td>' . $name . '</td>
                                <td>' . $surname . '</td>
                                <td>' . $tc . '</td>
                                <td>' . $city . '</td>
                                <td>' . $department . '</td>
                                <td>' . $date . '</td>                                
                                <td><button class="btn btn-outline-primary w-100"><a class="link" href="./update.php?updateid=' . $id . '">Güncelle</a> </button>
                                <td><button class="btn btn-outline-danger w-100" ><a class="link" href="./delete.php?deleteid=' . $id . '">Sil</a> </button>
                                </td>
                              </tr>';
                    }
                } ?>
            </tbody>
        </table>
    </section>

    <!--LogOut-->
    <div class="container my-4">
        <a class="link" href="logout.php">
            <button class="btn btn-outline-primary w-100 rounded-2 text-light " type="button">
                Çıkış Yap
            </button>
        </a>
    </div>

    <!--Credit-->
    <footer class="container bg-black bg-opacity-25 rounded-2 mt-4 p-3 text-center">
        <h4>Yapımcılar</h4>
        <div class="d-flex align-items-center justify-content-evenly mt-3">
            <button class="btn btn-outline-warning">ErenElagz</button>
        </div>
    </footer>

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