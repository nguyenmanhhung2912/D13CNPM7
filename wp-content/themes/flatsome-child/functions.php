<?php
// Add custom Theme Functions here
function my_custom_translations( $strings ) {
$text = array(
'Quick View' => 'Xem chi tiết',
'SHOPPING CART' => 'Giỏ hàng',
'CHECKOUT DETAILS' => 'Thanh toán',
'ORDER COMPLETE' => 'Hoàn thành'
);

$strings = str_ireplace( array_keys( $text ), $text, $strings );
return $strings;
}
add_filter( 'gettext', 'my_custom_translations', 20 );
