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

    <?php
    $alert = $this->session->userdata('alert');
    if ($alert){ ?>
    <div class="alert alert-<?php echo $alert['type'];?>">
    <?php echo  $alert['title']; ?>   <strong><?php echo $alert['message'];?> </strong>
    </div>
    <?php }
    ?>
    <a href="<?php echo base_url('personel/insert_form')?>" class="btn btn-success btn-sm">Yeni Ekle</a> <br><br>
    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Resim</th>
            <th scope="col">Personel Adı <a href="<?php echo base_url();?>personel/order/personel_ad/ASC">[A-Z]</a><a href="<?php echo base_url();?>personel/order/personel_ad/DESC">[Z-A]</a></th>
            <th scope="col">E-mail <a href="<?php echo base_url();?>personel/order/email/ASC">[A-Z]</a><a href="<?php echo base_url();?>personel/order/email/DESC">[Z-A]</a></th>
            <th scope="col">Telefon <a href="<?php echo base_url();?>personel/order/telefon/ASC">[A-Z]</a><a href="<?php echo base_url();?>personel/order/telefon/DESC">[Z-A]</a></th>
            <th scope="col">Departman<a href="<?php echo base_url();?>personel/order/departman/ASC">[A-Z]</a><a href="<?php echo base_url();?>personel/order/departman/DESC">[Z-A]</a></th>
            <th scope="col">Adres<a href="<?php echo base_url();?>personel/order/adres/ASC">[A-Z]</a><a href="<?php echo base_url();?>personel/order/adres/DESC">[Z-A]</a></th>
            <th scope="col">İşlemler</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($list as $row ){ ?>
                <tr>
                    <th scope="row"><?php echo $row->id; ?></th>
                    <th scope="row">
                        <?php if ($row->img_id){ ?>
                        <img  style="width: 50px" src="<?php echo base_url('uploads/'); echo $row->img_id;?>" alt=""></th>
                    <?php }else { ?>
                        <img  style="width: 50px" src="<?php echo base_url('assets/img/default_user.png'); ?>" alt=""></th>

                    <?php } ?>


                    <th scope="row"><?php echo $row->personel_ad; ?></th>
                    <th scope="row"><?php echo $row->email; ?></th>
                    <th scope="row"><?php echo $row->telefon; ?></th>
                    <th scope="row"><?php echo $row->departman; ?></th>
                    <th scope="row"><?php echo $row->adres; ?></th>
                    <td>
                        <a href="<?php echo base_url('personel/update_form/'); echo $row->id; ?>" class="btn btn-primary btn-sm"> Düzenle </a>
                        <a href="<?php echo base_url('personel/delete/'); echo $row->id; ?>" class="btn btn-danger btn-sm"> Sil </a>

                    </td>
                </tr>
           <?php } ?>



        </tbody>
    </table>

</div>



</body>
</html>