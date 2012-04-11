<?php

/**
 * Objecto filter form base class.
 *
 * @package    museu
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseObjectoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'title'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'overview'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'obs'           => new sfWidgetFormFilterInput(),
      'designation'   => new sfWidgetFormFilterInput(),
      'image'         => new sfWidgetFormFilterInput(),
      'denomination'  => new sfWidgetFormFilterInput(),
      'finality'      => new sfWidgetFormFilterInput(),
      'history'       => new sfWidgetFormFilterInput(),
      'buy_date'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'years'         => new sfWidgetFormFilterInput(),
      'price'         => new sfWidgetFormFilterInput(),
      'specification' => new sfWidgetFormFilterInput(),
      'bibliography'  => new sfWidgetFormFilterInput(),
      'category_id'   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Categoria'), 'add_empty' => true)),
      'created_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'title'         => new sfValidatorPass(array('required' => false)),
      'overview'      => new sfValidatorPass(array('required' => false)),
      'obs'           => new sfValidatorPass(array('required' => false)),
      'designation'   => new sfValidatorPass(array('required' => false)),
      'image'         => new sfValidatorPass(array('required' => false)),
      'denomination'  => new sfValidatorPass(array('required' => false)),
      'finality'      => new sfValidatorPass(array('required' => false)),
      'history'       => new sfValidatorPass(array('required' => false)),
      'buy_date'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'years'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'price'         => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'specification' => new sfValidatorPass(array('required' => false)),
      'bibliography'  => new sfValidatorPass(array('required' => false)),
      'category_id'   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Categoria'), 'column' => 'id')),
      'created_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('objecto_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Objecto';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'title'         => 'Text',
      'overview'      => 'Text',
      'obs'           => 'Text',
      'designation'   => 'Text',
      'image'         => 'Text',
      'denomination'  => 'Text',
      'finality'      => 'Text',
      'history'       => 'Text',
      'buy_date'      => 'Date',
      'years'         => 'Number',
      'price'         => 'Number',
      'specification' => 'Text',
      'bibliography'  => 'Text',
      'category_id'   => 'ForeignKey',
      'created_at'    => 'Date',
      'updated_at'    => 'Date',
    );
  }
}
