<?php
/*
->
application / config / autoload/ $autoload['libraries'] = array('database');
application /config / config.php/  $config['base_url'] = 'http://localhost/personel/';
application / config / autoload/ $autoload['helper'] = array('url'); baseurl kullanımı için
application / config / database.php / ayarlamaları yap

->
proje ana klasoru içerisine // htacces dosyası
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L]

->
contoller oluşturulması app/controllers
class dosyası olması lazım. dosya ismi Büyük harf başlayacak, Class ismi dosya ismi ile aynı olacak
ve CI_Controller sınıfından extens edilecek
controller ekle, sil, güncelle, sırala, form ekle gibi acılıyor public function
index fonksiyonu default olacak

->
varsayılan route değiştir app/ config / routes
$route['default_controller'] = 'welcome';

->
model dosyası oluşturulacak
app/ models
db tablsuna benzer isim olabilir
class dosyası olması lazım CI_models extens etmei lazım
contorllerdeki ifonksiyonlar icin modeller oluşturulacak
get_all, get, insert, update, delete

->
app/ views icerisinde model dosyası oluşturulacak, php uzantıı html dosya
ccntroller dosyas icinde         $this->load->view('personel_liste');
şeklinde view yüklenecek

css ve js eklemelerinde base url kullanılacak     <link rel="stylesheet" href="<?php echo base_url('assets\css\bootstrap.css'); ?>">
autoload helper içinde url olması lazım calısması için


->
model dosyasında db kullanımı
$this->db->get('tablo_adı')->result(); burada result değeri diziden sadece sonucları cekip array olarak veriyor.
    public function get_all(){
        $result = $this->db->get('personel')->result();
        return $result;
    }

-> kontollerde model dosyasının yüklenmes,  modelin controllerde cagrılması
$this->load->model('Personel_model'); her fonksiyonda tek tek yazmamak icin classın contract içinde tetiklenir.

  public function __construct()
    {
        parent::__construct();
        $this->load->model('Personel_model');
    }

-> viewe kontolden data göndermek

$this->load->model('Personel_model');
$list= $this->Personel_model->get_all();
$viewData['list']=$list;
$this->load->view('personel_liste', $viewData);

-> view de contollerden gelen değişken kullanılır.
<?php foreach ($list as $row ){ ?>
                <tr>
                    <th scope="row"><?php echo $row->id; ?></th>
                    .......
                </tr>
           <?php } ?>

-> viewde link kullanımı
link  controllerdeki fonksiyon ismiyle controllere gönderilir.
 <a href="<?php echo base_url('personel/insert_form')?>" class="btn btn-success btn-sm">Yeni Ekle</a> <br><br>

-> paremetre yakalamak
örnegin düzenleme, update icin gelen id'yi alırken kontrole id ile gönderiyoruz.
gelen parametre bir değere alınıyor, alınan değer bir array ile modele gönderiliyor.
controller.:
public function update($id){

        $where = array('id' => $id);
data = array();
$update=$this->Personel_model->update($where, $data);

model.:
  public function update($where, $data){
        $update = $this->db->where($where)->update('personel',$data);
        return $update;

    }
where parantezi icerisinde tırnak kullanımı yok.

-> direct yonlendirme redirect(base_url());

-> sıralama order_by()

  public function order_by($field= 'id' , $order ='ASC'){
        $result = $this->db->order_by($field, $order)->get('personel')->result();
        return $result;

    }


*/
