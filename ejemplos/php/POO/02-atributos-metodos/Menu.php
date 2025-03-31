<?php
    class Menu {
        private $enlaces = array();
        private $titulos = array();
        
        public function cargarOpcion($en, $tit) {
            $this->enlaces[] = $en;
            $this->titulos[] = $tit;
        }
        
        public function mostrar() {
            for($i=0; $i<count($this->enlaces); $i++) {
                echo '<a href="'.$this->enlaces[$i].'">'.$this->titulos[$i].'</a>';
                if($i < count($this->enlaces)-1) {
                    echo '<br>';
                }
            }
        }
    }
?>