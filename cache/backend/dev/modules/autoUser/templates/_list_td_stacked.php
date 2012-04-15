<td colspan="4">
  <?php echo __('%%first_name%% - %%last_name%% - %%username%% - %%email_address%%', array('%%first_name%%' => $sf_guard_user->getFirstName(), '%%last_name%%' => $sf_guard_user->getLastName(), '%%username%%' => $sf_guard_user->getUsername(), '%%email_address%%' => $sf_guard_user->getEmailAddress()), 'messages') ?>
</td>
