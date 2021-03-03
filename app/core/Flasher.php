<?php

class Flasher {
    public static function setFlash($icon,$title)
    {
        $_SESSION['flash'] = [
            'icon' => $icon,
            'title' => $title
        ];
    }

    public static function flash()
    {
        if( isset($_SESSION['flash'])) {
            echo '<script>
                    Swal.fire({
                        position: "top-end",
                        icon: "'. $_SESSION['flash']['icon'] .'",
                        title: "'. $_SESSION['flash']['title'] .'",
                        showConfirmButton: false,
                        timer: 1500
                    })
                    </script>
                    ';
            unset($_SESSION['flash']);
        }
    }
}