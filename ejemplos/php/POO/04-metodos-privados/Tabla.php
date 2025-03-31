<?php
    class Tabla {
        private $matriz = array();
        private $numFilas;
        private $numColumnas;
        private $estilo;

        public function __construct($filas, $columnas, $estilo) {
            $this->numFilas = $filas;
            $this->numColumnas = $columnas;
            $this->estilo = $estilo;
        }

        public function cargar($fila, $columna, $valor) {
            $this->matriz[$fila][$columna] = $valor; 
        }

        private function dibujar() {
            echo "<table style='$this->estilo'>";
        }

        private function inicio_filas() {
            echo "<tr>";
        }

        private function mostrar_dato($row, $col){
            echo '<td style="'.$this->estilo.'">';
            echo $this->matriz[$row][$col];
            echo '</td>';
        }

        private function fin_filas() {
            echo "</tr>";
        }

        private function fin() {
            echo "</table>";
        }

        public function mostrar() {
            $this->dibujar();
            for ($i = 0; $i < $this->numFilas; $i++) {
                $this->inicio_filas();
                for ($j = 0; $j < $this->numColumnas; $j++) {
                    $this->mostrar_dato($i, $j);
                }
                $this->fin_filas();
            }
            $this->fin();
        }
    }
?>