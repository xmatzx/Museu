<?php use_helper('I18N') ?>

<h2><?php echo __('Oops! The page you have asked for is restricted and you cannot gain access without authorisation.', null, 'sf_guard') ?></h2>

<p><?php echo sfContext::getInstance()->getRequest()->getUri() ?></p>

<h3><?php echo __('Login below', null, 'sf_guard') ?></h3>

<?php echo get_component('sfGuardAuth', 'signin_form') ?>