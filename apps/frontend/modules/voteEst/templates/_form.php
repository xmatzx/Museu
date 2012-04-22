<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<style type="text/css">
  ul.radio_list  { list-style: none; }
  .radio_list li label { display: none; }
</style>

<form action="<?php echo url_for('voteEst/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          <input type="button" onclick="window.location='<?php echo url_for('estampagem/show?id='.$objecto_id) ?>'" value="<?php echo __('Voltar') ?>"/>
          <input type="submit" value="<?php echo __('Votar') ?>" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th style="vertical-align: top;"><?php echo __('Votação') ?></th>
        <td><?php echo $form['vote']?></td>
      </tr>
    </tbody>
  </table>
</form>
