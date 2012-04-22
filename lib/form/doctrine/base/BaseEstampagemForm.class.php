<?php

/**
 * Estampagem form base class.
 *
 * @method Estampagem getObject() Returns the current form's model object
 *
 * @package    museu
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEstampagemForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                => new sfWidgetFormInputHidden(),
      'title'             => new sfWidgetFormInputText(),
      'intentario'        => new sfWidgetFormInputText(),
      'designation'       => new sfWidgetFormInputText(),
      'overview'          => new sfWidgetFormTextarea(),
      'autor'             => new sfWidgetFormInputText(),
      'price'             => new sfWidgetFormInputText(),
      'rel_date'          => new sfWidgetFormInputText(),
      'material'          => new sfWidgetFormTextarea(),
      'tecnique'          => new sfWidgetFormTextarea(),
      'colors'            => new sfWidgetFormInputText(),
      'altura'            => new sfWidgetFormInputText(),
      'largura'           => new sfWidgetFormInputText(),
      'imagem'            => new sfWidgetFormInputText(),
      'obs'               => new sfWidgetFormTextarea(),
      'bibliography'      => new sfWidgetFormTextarea(),
      'category_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Categoria'), 'add_empty' => true)),
      'super_category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SuperCategoria'), 'add_empty' => true)),
      'owner_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Owner'), 'add_empty' => true)),
      'local_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Local'), 'add_empty' => true)),
      'tipolocia_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tipologia'), 'add_empty' => true)),
      'incorporation_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Incorporacao'), 'add_empty' => true)),
      'featured'          => new sfWidgetFormInputCheckbox(),
      'created_at'        => new sfWidgetFormDateTime(),
      'updated_at'        => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'title'             => new sfValidatorString(array('max_length' => 255)),
      'intentario'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'designation'       => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'overview'          => new sfValidatorString(),
      'autor'             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'price'             => new sfValidatorNumber(array('required' => false)),
      'rel_date'          => new sfValidatorString(array('max_length' => 125, 'required' => false)),
      'material'          => new sfValidatorString(array('required' => false)),
      'tecnique'          => new sfValidatorString(array('required' => false)),
      'colors'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'altura'            => new sfValidatorString(array('max_length' => 125, 'required' => false)),
      'largura'           => new sfValidatorString(array('max_length' => 125, 'required' => false)),
      'imagem'            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'obs'               => new sfValidatorString(array('required' => false)),
      'bibliography'      => new sfValidatorString(array('required' => false)),
      'category_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Categoria'), 'required' => false)),
      'super_category_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('SuperCategoria'), 'required' => false)),
      'owner_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Owner'), 'required' => false)),
      'local_id'          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Local'), 'required' => false)),
      'tipolocia_id'      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Tipologia'), 'required' => false)),
      'incorporation_id'  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Incorporacao'), 'required' => false)),
      'featured'          => new sfValidatorBoolean(array('required' => false)),
      'created_at'        => new sfValidatorDateTime(),
      'updated_at'        => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('estampagem[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Estampagem';
  }

}
