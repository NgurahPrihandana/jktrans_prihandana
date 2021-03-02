<?php 

class Home extends Controller {
    public function index() {
        $data['set_active'] = "index";
        $this->view('home/layouts/header');
        $this->view('home/layouts/navbar',$data);
        $this->view('home/layouts/topnav');
        $this->view('home/index');
        $this->view('home/layouts/footer');
    }

    public function pengiriman() {
        $data['pengiriman'] = $this->model("Pengiriman_model")->getAllPengiriman();
        $data['set_active'] = "pengiriman";
        $this->view('home/layouts/header');
        $this->view('home/layouts/navbar',$data);
        $this->view('home/layouts/topnav');
        $this->view('home/pengiriman',$data);
        $this->view('home/layouts/footer');
    }

    public function tambah_pengiriman() {
        if($this->model('Pengiriman_model')->tambahPengiriman($_POST) > 0) {
            Flasher::setFlash('berhasil','ditambahkan','success');
            header('Location: ' . BASEURL . '/home/pengiriman');
        } else {
            Flasher::setFlash('gagal','dirubah','danger');
            header('Location: ' . BASEURL . '/home/pengiriman');
        }
    }

    public function hapus_pengiriman($id) {
        if($this->model("Pengiriman_model")->hapusPengiriman($id) > 0) {
            Flasher::setFlash('berhasil','ditambahkan','success');
            header('Location: ' . BASEURL . '/home/pengiriman');
        } else {
            Flasher::setFlash('gagal','dirubah','danger');
            header('Location: ' . BASEURL . '/home/pengiriman');
        }
    }

    public function edit_pengiriman($id) {
        $data['getSpcPengiriman'] = $this->model('Pengiriman_model')->getSpcPengiriman($id);
        $data['set_active'] = "pengiriman";
        $this->view('home/layouts/header');
        $this->view('home/layouts/navbar',$data);
        $this->view('home/layouts/topnav');
        $this->view('home/edit_pengiriman',$data);
        $this->view('home/layouts/footer');
    }

    public function update() {
        if($this->model('Pengiriman_model')->updatePengiriman($_POST) > 0) {
            Flasher::setFlash('berhasil','ditambahkan','success');
            header('Location: ' . BASEURL . '/home/pengiriman');
        } else {
            Flasher::setFlash('berhasil','ditambahkan','success');
            header('Location: ' . BASEURL . '/home/pengiriman');
        }
    }
}



?>