<!doctype html>
<html lang="tr">
<head>
    <title>Personel Listesi</title>
    <link rel="stylesheet" href="<?php echo base_url('assets\css\bootstrap.css'); ?>">
</head>
<body>

<div class="container">
    <br>
    <h3 class="text-center">Personel Listesi</h3>
    <a href="<?php echo base_url('personel/insert_form')?>" class="btn btn-success btn-sm">Yeni Ekle</a> <br><br>
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Personel Adı <a href="#">[A-Z]</a><a href="#">[Z-A]</a></th>
            <th scope="col">E-mail <a href="#">[A-Z]</a><a href="#">[Z-A]</a></th>
            <th scope="col">Telefon <a href="#">[A-Z]</a><a href="#">[Z-A]</a></th>
            <th scope="col">Departman<a href="#">[A-Z]</a><a href="#">[Z-A]</a></th>
            <th scope="col">Adres<a href="#">[A-Z]</a><a href="#">[Z-A]</a></th>
            <th scope="col">İşlemler</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($list as $row ){ ?>
                <tr>
                    <th scope="row"><?php echo $row->id; ?></th>
                    <th scope="row"><?php echo $row->personel_ad; ?></th>
                    <th scope="row"><?php echo $row->email; ?></th>
                    <th scope="row"><?php echo $row->telefon; ?></th>
                    <th scope="row"><?php echo $row->departman; ?></th>
                    <th scope="row"><?php echo $row->adres; ?></th>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm"> Düzenle </a>
                        <a href="#" class="btn btn-danger btn-sm"> Sil </a>

                    </td>
                </tr>
           <?php } ?>



        </tbody>
    </table>

</div>



</body>
</html>