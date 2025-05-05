<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blocksy
 */

?><!doctype html>
<html <?php language_attributes(); ?><?php echo blocksy_html_attr() ?>>
<head>
	<?php do_action('blocksy:head:start') ?>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, viewport-fit=cover">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- importar animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<!-- importar icons bootsatrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<!-- Precargar la imagen de fondo con alta prioridad -->
	<link rel="preload" href="https://www.tiendascanavini.pe/wp-content/uploads/2025/01/bg-carrusel-header-1.jpg" as="image" fetchpriority="high">
	<!-- Precargar la primera imagen PNG del carrusel -->
	<link rel="preload" href="https://www.tiendascanavini.pe/wp-content/uploads/2025/01/cerraduras-digitales-slide1.png" as="image" fetchpriority="high">
	<!-- importar chatbot fastbots -->
	<script defer src="https://app.fastbots.ai/embed.js" data-bot-id="cm4lgw16e02ans5bnoiqlv9zv"></script>
	
	<?php wp_head(); ?>
	<?php do_action('blocksy:head:end') ?>
</head>

<?php
	ob_start();
	blocksy_output_header();
	$global_header = ob_get_clean();
?>

<body <?php body_class(); ?> <?php echo blocksy_body_attr() ?>>

<?php
	if (function_exists('wp_body_open')) {
		wp_body_open();
	}
?>

<div id="main-container">
	<?php
		do_action('blocksy:header:before');

		echo $global_header;

		do_action('blocksy:header:after');
		do_action('blocksy:content:before');
	?>

	<main <?php echo blocksy_main_attr() ?>>

		<?php
			do_action('blocksy:content:top');
			blocksy_before_current_template();
		?>
