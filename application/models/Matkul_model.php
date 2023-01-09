<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Matkul_model extends CI_Model
{
    private $_table = "matkuls";

    public $id_matkul;
    public $kode;
    public $name;
    public $sks;
    public $semester;
    public $prodi;

    public function rules()
    {
        return [
            ['field' => 'kode',
            'label' => 'Kode',
            'rules' => 'required'],

            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],
 
            ['field' => 'sks',
            'label' => 'Sks',
            'rules' => 'required'],

            ['field' => 'semester',
            'label' => 'Semester',
            'rules' => 'required'],
            
            ['field' => 'prodi',
            'label' => 'Prodi',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_matkul" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_matkul = uniqid();
        $this->kode = $post["kode"];
        $this->name = $post["name"];
        $this->sks = $post["sks"];
        $this->semester = $post["semester"];
        $this->prodi = $post["prodi"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_matkul = $post["id"];
        $this->kode = $post["kode"];
        $this->name = $post["name"];
        $this->sks = $post["sks"];
        $this->semester = $post["semester"];
       
        // if (!empty($_FILES["image"]["name"])) {
        //     $this->image = $this->_uploadImage();
        // } else {
        //     $this->image = $post["old_image"];
        // }

        $this->prodi = $post["prodi"];
        return $this->db->update($this->_table, $this, array('id_matkul' => $post['id']));
    }


    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_matkul" => $id));
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
