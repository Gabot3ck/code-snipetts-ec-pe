<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Rutas posibles para cargar wp-load.php
$possible_wp_load_paths = [
    dirname(__FILE__) . '/../wp-load.php',
    dirname(__FILE__) . '/../../wp-load.php',
    dirname(__FILE__) . '/../../../wp-load.php'
];

$wp_loaded = false;

// Intentar cargar WordPress
foreach ($possible_wp_load_paths as $path) {
    if (file_exists($path)) {
        require_once($path);
        $wp_loaded = true;
        break;
    }
}

if (!$wp_loaded) {
    die("No se pudo cargar WordPress.");
}

try {
    // Conectar a la base de datos
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    
    // ID del snippet que deseas eliminar
    $snippet_id = 23;
    
    // Consulta para eliminar el snippet
    $delete_query = $conn->prepare("DELETE FROM wp_snippets WHERE id = ?");
    $delete_query->bind_param("i", $snippet_id);
    
    if ($delete_query->execute()) {
        echo "Snippet con ID $snippet_id eliminado correctamente.\n";
    } else {
        echo "Error al eliminar el snippet: " . $conn->error . "\n";
    }
    
    $delete_query->close();
    $conn->close();
} catch (Exception $e) {
    echo "Excepción capturada: " . $e->getMessage();
}
?>