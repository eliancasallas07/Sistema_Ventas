<?php
use Illuminate\Support\Facades\DB;

try {
    DB::connection()->getPdo();
    echo "¡Conexión Laravel exitosa!";
} catch (Exception $e) {
    echo "Error de conexión Laravel: " . $e->getMessage();
}
