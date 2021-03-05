<?php 

class Pengiriman_model {
    private $tabel = "tb_pengiriman";
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPengiriman() {
        $this->db->query("SELECT * FROM $this->tabel");
        return $this->db->resultSet();
    }

    public function getAllLunas() {
        $this->db->query("SELECT 8 FROM $this->tabel WHERE `franco` = 'true'");
        return $this->db->resultSet();
    }

    public function getAllBelumLunas() {
        $this->db->query("SELECT 8 FROM $this->tabel WHERE `franco` = 'false'");
        return $this->db->resultSet();
    }

    public function getSpcPengiriman($id) {
        $this->db->query("SELECT * FROM $this->tabel WHERE id_pengiriman = :id");
        $this->db->bind('id',$id);
        return $this->db->single();
    }

    public function tambahPengiriman($data) 
    {
        $query = "INSERT INTO $this->tabel 
                VALUES
                    ('', :kode_pengiriman, :jumlah_pengiriman, :berat, :franco, :confrankert, :penerima_barang, :keterangan)";
        $this->db->query($query);
        $this->db->bind('kode_pengiriman',$data['kode_pengiriman']);
        $this->db->bind('jumlah_pengiriman',$data['jumlah_pengiriman']);
        $this->db->bind('berat',$data['berat']);
        $this->db->bind('franco',$data['franco']);
        $this->db->bind('confrankert',$data['confrankert']);
        $this->db->bind('penerima_barang',$data['penerima_barang']);
        $this->db->bind('keterangan',$data['keterangan']);
        
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusPengiriman($data) {
        $query = "DELETE FROM $this->tabel WHERE id_pengiriman = :id";
        $this->db->query($query);
        $this->db->bind('id',$data);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updatePengiriman($data) {
        $query = "UPDATE $this->tabel
                            SET
                        kode_pengiriman = :kode_pengiriman,
                        jumlah_pengiriman = :jumlah_pengiriman,
                        berat = :berat,
                        franco = :franco,
                        confrankert = :confrankert,
                        penerima_barang = :penerima_barang,
                        keterangan = :keterangan 
                        WHERE id_pengiriman = :id_pengiriman";
                        
            $this->db->query($query);
            $this->db->bind('kode_pengiriman',$data['kode_pengiriman']);
            $this->db->bind('jumlah_pengiriman',$data['jumlah_pengiriman']);
            $this->db->bind('berat',$data['berat']);
            $this->db->bind('franco',$data['franco']);
            $this->db->bind('confrankert',$data['confrankert']);
            $this->db->bind('penerima_barang',$data['penerima_barang']);
            $this->db->bind('keterangan',$data['keterangan']);
            $this->db->bind('id_pengiriman',$data['id_pengiriman']);
            $this->db->execute();

            return $this->db->rowCount();
    }
}






?>