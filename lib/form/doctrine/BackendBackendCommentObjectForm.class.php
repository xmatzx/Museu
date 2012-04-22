<?php
sfContext::getInstance()->getConfiguration()->loadHelpers('I18N');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BackendCommentForm
 *
 * @author matz
 */
class BackendCommentObjectForm extends BaseCommentObjectForm {
  public function configure()
  {
    parent::configure();
    
    unset(
          $this['created_at'],
          $this['updated_at']
        );
    
    $this->widgetSchema->setLabels(array(
        'user_id'      => __('Autor'),
        'aproved'   => __('Aprovado?'),
        'comment' => __('Comentário')
    ));
  }
}

?>
