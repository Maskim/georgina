<?php
$html = "";

$html = "<div class='ms-right'>";
$html .= do_shortcode($content);
$html .= '</div>';

echo borderland_elated_get_module_part( $html );

