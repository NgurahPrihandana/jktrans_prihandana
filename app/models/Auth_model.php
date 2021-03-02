<?php 

    class Auth_model
    {
        private $table = 'tb_auth';
        private $db;

        public function __construct() 
        {
            $this->db = new Database;
        }
        
        public function getUserBy($verificator, $value)
        {
            if (isset($verificator) && isset($value)) {
                $q = "SELECT * FROM " . $this->table . " WHERE $verificator = :$verificator";
                $this->db->query($q);
                $this->db->bind($verificator, $value);
                return $this->db->single();
            }
        }

        public function login($data)
    {
   		$username = htmlspecialchars($data['username']);
        $password = htmlspecialchars($data['password']);

          if ( isset($username) && $username !== '') {
            if ($datauser = $this->getUserBy("username", $username)) {
                $password_user = $datauser["password"];
                $nama = $datauser['name'];

                if (password_verify($password,$password_user)) {
                    session_start();
                    $_SESSION['nama'] = $nama;
                    $_SESSION['username'] = $username;
                    $_SESSION['status'] = 'login';
                    header('Location: '.BASEURL.'/admin/index');
                }else{
                    Flasher::setFlash('Username / Password', 'Salah','danger');
                    header('Location: '.BASEURL.'/auth/index');
                }
            } else {
                Flasher::setFlash('Username / Password', 'Salah','danger');
                header('Location: '.BASEURL.'/auth/index');
            }
        }   else {
            Flasher::setFlash('Username ', 'Belum Dimasukkan','danger');
            header('Location: '.BASEURL.'/auth/index');
        }
    }
    
    }

?>