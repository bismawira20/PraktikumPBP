<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER FORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5 border rounded p-0">
        <div class="bg-secondary rounded-top p-2 text-white text-center">Form Mahasiswa</div>
        <form method="get">
            <div class="form-group m-2">
                <label for="nama">Nama</label><br />
                <input type="text" class="form-control" id="nama" name="nama" maxlength="50">
            </div>

            <div class="form-group m-2">
                <label for="email" class="label">Email</label><br>
                <input type="text" class="form-control" id="email" name="email">
            </div>

            <div class="form-group m-2">
                <label class="label" for="kota">Kota/Kabupaten:</label><br />
                <select name="kota" id="kota" class="form-control">
                    <option value="-" selected disable>-- Pilih Kota Kabupaten --</option>
                    <option value="Semarang">Semarang</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Bandung">Bandung</option>
                    <option value="Surabaya">Surabaya</option>
                </select>
            </div>

            <label class="check m-2">Jenis Kelamin</label>
            <div class="form-check m-2">
                <label class="form-check label">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Pria">Pria
                </label>
            </div>
            <div class="form-check m-2">
                <label class="form-check label">
                    <input type="radio" class="form-check-input" name="jenis_kelamin" value="Wanita">Wanita
                </label>
            </div>
            <br>
            <label for="">Permintaan:</label>
            <div class="form-check m-2">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="minat[]" value="Coding">Coding
                </label>
            </div>
            <div class="form-check m-2">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="minat[]" value="ux_design">UX Design
                </label>
            </div>
            <div class="form-check m-2">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" name="minat[]" value="data_science">Data Science
                </label>
            </div>
            <br>

            <div>
                <button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
    </div>
    <div class="container">
        <?php
        if (isset($_GET["submit"])) {
            echo "<h3 style='margin-top:0px;'>Your Input:</h3>";
            echo 'Nama = ' . $_GET['nama'] . '</br>';
            echo 'Email = ' . $_GET['email'] . '</br>';
            echo 'Kota = ' . $_GET['kota'] . '</br>';

            if (isset($_GET['jenis_kelamin'])) {
                echo 'Jenis Kelamin = ' . $_GET['jenis_kelamin'] . '</br>';
            } else {
                echo '<span class="teks-merah">Jenis kelamin belum diatur !</br></span>';
            }

            if (!empty($_GET['minat'])) {
                echo 'Peminatan yang dipilih: ';
                foreach ($_GET['minat'] as $minat_item) {
                    echo '<br />- ' . $minat_item;
                }
            } else {
                echo '<span class="teks-merah">Anda belum memilih Peminatan !</br></span>';
            }
        }
        ?>
    </div>


</body>

</html>