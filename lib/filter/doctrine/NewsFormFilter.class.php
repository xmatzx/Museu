<?php
sfContext::getInstance()->getConfiguration()->loadHelpers('I18N');
/**
 * News filter form.
 *
 * @package    museu
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class NewsFormFilter extends BaseNewsFormFilter
{
  public function configure()
  {
    $this->widgetSchema->setLabels(array(
        'user_id'     => __('Autor'),
        'featured'    => __('Destaque'),
        'created_at'  => __('Criada em')
    ));
  }
}
