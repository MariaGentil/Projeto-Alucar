<?php

namespace Maria\Alucar\View;

class Front{

    public function header($title = 'Alucar'){
        require_once __DIR__ . '/../../Views/Components/Header.php';
}
    public function footer($title = 'Alucar'){
        require_once __DIR__ . '/../../Views/Components/Footer.php';
}
    public function body($html){
        $this->header();
    echo '<link rel="stylesheet" href="/style.php">';
        $this->footer();
}
}