<?php
namespace Model;

class Cita extends ActiveRecord {
    protected static $tabla = 'citas';
    protected static $columnasDB = ['id', 'fecha', 'hora', 'usuarioId'];

    // ... constructor y atributos ...

    public function validar() {
        if(!$this->fecha) {
            self::$alertas['error'][] = 'La fecha es obligatoria';
        }
        if(!$this->hora) {
            self::$alertas['error'][] = 'La hora es obligatoria';
        }
        return self::$alertas;
    }
}