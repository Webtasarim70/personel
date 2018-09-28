<!doctype html>
<html lang="tr">
<head>
    <title>Personel Ekleme Formu</title>
    <link rel="stylesheet" href="<?php echo base_url('assets\css\bootstrap.css'); ?>">

</head>
<body>
<div class="container">

    <div class="col-md-6">
        <br>
        <h3 class="text-center">Personel Ekle</h3>
        <br>
        <form action="<?php echo base_url('personel/insert'); ?>" method="post">

            <div class="form-group">
                <label for="">Personelin Adı</label>
                <input type="text" class="form-control" name="personel_ad">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="form-group">
                <label for="">Telefon</label>
                <input type="text" class="form-control" name="telefon">
            </div>
            <div class="form-group">
                <label for="">Departman</label>
                <input type="text" class="form-control" name="departman">
            </div>
            <div class="form-group">
                <label for="">Adres</label>
                <input type="text" class="form-control" name="adres">
            </div>
            <button type="submit" class="btn btn-success btn-sm">Kaydet</button>
            <a href="<?php echo base_url()?>" class="btn btn-danger btn-sm">İptal</a>


        </form>
    </div>

</div>

</body>
</html>