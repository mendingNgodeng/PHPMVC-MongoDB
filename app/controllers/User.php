<?php
require_once __DIR__ . '/../../core/controller.php';
require_once __DIR__. '/../models/model.php';

class User extends Controller{

    private $model;

    public function __construct(){
        $this->model = $this->model('model');   // Load model
    }

    public function index(){
      
        $this->model->setCollection("identity"); // Set the Collection. Default Is identity
        $data['user'] = $this->model->read_data(); // Call read_data, already with identity as the default
        $judul['title'] = "Data Users";
        $this->view_only('template/header',$judul);
        $this->view_only('template/sidebar');
        $this->view_only('template/navbar');
        $this->view('user/user',$data);
        $this->view_only('template/footer');
    }

    public function add_user(){
       $data = [
        'tambah' => "Add User Data",
        'url' => path('user/add_process'),
        'title' => 'Data Users'
       ];
        $this->view_only('template/header',$data);
        $this->view_only('template/sidebar');
        $this->view_only('template/navbar');
        $this->view('user/form_user',$data);
        $this->view_only('template/footer');

    }

    public function add_process(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $data = [
                'name' => htmlspecialchars($_POST['nama']),
                'umur' => htmlspecialchars($_POST['umur']),
                'email' => htmlspecialchars($_POST['email'])
            ];
            $hasil = $this->model->insert_data($data);
            header('Content-Type: application/json');
            if($hasil){
                echo json_encode(['status' => 'success', 'message' => 'Data berhasil ditambahkan.']);
           
            }else{
                echo json_encode(['status' => 'error', 'message' => 'Gagal menambahkan data.']);
         
            }
            }

        }

    public function update($id){
        $data = [
            'tambah' => "Update User Data",
            'url' => path('user/update_process'),
            'title' => 'Data Users',
            'user' => $this->model->read_data_id($id)
           ];

           $this->view_only('template/header',$data);
           $this->view_only('template/sidebar');
           $this->view_only('template/navbar');
           $this->view('user/form_user_update',$data);
           $this->view_only('template/footer');
    }

    public function update_process(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $data = [
                'name' => htmlspecialchars($_POST['nama']),
                'umur' => htmlspecialchars($_POST['umur']),
                'email' => htmlspecialchars($_POST['email'])
            ];

            $id = $_POST['_id'];

            $hasil = $this->model->update_data($id,$data);
            header('Content-Type: application/json');
            if($hasil){
                // echo "<script>alert('Update Success :)')
                // window.location.href = 'http://localhost/identity/user';
                // </script>";
                echo json_encode(['status' => 'success', 'message' => 'Data berhasil diupdate.']);
 
            }else{
                echo json_encode(['status' => 'error', 'message' => 'Data gagal diupdate.']);
                // echo "<script>alert('Update Success :)')
                // window.location.href = 'http://localhost/identity/user';
                // </script>";
           
            }
            
        }
    }

    public function delete_user($id){
        $hasil = $this->model->delete_data($id);

        header('Content-Type: application/json');
        if($hasil){
            echo json_encode(['status' => 'success']);
            // echo "<script>alert('Delete Success :)')
            // window.location.href = 'http://localhost/identity/user';
            // </script>";
            // exit;
        }else{
            echo json_encode(['status' => 'error', 'message' => 'Data gagal hapus']);
            // echo "<script>alert('Delete Success :)')
            // window.location.href = 'http://localhost/identity/user';
            // </script>";
            // exit;
        }
    }


}

