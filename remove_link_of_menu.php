<?php   
    /**
 * Ocultar elementos específicos del menú de WordPress para ciertos usuarios o roles
 */
function ocultar_elementos_menu_admin() {
    // Obtener el usuario actual
    $usuario_actual = wp_get_current_user();
    
    // ID o nombre de usuario para el que deseas ocultar elementos
    // Puedes usar el ID del usuario o el nombre de usuario
    $usuario_objetivo = 'nombre_del_usuario'; // Cambia esto por el nombre de usuario
    // O por ID: $usuario_objetivo_id = 123; // Cambia esto por el ID del usuario
    
    // Verificar si el usuario actual es el objetivo
    // Puedes usar cualquiera de estas condiciones según prefieras:
    if (in_array('editor', $usuario_actual->roles)) {
    // O por ID: if ($usuario_actual->ID === $usuario_objetivo_id) {
        
        // Lista de elementos del menú para ocultar
        // Formato: 'slug_del_menu' => true
        $menus_a_ocultar = array(
            'rank-math'                     => true, // RankMath SEO
            'snippets'                      => true, // Code Snippets
            'login-customizer'              => true, // Login Customizer
            'edit.php?post_type=acf-field-group' => true, // Advanced Custom Fields
            'woocommerce'                   => false, // WooCommerce (dejamos visible)
            'tools.php'                     => true, // Herramientas
            'options-general.php'           => false, // Ajustes (dejamos visible)
            // Añade más según necesites
        );
        
        // Ocultar submenús específicos de WooCommerce
        $submenus_a_ocultar = array(
            'woocommerce' => array(
                'wc-reports'    => true, // Informes
                'wc-settings'   => true, // Ajustes
                'wc-status'     => true, // Estado
                // Mantener visibles: Pedidos, Cupones, Productos, Clientes
            ),
            // También puedes ocultar submenús de otros menús principales
            'options-general.php' => array(
                'options-writing.php' => true, // Ajustes de escritura
                'options-reading.php' => true, // Ajustes de lectura
                // Mantener otros ajustes visibles
            ),
        );
        
        // Aplicar filtro para los menús principales
        global $menu;
        if (is_array($menu)) {
            foreach ($menu as $clave => $item) {
                if (isset($item[2]) && isset($menus_a_ocultar[$item[2]]) && $menus_a_ocultar[$item[2]]) {
                    unset($menu[$clave]);
                }
            }
        }
        
        // Aplicar filtro para los submenús
        global $submenu;
        if (is_array($submenu)) {
            foreach ($submenus_a_ocultar as $parent_slug => $submenu_items) {
                if (isset($submenu[$parent_slug]) && is_array($submenu[$parent_slug])) {
                    foreach ($submenu[$parent_slug] as $clave => $item) {
                        if (isset($item[2]) && isset($submenu_items[$item[2]]) && $submenu_items[$item[2]]) {
                            unset($submenu[$parent_slug][$clave]);
                        }
                    }
                }
            }
        }
    }
}

// Añadir la función al hook admin_menu con alta prioridad para que se ejecute después de que todos los menús están registrados
add_action('admin_menu', 'ocultar_elementos_menu_admin', 999);