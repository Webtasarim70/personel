<?php

class Personel extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Personel_model');
    }

    public function index(){

       /* $this->load->model('Personel_model');*/

        $list= $this->Personel_model->get_all();
        /*print_r($list);*/
        $viewData['list']=$list;
        $this->load->view('personel_liste', $viewData);

    }

    public function insert_form(){
        $this->load->view('personel_ekle');

    }

    public function insert(){

        $personel_ad    = $this->input->post('personel_ad');
        $email          = $this->input->post('email');
        $telefon        = $this->input->post('telefon');
        $depatman       = $this->input->post('departman');
        $adres          = $this->input->post('adres');

            $data =array(
              'personel_ad' => $personel_ad,
              'email'       => $email,
              'telefon'     =>$telefon,
              'departman'  =>$depatman,
              'adres'      =>$adres
            );
        $insert = $this->Personel_model->insert($data);

        if ($insert){
            echo "ekleme başarılı. Listeye Dönmek için  <a  href='". base_url() ."'>Tıklayınız </a>";
        } else{
            echo "ekleme yapılamadıListeye Dönmek için  <a  href='". base_url() ."'>Tıklayınız </a>";
        }

    }

    public function update(){

    }

    public function delete(){

    }

    public function order(){

    }


}