<?php

/**
 * Objecto form base class.
 *
 * @method Objecto getObject() Returns the current form's model object
 *
 * @package    museu
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseObjectoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'title'         => new sfWidgetFormInputText(),
      'overview'      => new sfWidgetFormTextarea(),
      'obs'           => new sfWidgetFormTextarea(),
      'designation'   => new sfWidgetFormInputText(),
      'image'         => new sfWidgetFormInputText(),
      'denomination'  => new sfWidgetFormTextarea(),
      'finality'      => new sfWidgetFormTextarea(),
      'history'       => new sfWidgetFormTextarea(),
      'buy_date'      => new sfWidgetFormDate(),
      'years'         => new sfWidgetFormInputText(),
      'price'         => new sfWidgetFormInputText(),
      'specification' => new sfWidgetFormTextarea(),
      'bibliography'  => new sfWidgetFormTextarea(),
      'category_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Categoria'), 'add_empty' => true)),
      'created_at'    => new sfWidgetFormDateTime(),
      'updated_at'    => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'         => new sfValidatorString(array('max_length' => 255)),
      'overview'      => new sfValidatorString(),
      'obs'           => new sfValidatorString(array('required' => false)),
      'designation'   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'image'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'denomination'  => new sfValidatorString(array('required' => false)),
      'finality'      => new sfValidatorString(array('required' => false)),
      'history'       => new sfValidatorString(array('required' => false)),
      'buy_date'      => new sfValidatorDate(array('required' => false)),
      'years'         => new sfValidatorInteger(array('required' => false)),
      'price'         => new sfValidatorNumber(array('required' => false)),
      'specification' => new sfValidatorString(array('required' => false)),
      'bibliography'  => new sfValidatorString(array('required' => false)),
      'category_id'   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Categoria'), 'required' => false)),
      'created_at'    => new sfValidatorDateTime(),
      'updated_at'    => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('objecto[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Objecto';
  }

}
