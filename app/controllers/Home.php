<?php 

class Home extends Controller {
    public function index() {
        $data['pengiriman'] = $this->model("Pengiriman_model")->getAllPengiriman();
        $data['jumlah_lunas'] =$this->model("Pengiriman_model")->getAllLunas();
        $data['jumlah_belum_lunas'] =$this->model("Pengiriman_model")->getAllBelumLunas();
        $data['set_active'] = "index";
        $this->view('home/layouts/header');
        $this->view('home/layouts/navbar',$data);
        $this->view('home/layouts/topnav');
        $this->view('home/index',$data);
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
            Flasher::setFlash('success','Tambah pengiriman sukses');
            header('Location: ' . BASEURL . '/home/pengiriman');
        } else {
            Flasher::setFlash('error','Tambah pengiriman gagal');
            header('Location: ' . BASEURL . '/home/pengiriman');
        }
    }

    public function hapus_pengiriman($id) {
        if($this->model("Pengiriman_model")->hapusPengiriman($id) > 0) {
            Flasher::setFlash('success','Delete pengiriman sukses');
            header('Location: ' . BASEURL . '/home/pengiriman');
        } else {
            Flasher::setFlash('error','Delete pengiriman gagal');
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
            Flasher::setFlash('success','Update pengiriman sukses');
            header('Location: ' . BASEURL . '/home/pengiriman');
        } else {
            Flasher::setFlash('error','Update pengiriman gagal');
            header('Location: ' . BASEURL . '/home/pengiriman');
        }
    }
}



?>