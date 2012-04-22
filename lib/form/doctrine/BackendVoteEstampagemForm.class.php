<?php
sfContext::getInstance()->getConfiguration()->loadHelpers('I18N');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BackendVoteEstampagemForm
 *
 * @author matz
 */
class BackendVoteEstampagemForm extends BaseVoteEstampagemForm {
  public function configure()
  {
    parent::configure();
    
    unset($this['created_at'], $this['updated_at']);
    
        $this->widgetSchema->setLabels(array(
        'user_id'      => __('Autor'),
        'aproved'   => __('Aprovado?'),
        'estampagem_id' => __('Estampagem'),
        'vote' => __('Votação')
    ));
  }
}

?>
