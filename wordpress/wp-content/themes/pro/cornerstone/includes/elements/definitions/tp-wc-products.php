<?php

// =============================================================================
// CORNERSTONE/INCLUDES/ELEMENTS/DEFINITIONS/TP-WC-PRODUCTS.PHP
// -----------------------------------------------------------------------------
// V2 element definitions.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Values
//   02. Style
//   03. Render
//   04. Builder Setup
//   05. Register Element
// =============================================================================

// Values
// =============================================================================

$values = cs_compose_values(
  'products:main-loop',
  'effects',
  'effects:alt',
  'effects:scroll',
  'omega',
  'omega:toggle-hash'
);



// Style
// =============================================================================

function x_element_style_tp_wc_products_main_loop() {
  $style = cs_get_partial_style( 'products' );

  $style .= cs_get_partial_style( 'effects', array(
    'selector'   => '.x-wc-products',
    'children'   => [],
    'key_prefix' => ''
  ) );

  return $style;
}



// Render
// =============================================================================

function x_element_render_tp_wc_products_main_loop( $data ) {
  return cs_get_partial_view( 'products', $data );
}



// Builder Setup
// =============================================================================

function x_element_builder_setup_tp_wc_products_main_loop() {
  return cs_compose_controls(
    cs_partial_controls( 'products', array( 'type' => 'main-loop' ) ),
    cs_partial_controls( 'effects' ),
    cs_partial_controls( 'omega', array( 'add_toggle_hash' => true ) )
  );
}



// Register Element
// =============================================================================

cs_register_element( 'tp-wc-products', [
  'title'   => __( 'Products', '__x__' ),
  'values'  => $values,
  'builder' => 'x_element_builder_setup_tp_wc_products_main_loop',
  'style'   => 'x_element_style_tp_wc_products_main_loop',
  'render'  => 'x_element_render_tp_wc_products_main_loop',
  'icon'    => 'native',
  'active'  => class_exists( 'WC_API' ),
  'group'   => 'woocommerce',
] );
