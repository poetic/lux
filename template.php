<?php
function lux_form_alter(&$form, &$form_state, $form_id) {
	$form['actions']['submit']['#attributes']['class'][] = 'btn';
}
