<td class="sf_admin_foreignkey sf_admin_list_td_user_id">
  <?php echo $news->getUserId() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_featured">
  <?php echo get_partial('news/list_field_boolean', array('value' => $news->getFeatured())) ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($news->getUpdatedAt()) ? format_date($news->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
