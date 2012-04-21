<?php
sfContext::getInstance()->getConfiguration()->loadHelpers('I18N');
/**
 * CommentObject form.
 *
 * @package    museu
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CommentObjectForm extends BaseCommentObjectForm
{
  public function configure()
  {
    unset($this['aproved'], $this['created_at'], $this['updated_at']);
    
    $this->widgetSchema['user_id'] = new sfWidgetFormInputHidden();
    $this->widgetSchema['objecto_id'] = new sfWidgetFormInputHidden();
    
    $this->widgetSchema['comment']->setLabel(__('Comentário'));
  }
}
