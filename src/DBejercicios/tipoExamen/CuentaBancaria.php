<?php
class CuentaBancaria{
    public static $tasaInteres = 0;
    public function __construct(
        public string $titular,
        public float $saldo = 0.0
    ){}
    public function depositar(float $cantidad)  {
        if ($cantidad <= 0) {
            throw new Exception("No se puede depositar valores negativos.".$cantidad);
        }
        $this->saldo += $cantidad;
    }
    public function retirar(float $cantidad) {
        if ($this->saldo < $cantidad){
           throw new Exception("No hay fondos suficientes para retirar: ".$cantidad); 
        }
        elseif ($cantidad < 0) {
            throw new Exception("No se puede introducir valores negativos como: ".$cantidad);
        }
        $this->saldo -= $cantidad;
    }

    public function consultarSaldo(){
        return $this->saldo;
    }

    public function obtenerTitular(){
        return $this->titular;
    }
    public static function obtenerTasaInteres(){
        return CuentaBancaria::$tasaInteres;
    }
    public static function establecerIntereses(float $tasa){
        if ($tasa > 1 || $tasa < 0){
            throw new Exception("No se puede establecer ese rango de tasa de interés $tasa");
        }
        CuentaBancaria::$tasaInteres = $tasa;
    }
    
}
?>