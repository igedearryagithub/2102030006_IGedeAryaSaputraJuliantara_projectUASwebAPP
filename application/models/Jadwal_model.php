<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal_model extends CI_Model
{
    private $_table = "jadwals";

    public $id_jadwal;
    public $kode;
    public $name;
    public $ruangan;
    public $waktu;
    public $dosen;

    public function rules()
    {
        return [
            ['field' => 'kode',
            'label' => 'Kode',
            'rules' => 'required'],

            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'], 
            
            ['field' => 'ruangan',
            'label' => 'Ruangan',
            'rules' => 'required'],
            
            ['field' => 'waktu',
            'label' => 'Waktu',
            'rules' => 'required'],

            ['field' => 'dosen',
            'label' => 'Dosen',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_jadwal" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_jadwal = uniqid();
        $this->kode = $post["kode"];
        $this->name = $post["name"];
        $this->ruangan = $post["ruangan"];
        $this->waktu = $post["waktu"];
        $this->dosen = $post["dosen"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_jadwal = $post["id"];
        $this->kode = $post["kode"];
        $this->name = $post["name"];
        $this->ruangan = $post["ruangan"];
        $this->waktu = $post["waktu"];
        // if (!empty($_FILES["image"]["name"])) {
        //     $this->image = $this->_uploadImage();
        // } else {
        //     $this->image = $post["old_image"];
        // }

        $this->dosen = $post["dosen"];
        return $this->db->update($this->_table, $this, array('id_jadwal' => $post['id']));
    }


    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_jadwal" => $id));
    }

    // private function _uploadImage()
    // {
    //     $config['upload_path']          = './upload/product/';
    //     $config['allowed_types']        = 'gif|jpg|png';
    //     $config['file_name']            = $this->product_id;
    //     $config['overwrite']			= true;
    //     $config['max_size']             = 1024; // 1MB
    //     // $config['max_width']            = 1024;
    //     // $config['max_height']           = 768;

    //     $this->load->library('upload', $config);

    //     if ($this->upload->do_upload('image')) {
    //         return $this->upload->data("file_name");
    //     }
        
    //     return "default.jpg";
    // }

    // private function _deleteImage($id)
    // {
    //     $product = $this->getById($id);
    //     if ($product->image != "default.jpg") {
    //         $filename = explode(".", $product->image)[0];
    //         return array_map('unlink', glob(FCPATH."upload/product/$filename.*"));
    //     }
    // }
}
