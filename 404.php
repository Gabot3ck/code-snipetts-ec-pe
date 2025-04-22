<?php
/**
 * Página de error 404 (página no encontrada)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Blocksy-Scanavini
 */

get_header();
?>

<div id="primary" class="content-area" style="margin:0 auto; max-width:1440px; background-color: #e0e0e0">
    <main id="main" class="site-main error-404 not-found">
        <div class="container" style="text-align: center; padding: 60px 20px; max-width: 800px; margin: 0 auto;">

            <img src="https://www.tiendascanavini.pe/wp-content/uploads/2025/04/icon-cerradura-digital.png" alt="Error 404- Scanavini" style="width: 180px; max-width: 300px;" />

            <h1 style="font-size: 120px; margin: 0; color: #FA4616;">404</h1>

            <h2 style="font-size: 28px; margin-bottom: 30px;">¡Oops! No pudimos encontrar esta página</h2>
            
            <p style="font-size: 18px; margin-bottom: 30px; color: #666;">
                Parece que la página que estás buscando ya no existe o ha sido movida.
                No te preocupes, te ayudamos a encontrar lo que necesitas.
            </p>
            
            <div style="margin-bottom: 40px;">
                <h3 style="margin-bottom: 15px;">Puedes intentar:</h3>
                <ul style="list-style: none; padding: 0; margin: 0; text-align: center;">
                    <li style="margin-bottom: 10px;">• Verificar la URL para asegurarte de que esté escrita correctamente</li>
                    <li style="margin-bottom: 10px;">• Regresar a la <a href="<?php echo esc_url(home_url('/')); ?>" style="color: #FA4616; text-decoration: none;">página de inicio</a></li>
                    <li style="margin-bottom: 10px;">• Usar la búsqueda para encontrar lo que necesitas</li>
                </ul>
            </div>
            
            <div style="max-width: 400px; margin: 0 auto 30px;">
                <?php get_search_form(); ?>
            </div>
            
            <div style="margin-top: 30px;">
                <h3 style="margin-bottom: 15px;">Productos populares:</h3>
                <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 20px;">
                    <?php
                    // Mostrar productos populares
                    $args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => 3,
                        'meta_key'       => 'total_sales',
                        'orderby'        => 'meta_value_num',
                        'order'          => 'desc',
                    );
                    $popular_products = new WP_Query($args);
                    
                    if ($popular_products->have_posts()) {
                        while ($popular_products->have_posts()) {
                            $popular_products->the_post();
                            global $product;
                            ?>
                            <div style="width: 200px; background: #f9f9f9; padding: 15px; border-radius: 8px; text-align: center;">
                                <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: inherit;">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <div style="margin-bottom: 10px;">
                                            <?php the_post_thumbnail('thumbnail', array('style' => 'max-width: 100%; height: auto;')); ?>
                                        </div>
                                    <?php endif; ?>
                                    <h4 style="font-size: 16px; margin: 0 0 10px; color: #333;"><?php the_title(); ?></h4>
                                    <span style="color: #FA4616; font-weight: bold;"><?php echo $product->get_price_html(); ?></span>
                                </a>
                            </div>
                            <?php
                        }
                        wp_reset_postdata();
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
</div>

<?php
get_footer();