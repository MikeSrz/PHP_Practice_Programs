<?php

class CuentaAhorros extends CuentaBancaria {
    // Propiedad específica de CuentaAhorros
    private int $limiteRetirosMensuales = 3;
    private int $retirosRealizados = 0;
    
    // Constructor que llama al padre
    public function __construct(
        string $titular,
        float $saldo = 0.0,
        private float $bonificacionAhorro = 0.02 // 2% bonificación
    ) {
        // Llamar al constructor del padre
        parent::__construct($titular, $saldo);
    }
    
    // Sobrescribir retirar para añadir límite mensual
    public function retirar(float $cantidad): void {
        if ($this->retirosRealizados >= $this->limiteRetirosMensuales) {
            throw new Exception("Límite de retiros mensuales alcanzado");
        }
        
        // Llamar al método del padre
        parent::retirar($cantidad);
        
        $this->retirosRealizados++;
    }
    
    // Método específico de CuentaAhorros
    public function aplicarBonificacion(): void {
        $bonificacion = $this->saldo * $this->bonificacionAhorro;
        $this->saldo += $bonificacion;
    }
    
    // Método para reiniciar contador mensual
    public function reiniciarContadorMensual(): void {
        $this->retirosRealizados = 0;
    }
    
    // Getters específicos
    public function getLimiteRetirosMensuales(): int {
        return $this->limiteRetirosMensuales;
    }
    
    public function getRetirosRealizados(): int {
        return $this->retirosRealizados;
    }
    
    public function getBonificacionAhorro(): float {
        return $this->bonificacionAhorro;
    }
}

// EJEMPLO DE USO
try {
    // Usar método estático de la clase padre
    CuentaBancaria::establecerIntereses(0.03);
    
    // Crear cuenta de ahorros
    $cuentaAhorros = new CuentaAhorros("Juan Pérez", 1000.0);
    
    echo "Titular: " . $cuentaAhorros->obtenerTitular() . "\n";
    echo "Saldo inicial: " . $cuentaAhorros->consultarSaldo() . "\n";
    echo "Tasa interés: " . CuentaAhorros::obtenerTasaInteres() . "\n";
    echo "Límite retiros: " . $cuentaAhorros->getLimiteRetirosMensuales() . "\n";
    
    // Depositar (método heredado)
    $cuentaAhorros->depositar(500);
    echo "Saldo después depósito: " . $cuentaAhorros->consultarSaldo() . "\n";
    
    // Retirar (método sobrescrito)
    $cuentaAhorros->retirar(200);
    echo "Saldo después retiro: " . $cuentaAhorros->consultarSaldo() . "\n";
    echo "Retiros realizados: " . $cuentaAhorros->getRetirosRealizados() . "\n";
    
    // Aplicar bonificación (método específico)
    $cuentaAhorros->aplicarBonificacion();
    echo "Saldo con bonificación: " . $cuentaAhorros->consultarSaldo() . "\n";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>