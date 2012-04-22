<div id="InfoGeral" class="well">
  <div class="news">
    <h2><?php echo $evento->getTitle() ?></h2>
    <table style="text-align: left;">
      <tbody>
        <tr>
          <th><?php echo $evento->getTitle() ?></th>
        </tr>
        <tr>
          <td><?php echo $evento->getOverview(ESC_RAW) ?></td>
        </tr>
        <tr>
          <td><?php echo __('Local: ') . $evento->getLocal()->getTitle() ?></td>
        </tr>
        <tr>
          <td>
            <?php echo __('De ') . $date->format($evento->getStartDate(), 'D') . __(' a ') . $date->format($evento->getEndDate(), 'D') ?>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>