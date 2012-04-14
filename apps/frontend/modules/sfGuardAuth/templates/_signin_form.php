<div>
  <h1><?php echo __('Login') ?></h1>
  <a href="<?php echo url_for('user/register') ?>" style="margin-right: 15px;">
    <?php echo __('Se ainda não tem conta, registe-se aqui')?>
  </a>
</div>
<div>
  <form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
    <table style="width: 100%">
      <?php echo $form ?>
    </table>
    <div style="width: 60px; left: 350px; bottom: 25px; position: relative;">
      <button type="submit">
        <b><?php echo __('Entrar')?></b>
      </button>
    </div>
  </form>
</div>
