<?php use_helper('I18N', 'Date') ?>
<?php include_partial('objecto/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Novo Objecto', array(), 'messages') ?></h1>

  <?php include_partial('objecto/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('objecto/form_header', array('objecto' => $objecto, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('objecto/form', array('objecto' => $objecto, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('objecto/form_footer', array('objecto' => $objecto, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
