<?php
    class Pagina {
        private $cabecera;
        private $cuerpo;
        private $pie;
    }

    public function __construct($texto1, $texto2) {
        $this->cabecera = new Cabecera($texto1);
        $this->cuerpo = new Cuerpo;
        $this->pie = new Pie($texto2);
    }

    public function insertarCuerpo($texto) {
        $this->cuerpo->insertarParrafo($texto);
    }

    public function graficar(){
        $this->cabecera->graficar();
        $this->cuerpo->graficar();
        $this->pie->graficar();
    }

    // Implementar clases Cabecera, Cuerpo y Pie

    
?>