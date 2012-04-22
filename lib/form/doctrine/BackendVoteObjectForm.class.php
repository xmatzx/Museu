<?php
sfContext::getInstance()->getConfiguration()->loadHelpers('I18N');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BackendVoteObjectForm
 *
 * @author matz
 */
class BackendVoteObjectForm extends BaseVoteObjectoForm {
  public function configure()
  {
    parent::configure();
    
    unset($this['created_at'], $this['updated_at']);
    
        $this->widgetSchema->setLabels(array(
        'user_id'      => __('Autor'),
        'aproved'   => __('Aprovado?'),
        'objecto_id' => __('Objecto'),
        'vote' => __('Votação')
    ));
  }
}

?>
