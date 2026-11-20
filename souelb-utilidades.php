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

