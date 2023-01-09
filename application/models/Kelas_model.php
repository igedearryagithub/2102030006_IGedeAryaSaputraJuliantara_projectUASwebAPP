<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_model extends CI_Model
{
    private $_table = "kelass";

    public $id_kelas;
    public $kode;
    public $name;


    public function rules()
    {
        return [
            ['field' => 'kode',
            'label' => 'Kode',
            'rules' => 'required'],

            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],
            
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_kelas" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_kelas = uniqid();
        $this->kode = $post["kode"];
        $this->name = $post["name"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_kelas = $post["id"];
        $this->kode = $post["kode"];
        $this->name = $post["name"];
        // if (!empty($_FILES["image"]["name"])) {
        //     $this->image = $this->_uploadImage();
        // } else {
        //     $this->image = $post["old_image"];
        // }

        // $this->description = $post["description"];
        return $this->db->update($this->_table, $this, array('id_kelas' => $post['id']));
    }


    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_kelas" => $id));
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
