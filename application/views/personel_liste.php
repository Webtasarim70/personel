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
    <br>
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Personel Adı</th>
            <th scope="col">E-mail</th>
            <th scope="col">Telefon</th>
            <th scope="col">Departman</th>
            <th scope="col">Adres</th>
            <th scope="col">İşlemler</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>
                <a href="#" class="btn btn-primary btn-sm"> Düzenle </a>
                <a href="#" class="btn btn-danger btn-sm"> Sil </a>

            </td>
        </tr>

        </tbody>
    </table>

</div>



</body>
</html>