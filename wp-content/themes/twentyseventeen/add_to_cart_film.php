<?
if(!empty($_REQUEST['film']))
{
	require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-config.php');
	
	//global $woocommerce;
	$woocommerce->cart->empty_cart();
	
	if($woocommerce->cart->add_to_cart($_REQUEST['film']))
	{
		wp_safe_redirect('/checkout/');
		exit();
	}
	
	wp_safe_redirect($_SERVER['HTTP_REFERER']);
	exit();
}
?>