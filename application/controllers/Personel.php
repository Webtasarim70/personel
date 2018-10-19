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
        $img            = $_FILES['img_id']['name'];

        if ($personel_ad && $email && $telefon && $depatman && $adres && $img){
            $config['upload_path']   ='uploads/';
            $config['allowed_types'] ='gif|jpg|png|jpeg';
            $this->load->library('upload',$config);


            if ($this->upload->do_upload('img_id')){
                //basarılı ise
                $img_id = $this->upload->data('file_name');
                $data =array(
                    'personel_ad' => $personel_ad,
                    'email'       => $email,
                    'telefon'     => $telefon,
                    'departman'  => $depatman,
                    'adres'      => $adres,
                    'img_id'     => $img_id
                );
                $insert=$this->Personel_model->insert($data);

                if ($insert){
                    $alert = array(
                        'title'  => 'İşlem Başarılıdır',
                        'message' => 'Ekleme İşlemi Başarılıdır..',
                        'type'      =>'success'
                    );

                   // echo "ekleme başarılı. Listeye Dönmek için  <a  href='". base_url() ."'>Tıklayınız </a>";
                } else{
                    $alert = array(
                        'title'  => 'İşlem Başarısız',
                        'message' => 'Ekleme İşlemi Başarısızdır.',
                        'type'      =>'danger'
                    );

                   // echo "ekleme yapılamadı. Listeye Dönmek için  <a  href='". base_url() ."'>Tıklayınız </a>";
                }
            }else{
                $alert = array(
                    'title'  => 'İşlem Başarısız',
                    'message' => 'Resim Eklenirken sorun Oluştu.',
                    'type'      =>'danger'
                );
            }
        }else{
            $alert = array(
                'title'  => 'İşlem Başarısız',
                'message' => 'Alanları Boş Bırakmayınız',
                'type'      =>'danger'
            );
        }

        $this->session->set_flashdata('alert', $alert);
        redirect(base_url('personel'));
    }

    public function update_form($id){

        $where=array('id' => $id);

         $list = $this->Personel_model->get($where);
         $viewData['list']=$list;
       $this->load->view('personel_duzenle', $viewData);
    }

    public function update($id){

        $img = $_FILES['img_id']['name'];

        if ($img){
            // resim varsa
            $config['upload_path']      ="uploads/";
            $config['allowed_types']    ="gif|jpg|png|jpeg";
            $this->load->library('upload', $config);
            $upload = $this->upload->do_upload('img_id');

            if ($upload){
                //resim yüklenmiş ise

                $where = array('id' => $id);
                $data =array(
                    'personel_ad' => $this->input->post('personel_ad'),
                    'email'       => $this->input->post('email'),
                    'telefon'     => $this->input->post('telefon'),
                    'departman'  =>  $this->input->post('departman'),
                    'adres'      =>  $this->input->post('adres'),
                    'img_id'     =>  $this->upload->data('file_name')
                );

                $update=$this->Personel_model->update($where, $data);
                if ($update){
                    $alert = array(
                        'title'  => 'İşlem Başarılıdır',
                        'message' => 'Güncelleme Başarılıdır..',
                        'type'      =>'success'
                    );

                } else{
                    $alert = array(
                        'title'  => 'İşlem Başarısız',
                        'message' => 'Güncelleme Yapılmadı',
                        'type'      =>'danger'
                    );
                }

            }else {
                //resim yüklenemesi

                $alert = array(
                    'title'  => 'İşlem Başarısız',
                    'message' => 'Resim Yüklenemedi',
                    'type'      =>'danger'
                );
            }


        }else{
            // resim yoksa

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
                $alert = array(
                    'title'  => 'İşlem  Başarılı',
                    'message' => 'Kayıt Güncellendi.',
                    'type'      =>'success'
                );
            } else{
                $alert = array(
                    'title'  => 'İşlem Başarısız',
                    'message' => 'Güncelleme Yapılamadı',
                    'type'      =>'danger'
                );
            }

        }
        $this->session->set_flashdata('alert', $alert);
        redirect(base_url('personel'));
    }

    public function delete($id){

        $where = array('id' => $id);

       $this->Personel_model->delete($where);

        $alert = array(
            'title'  => 'İşlem Başarılıdır',
            'message' => 'Kayıt Silindi..',
            'type'      =>'success'
        );
        $this->session->set_flashdata('alert', $alert);
        redirect(base_url('personel'));

    }

    public function order($field, $order){

       $list = $this->Personel_model->order_by($field, $order);
        $viewData['list']=$list;
        $this->load->view('personel_liste', $viewData);
    }


}