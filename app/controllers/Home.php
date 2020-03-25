<?php

class Home extends Controller {

    public function index()
    {
        $data['title'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Crud_model')->getAll();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
    
    public function detail($id)
    {
        $data['title'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Crud_model')->getById($id);
        $this->view('templates/header', $data);
        $this->view('home/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Crud_model')->insert($_POST) > 0){
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/home');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/home');
            exit;
        };
    }

    public function remove($id)
    {
        if ($this->model('Crud_model')->remove($id) > 0){
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/home');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/home');
            exit;
        };
    }

    public function getedit()
    {
        echo json_encode($this->model('Crud_model')->getById($_POST['id']));
    }

    public function ubah()
    {
        if ($this->model('Crud_model')->update($_POST) > 0){
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASEURL . '/home');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASEURL . '/home');
            exit;
        };
    }

    public function cari()
    {
        $data['title'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Crud_model')->search();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

}