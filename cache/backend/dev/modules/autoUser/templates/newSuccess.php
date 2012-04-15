<?php use_helper('I18N', 'Date') ?>
<?php include_partial('user/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Novo Utilizador', array(), 'messages') ?></h1>

  <?php include_partial('user/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('user/form_header', array('sf_guard_user' => $sf_guard_user, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('user/form', array('sf_guard_user' => $sf_guard_user, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('user/form_footer', array('sf_guard_user' => $sf_guard_user, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
