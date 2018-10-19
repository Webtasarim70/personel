<!doctype html>
<html lang="tr">
<head>
    <title>Personel Düzenleme Formu</title>
    <link rel="stylesheet" href="<?php echo base_url('assets\css\bootstrap.css'); ?>">

</head>
<body>
<div class="container">

    <div class="col-md-6">
        <br>
        <h3 class="text-center">Personeli Düzenle</h3>
        <br>


        <form action="<?php echo base_url('personel/update/'); echo $list->id; ?>" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label for="">Personelin Adı</label>
                <input type="text" class="form-control" name="personel_ad" value="<?php echo $list->personel_ad; ?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo $list->email; ?>" >
            </div>
            <div class="form-group">
                <label for="">Telefon</label>
                <input type="text" class="form-control" name="telefon" value="<?php echo $list->telefon; ?>">
            </div>
            <div class="form-group">
                <label for="">Departman</label>
                <input type="text" class="form-control" name="departman" value="<?php echo $list->departman; ?>">
            </div>
            <div class="form-group">
                <label for="">Adres</label>
                <input type="text" class="form-control" name="adres" value="<?php echo $list->adres; ?>">
            </div>
            <div class="form-group">
                <label for="">Personelin Resmi</label>
                <img  style="width: 50px" src="<?php echo base_url('uploads/'); echo $list->img_id;?>" alt="">
                <input type="file" class="form-control" name="img_id">
            </div>
            <button type="submit" class="btn btn-success btn-sm">Kaydet</button>
            <a href="<?php echo base_url()?>" class="btn btn-danger btn-sm">İptal</a>


        </form>
    </div>

</div>

</body>
</html>