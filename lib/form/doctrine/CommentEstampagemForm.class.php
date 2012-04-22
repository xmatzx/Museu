<?php
sfContext::getInstance()->getConfiguration()->loadHelpers('I18N');
/**
 * CommentEstampagem form.
 *
 * @package    museu
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CommentEstampagemForm extends BaseCommentEstampagemForm
{
  public function configure()
  {
    unset($this['aproved'], $this['created_at'], $this['updated_at']);
    
    $this->widgetSchema['user_id'] = new sfWidgetFormInputHidden();
    $this->widgetSchema['estampagem_id'] = new sfWidgetFormInputHidden();
    
    $this->widgetSchema['comment']->setLabel(__('Comentário'));
  }
}
