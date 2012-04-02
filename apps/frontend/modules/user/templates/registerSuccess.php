<div class="well">
  <div><h1><?php echo __('Registo') ?></h1></div>
  <div>
    <form method="post" action="<?php echo url_for('user/create') ?>" name="new_user" id="new_user">
      <table style="width: 100%; text-align: left;">
        <tfoot>
          <tr>
            <td colspan="2">
              <?php echo $form->renderHiddenFields(false) ?>
              <button type="submit"><b><?php echo __('Registar')?></b></button>
            </td>
          </tr>
        </tfoot>
        <tbody>
          <?php echo $form ?>
        </tbody>
      </table>
    </form>
  </div>
</div>