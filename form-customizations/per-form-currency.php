<?php
/**
 * CURRENTLY NOT WORKING.
 *
 * Customizes the currency per form.
 *
 * NOTE: Different payment gateways support different currencies. We highly recommend you thoroughly test your currency customizations prior to going live.
 */

/**
 * @param $args
 *
 * @return mixed
 */
function my_give_per_form_currency_form_id( $args ) {

	if ( isset( $args['form_id'] ) && $args['form_id'] == '1425' ) {
		add_filter( 'give_currency', 'my_give_per_form_currency', 10, 1 );
	}

	return $args;

}

add_filter( 'give_form_args_defaults', 'my_give_per_form_currency_form_id', 10, 1 );

/**
 * Set the Currency Per Form.
 *
 * @return string
 */
function my_give_per_form_currency( $currency ) {
	return 'DKK';
}

/**
 * @param $args
 * @param $donation_ID
 */
function my_give_per_form_currency_payment($args, $donation_ID){


}
add_filter( 'give_payment_add_donation_args', 'my_give_per_form_currency_payment', 10, 2 );
