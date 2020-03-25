<?php

class Flasher {

    public static function setFlash($msg, $action, $type)
    {
        $_SESSION['flash'] = [
            'message' => $msg,
            'action'  => $action,
            'type'    => $type
        ];
    }

    public static function flash()
    {
        if ( isset($_SESSION['flash']) ) {
            echo '<div class="alert alert-'. $_SESSION['flash']['type'] .' alert-dismissible fade show" role="alert">
                    Data <strong>'. $_SESSION['flash']['message'] .'</strong> '. $_SESSION['flash']['action'] .'
                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            unset($_SESSION['flash']);
        }
    }

}