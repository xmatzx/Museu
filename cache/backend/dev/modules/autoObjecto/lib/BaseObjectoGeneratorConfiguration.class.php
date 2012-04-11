<?php

/**
 * objecto module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage objecto
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseObjectoGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%title%% - %%denomination%% - %%specification%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Lista de Objectos';
  }

  public function getEditTitle()
  {
    return 'Editando Objecto "%%title%%""';
  }

  public function getNewTitle()
  {
    return 'Novo Objecto';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'title',  1 => 'denomination',  2 => 'specification',);
  }

  public function getFormDisplay()
  {
    return array(  0 => 'title',  1 => 'category_id',  2 => 'designation',  3 => 'denomination',  4 => 'overview',  5 => 'finality',  6 => 'history',  7 => 'buy_date',  8 => 'years',  9 => 'price',  10 => 'specification',  11 => 'bibliography',  12 => 'image',  13 => 'obs',);
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'title',  1 => 'denomination',  2 => 'specification',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'overview' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'obs' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'designation' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'image' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'denomination' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'finality' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'history' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'buy_date' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'years' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'price' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'specification' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'bibliography' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'category_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'title' => array(  'label' => 'Nome',),
      'overview' => array(),
      'obs' => array(),
      'designation' => array(),
      'image' => array(),
      'denomination' => array(  'label' => 'Denominação Genérica',),
      'finality' => array(),
      'history' => array(),
      'buy_date' => array(),
      'years' => array(),
      'price' => array(),
      'specification' => array(  'label' => 'Especificação',),
      'bibliography' => array(),
      'category_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'title' => array(  'label' => 'Nome',),
      'overview' => array(),
      'obs' => array(),
      'designation' => array(),
      'image' => array(),
      'denomination' => array(  'label' => 'Denominação Genérica',),
      'finality' => array(),
      'history' => array(),
      'buy_date' => array(),
      'years' => array(),
      'price' => array(),
      'specification' => array(  'label' => 'Especificação',),
      'bibliography' => array(),
      'category_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'title' => array(),
      'overview' => array(),
      'obs' => array(),
      'designation' => array(),
      'image' => array(),
      'denomination' => array(),
      'finality' => array(),
      'history' => array(),
      'buy_date' => array(),
      'years' => array(),
      'price' => array(),
      'specification' => array(),
      'bibliography' => array(),
      'category_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'title' => array(),
      'overview' => array(),
      'obs' => array(),
      'designation' => array(),
      'image' => array(),
      'denomination' => array(),
      'finality' => array(),
      'history' => array(),
      'buy_date' => array(),
      'years' => array(),
      'price' => array(),
      'specification' => array(),
      'bibliography' => array(),
      'category_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'title' => array(),
      'overview' => array(),
      'obs' => array(),
      'designation' => array(),
      'image' => array(),
      'denomination' => array(),
      'finality' => array(),
      'history' => array(),
      'buy_date' => array(),
      'years' => array(),
      'price' => array(),
      'specification' => array(),
      'bibliography' => array(),
      'category_id' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'BackendObjectoForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'ObjectoFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
