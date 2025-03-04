<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$possible_wp_load_paths = [
    dirname(__FILE__) . '/../wp-load.php',
    dirname(__FILE__) . '/../../wp-load.php',
    dirname(__FILE__) . '/../../../wp-load.php'
];

$wp_loaded = false;

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
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }
    
    // Consulta en la tabla wp_snippets
    $snippets_query = "SELECT * FROM wp_snippets";
    $snippets_result = $conn->query($snippets_query);
    
    if ($snippets_result) {
        echo "\nSnippets encontrados:\n";
        while ($snippet = $snippets_result->fetch_assoc()) {
            echo "ID: " . $snippet['id'] . "\n";
            echo "Nombre: " . $snippet['name'] . "\n";
            echo "Estado: " . $snippet['active'] . "\n";
            echo "-----------------------------\n";
        }
    } else {
        echo "\nNo se encontraron snippets o hubo un error en la consulta.\n";
        echo "Error: " . $conn->error . "\n";
    }
    
    $conn->close();
} catch (Exception $e) {
    echo "Excepción capturada: " . $e->getMessage();
}
?>