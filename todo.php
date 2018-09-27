<?php

// application / config / autoload/ $autoload['libraries'] = array('database');
// application /config / config.php/  $config['base_url'] = 'http://localhost/personel/';
// application / config / autoload/ $autoload['helper'] = array('url'); baseurl kullanımı için
// application / config / database.php / ayarlamaları yap

/*proje ana klasoru içirisine // htacces dosyası

RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L]*/

/*//contoller oluşturulması app/controllers
class dosyası olması lazım. dosya ismi Büyük harf başlayacak, Class ismi dosya ismi ile aynı olacak
ve CI_Controller sınıfından extens edilecek
*/

/*controller ekle, sil, güncelle, sırala, form ekle gibi acılıyor public function
index fonksiyonu default olacak
*/

/*varsayılan route değiştir app/ config / routes
$route['default_controller'] = 'welcome';
 */

/*model dosyası oluşturulacak
app/ models
db tablsuna benzer isim olabilir
class dosyası olması lazım CI_models extens etmei lazım
contorllerdeki ifonksiyonlar icin modeller oluşturulacak
get_all, get, insert, update, delete

*/

/*app/ views icerisinde model dosyası oluşturulacak, php uzantıı html dosya
ccntroller dosyas icinde         $this->load->view('personel_liste');
şeklinde view yüklenecek

css ve js eklemelerinde base url kullanılacak     <link rel="stylesheet" href="<?php echo base_url('assets\css\bootstrap.css'); ?>">
autoload helper içinde url olması lazım calısması için

*/