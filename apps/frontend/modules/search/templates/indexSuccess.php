<div class="row" style="min-height: 50px;">
  <div class="span12">
    <div class="well">
      <h5><?php echo __('Pesquisa') ?></h5>
      <hr/>
      <form action="<?php echo url_for('search/find') ?>" method="post" enctype="multipart/form-data" >
        <table style="width: 100%; text-align: left;">
          <tfoot>
            <tr>
              <td colspan="2">
                <input type="submit" value="<?php echo __('Pesquisar') ?>" />
              </td>
            </tr>
          </tfoot>
          <tbody>
            <tr>
              <th><?php echo __('Pesquisar') ?>:</th>
              <td><input type="text" name="slug" id="slug"/></td>
            </tr>
          </tbody>
        </table>
      </form>
    </div>
  </div>
</div>