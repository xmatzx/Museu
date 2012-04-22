<?php

/**
 * Estampagem filter form base class.
 *
 * @package    museu
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEstampagemFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'intentario'        => new sfWidgetFormFilterInput(),
      'designation'       => new sfWidgetFormFilterInput(),
      'overview'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'autor'             => new sfWidgetFormFilterInput(),
      'price'             => new sfWidgetFormFilterInput(),
      'rel_date'          => new sfWidgetFormFilterInput(),
      'material'          => new sfWidgetFormFilterInput(),
      'tecnique'          => new sfWidgetFormFilterInput(),
      'colors'            => new sfWidgetFormFilterInput(),
      'altura'            => new sfWidgetFormFilterInput(),
      'largura'           => new sfWidgetFormFilterInput(),
      'imagem'            => new sfWidgetFormFilterInput(),
      'obs'               => new sfWidgetFormFilterInput(),
      'bibliography'      => new sfWidgetFormFilterInput(),
      'category_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Categoria'), 'add_empty' => true)),
      'super_category_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('SuperCategoria'), 'add_empty' => true)),
      'owner_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Owner'), 'add_empty' => true)),
      'local_id'          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Local'), 'add_empty' => true)),
      'tipolocia_id'      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Tipologia'), 'add_empty' => true)),
      'incorporation_id'  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Incorporacao'), 'add_empty' => true)),
      'featured'          => new sfWidgetFormChoice(array('choices' => array('' => 'yes or no', 1 => 'yes', 0 => 'no'))),
      'created_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'        => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'title'             => new sfValidatorPass(array('required' => false)),
      'intentario'        => new sfValidatorPass(array('required' => false)),
      'designation'       => new sfValidatorPass(array('required' => false)),
      'overview'          => new sfValidatorPass(array('required' => false)),
      'autor'             => new sfValidatorPass(array('required' => false)),
      'price'             => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rel_date'          => new sfValidatorPass(array('required' => false)),
      'material'          => new sfValidatorPass(array('required' => false)),
      'tecnique'          => new sfValidatorPass(array('required' => false)),
      'colors'            => new sfValidatorPass(array('required' => false)),
      'altura'            => new sfValidatorPass(array('required' => false)),
      'largura'           => new sfValidatorPass(array('required' => false)),
      'imagem'            => new sfValidatorPass(array('required' => false)),
      'obs'               => new sfValidatorPass(array('required' => false)),
      'bibliography'      => new sfValidatorPass(array('required' => false)),
      'category_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Categoria'), 'column' => 'id')),
      'super_category_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('SuperCategoria'), 'column' => 'id')),
      'owner_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Owner'), 'column' => 'id')),
      'local_id'          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Local'), 'column' => 'id')),
      'tipolocia_id'      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Tipologia'), 'column' => 'id')),
      'incorporation_id'  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Incorporacao'), 'column' => 'id')),
      'featured'          => new sfValidatorChoice(array('required' => false, 'choices' => array('', 1, 0))),
      'created_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'        => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('estampagem_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Estampagem';
  }

  public function getFields()
  {
    return array(
      'id'                => 'Number',
      'title'             => 'Text',
      'intentario'        => 'Text',
      'designation'       => 'Text',
      'overview'          => 'Text',
      'autor'             => 'Text',
      'price'             => 'Number',
      'rel_date'          => 'Text',
      'material'          => 'Text',
      'tecnique'          => 'Text',
      'colors'            => 'Text',
      'altura'            => 'Text',
      'largura'           => 'Text',
      'imagem'            => 'Text',
      'obs'               => 'Text',
      'bibliography'      => 'Text',
      'category_id'       => 'ForeignKey',
      'super_category_id' => 'ForeignKey',
      'owner_id'          => 'ForeignKey',
      'local_id'          => 'ForeignKey',
      'tipolocia_id'      => 'ForeignKey',
      'incorporation_id'  => 'ForeignKey',
      'featured'          => 'Boolean',
      'created_at'        => 'Date',
      'updated_at'        => 'Date',
    );
  }
}
