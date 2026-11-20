<?php
/**
 * Plugin Name: souelb-utilidades
 * Description: Utilidades del blog Flag Hunters: caja de contacto en las entradas, código corto [anio], ocultar la versión de WordPress y pantalla de acceso propia.
 * Version:     1.0.0
 * Author:      Soukaina El Bekbachi
 * Text Domain: souelb-utilidades
 */

// Protección contra el acceso directo: si no se carga desde WordPress, se detiene
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/* =========================================================
 * Petición 3: caja «¿Te ha gustado?» al final de las entradas
 * ========================================================= */
function souelb_caja_contacto( $content ) {
    // Solo en entradas individuales (no páginas), en el bucle y en la consulta principal
    if ( is_singular( 'post' ) && in_the_loop() && is_main_query() ) {
        $pagina = get_page_by_path( 'contacto' );
        $url    = $pagina ? get_permalink( $pagina ) : home_url( '/contacto/' );

        $content .= '<div class="souelb-caja-contacto">¿Te ha gustado? <a href="'
                  . esc_url( $url ) . '">Escríbeme desde Contacto</a></div>';
    }
    return $content; // un filtro siempre devuelve el valor
}
add_filter( 'the_content', 'souelb_caja_contacto' );

/* =========================================================
 * Petición 4: código corto [anio] con el año actual
 * ========================================================= */
function souelb_shortcode_anio() {
    return esc_html( wp_date( 'Y' ) ); // devuelve, no imprime
}
add_shortcode( 'anio', 'souelb_shortcode_anio' );

/* =========================================================
 * Petición 5: quitar la versión de WordPress del <head>
 * ========================================================= */
remove_action( 'wp_head', 'wp_generator' );

/* =========================================================
 * Petición 6: pantalla de acceso propia
 * ========================================================= */

// El logotipo enlaza a la portada del blog (no a wordpress.org)
function souelb_login_url() {
    return home_url( '/' );
}
add_filter( 'login_headerurl', 'souelb_login_url' );

// Texto del enlace del logotipo: el nombre del blog
function souelb_login_texto() {
    return get_bloginfo( 'name' );
}
add_filter( 'login_headertext', 'souelb_login_texto' );

// Aviso sobre el formulario: se añade al mensaje existente y se devuelve
function souelb_login_aviso( $message ) {
    $aviso = '<p class="message">' . esc_html( 'Acceso restringido al equipo de ' . get_bloginfo( 'name' ) ) . '</p>';
    return $message . $aviso;
}
add_filter( 'login_message', 'souelb_login_aviso' );

