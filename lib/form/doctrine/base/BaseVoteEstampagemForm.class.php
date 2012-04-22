<?php

/**
 * VoteEstampagem form base class.
 *
 * @method VoteEstampagem getObject() Returns the current form's model object
 *
 * @package    museu
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseVoteEstampagemForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'estampagem_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Estampagem'), 'add_empty' => false)),
      'user_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => false)),
      'vote'          => new sfWidgetFormChoice(array('choices' => array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5))),
      'aproved'       => new sfWidgetFormInputCheckbox(),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'estampagem_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Estampagem'))),
      'user_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'))),
      'vote'          => new sfValidatorChoice(array('choices' => array(0 => 1, 1 => 2, 2 => 3, 3 => 4, 4 => 5))),
      'aproved'       => new sfValidatorBoolean(array('required' => false)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('vote_estampagem[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'VoteEstampagem';
  }

}
