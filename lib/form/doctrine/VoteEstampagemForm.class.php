<?php
sfContext::getInstance()->getConfiguration()->loadHelpers('I18N');
/**
 * VoteEstampagem form.
 *
 * @package    museu
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class VoteEstampagemForm extends BaseVoteEstampagemForm
{
  public function configure()
  {
    unset($this['aproved'], $this['created_at'], $this['updated_at']);
    
    $this->widgetSchema['user_id'] = new sfWidgetFormInputHidden();
    $this->widgetSchema['estampagem_id'] = new sfWidgetFormInputHidden();
    $this->widgetSchema['vote'] = new sfWidgetFormChoice(array('choices' => array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5), 'multiple' => false, 'expanded' => true), array('class' => 'star'));
    
    $this->widgetSchema['vote']->setLabel(__('Votação'));
  }
}
