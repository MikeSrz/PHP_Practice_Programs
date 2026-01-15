<?php
/*
1) Crea el archivo “Empleado.php” donde se crea una clase Empleado con su nombre, apellidos y
sueldo. Encapsula las propiedades mediante getters/setters y añade métodos para:
• Obtener su nombre completo → getNombreCompleto(): string
• Que devuelva un booleano indicando si debe o no pagar impuestos (se pagan cuando el
sueldo es superior a 3333€) → debePagarImpuestos(): bool

*/

class Empleado {
    public function __construct(
        private String $nombre = "",
        private String $apellidos = "",
        private float $sueldo = ""  
    ){}
    
    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellidos;
    }

    public function getSueldo(){
        return $this->sueldo;
    }

    public function getNombreCompleto(){
        return $this->nombre." ".$this->apellidos;
    }

    public function debePagarImpuestos(){
        $result = False; 
        if ($this->sueldo > 3333) {
            return True;       
        } else {
            return False;
        }
    }
    }
?>
