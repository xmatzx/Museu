<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('commentObj/'.($form->getObject()->isNew() ? 'create' : 'update').'?obj='.$objecto_id.(!$form->getObject()->isNew() ? '&id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
  <input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          <input type="button" onclick="window.location='<?php echo url_for('objecto/show?id='.$objecto_id) ?>'" value="<?php echo __('Voltar') ?>"/>
          <input type="submit" value="<?php echo __('Inserir') ?>" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <?php echo $form ?>
    </tbody>
  </table>
</form>
