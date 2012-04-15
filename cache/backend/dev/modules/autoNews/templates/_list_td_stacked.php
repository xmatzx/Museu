<td colspan="3">
  <?php echo __('%%user_id%% - %%featured%% - %%updated_at%%', array('%%user_id%%' => $news->getUserId(), '%%featured%%' => get_partial('news/list_field_boolean', array('value' => $news->getFeatured())), '%%updated_at%%' => false !== strtotime($news->getUpdatedAt()) ? format_date($news->getUpdatedAt(), "f") : '&nbsp;'), 'messages') ?>
</td>
