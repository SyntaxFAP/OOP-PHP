<?php 
require "proses.php";

$proses = new Beli;

if(isset($_POST['submit'])) {
    $proses->setPPN(10);
    $proses->setHarga(15420, 16130, 18310, 16510);
    $proses->setJenis($_POST["jenis"]);
    $proses->setJumlah($_POST["jumlah"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bahan Bakar</title>
    <!-- fontAwesome -->
    <script src="https://kit.fontawesome.com/7dfe115e0d.js" crossorigin="anonymous"></script>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- googleFonts -->
</head>
<body>
    <div class="container">
        <div class="card mt-5">
            <div class="card-header"><p class="fw-bold fs-2 text-center">Bahan Bakar</p></div>
            <div class="card-body">
                <form action="" method="post">
                    <label for="jumlah">Jumlah Liter :</label>
                    <input class="form-control mb-2" type="text" name="jumlah" id="jumlah" required>
                    <label for="jenis">Jenis Shell :</label>
                    <select class="form-select mb-4" name="jenis" id="jenis" required>
                        <option disabled selected>-- Jenis Shell --</option>
                        <option value="SSuper">Shell Super</option>
                        <option value="SVPower">Shell V-Power</option>
                        <option value="SVPowerDiesel">Shell V-Power Diesel</option>
                        <option value="SVPowerNitro">Shell V-Power Nitro</option>
                    </select>
                    <button class="btn btn-primary" type="submit" name="submit">Submit</button>
                </form>
            </div>
            <?php if(isset($_POST['submit'])) : ?>
                <div class="card" style="margin: 20px;">
                    <div class="card-body">
                        <?php $proses->cetakPembelian(); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
