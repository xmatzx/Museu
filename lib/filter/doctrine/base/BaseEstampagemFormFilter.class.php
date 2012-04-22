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
      'title'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'intentario'   => new sfWidgetFormFilterInput(),
      'designation'  => new sfWidgetFormFilterInput(),
      'overview'     => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'autor'        => new sfWidgetFormFilterInput(),
      'price'        => new sfWidgetFormFilterInput(),
      'rel_date'     => new sfWidgetFormFilterInput(),
      'material'     => new sfWidgetFormFilterInput(),
      'tecnique'     => new sfWidgetFormFilterInput(),
      'colors'       => new sfWidgetFormFilterInput(),
      'altura'       => new sfWidgetFormFilterInput(),
      'largura'      => new sfWidgetFormFilterInput(),
      'imagem'       => new sfWidgetFormFilterInput(),
      'obs'          => new sfWidgetFormFilterInput(),
      'bibliography' => new sfWidgetFormFilterInput(),
      'created_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'title'        => new sfValidatorPass(array('required' => false)),
      'intentario'   => new sfValidatorPass(array('required' => false)),
      'designation'  => new sfValidatorPass(array('required' => false)),
      'overview'     => new sfValidatorPass(array('required' => false)),
      'autor'        => new sfValidatorPass(array('required' => false)),
      'price'        => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'rel_date'     => new sfValidatorPass(array('required' => false)),
      'material'     => new sfValidatorPass(array('required' => false)),
      'tecnique'     => new sfValidatorPass(array('required' => false)),
      'colors'       => new sfValidatorPass(array('required' => false)),
      'altura'       => new sfValidatorPass(array('required' => false)),
      'largura'      => new sfValidatorPass(array('required' => false)),
      'imagem'       => new sfValidatorPass(array('required' => false)),
      'obs'          => new sfValidatorPass(array('required' => false)),
      'bibliography' => new sfValidatorPass(array('required' => false)),
      'created_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
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
      'id'           => 'Number',
      'title'        => 'Text',
      'intentario'   => 'Text',
      'designation'  => 'Text',
      'overview'     => 'Text',
      'autor'        => 'Text',
      'price'        => 'Number',
      'rel_date'     => 'Text',
      'material'     => 'Text',
      'tecnique'     => 'Text',
      'colors'       => 'Text',
      'altura'       => 'Text',
      'largura'      => 'Text',
      'imagem'       => 'Text',
      'obs'          => 'Text',
      'bibliography' => 'Text',
      'created_at'   => 'Date',
      'updated_at'   => 'Date',
    );
  }
}
