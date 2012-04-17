<?php
sfContext::getInstance()->getConfiguration()->loadHelpers('I18N');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class BackendEventoForm extends EventoForm
{
  public function configure()
  {
    parent::configure();
    
    unset(
          $this['created_at'],
          $this['updated_at']
        );
    
    $this->widgetSchema->setLabels(array(
        'title'      => __('Nome do Evento'),
        'overview'   => __('Descrição'),
        'start_date' => __('Data de ínicio'),
        'end_date'   => __('Data de fim'),
        'local_id'   => __('Local')
    ));
  }
}
