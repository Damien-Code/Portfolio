<?php
class Controller {
    public function redirect($url){
        return require("./views/$url.view.php");
    }
}
