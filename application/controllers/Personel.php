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
            echo "ekleme yapılamadı. Listeye Dönmek için  <a  href='". base_url() ."'>Tıklayınız </a>";
        }

    }

    public function update_form($id){

        $where=array('id' => $id);

         $list = $this->Personel_model->get($where);
         $viewData['list']=$list;
       $this->load->view('personel_duzenle', $viewData);
    }

    public function update($id){

        $where = array('id' => $id);
        $data =array(
            'personel_ad' => $this->input->post('personel_ad'),
            'email'       => $this->input->post('email'),
            'telefon'     => $this->input->post('telefon'),
            'departman'  =>  $this->input->post('departman'),
            'adres'      =>  $this->input->post('adres')
        );

        $update=$this->Personel_model->update($where, $data);

        if ($update){
            echo "Güncelleme başarılı. Listeye Dönmek için  <a  href='". base_url() ."'>Tıklayınız </a>";
        } else{
            echo "Güncelleme yapılamadı. Listeye Dönmek için  <a  href='". base_url() ."'>Tıklayınız </a>";
        }
    }

    public function delete($id){

        $where = array('id' => $id);

       $this->Personel_model->delete($where);

        redirect(base_url());

    }

    public function order($field, $order){

       $list = $this->Personel_model->order_by($field, $order);
        $viewData['list']=$list;
        $this->load->view('personel_liste', $viewData);
    }


}