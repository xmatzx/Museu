<?php
sfContext::getInstance()->getConfiguration()->loadHelpers('I18N');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class BackendsfGuardUserForm extends sfGuardUserForm
{
  public function configure()
  {
    parent::configure();
    
    unset(
          $this['algorithm'],
          $this['salt'],
          $this['is_active'],
          $this['is_super_admin'],
          $this['last_login'],
          $this['created_at'],
          $this['updated_at'],
          $this['groups_list'],
          $this['permissions_list']
        );
    
    $this->widgetSchema['password'] = new sfWidgetFormInputPassword();
    
    $this->widgetSchema->setLabels(array(
        'first_name'      => __('Primeiro Nome'),
        'last_name'       => __('Último Nome'),
        'email_address'   => __('Email'),
        'username'        => __('Username'),
        'password_again'  => __('Reescreva a Password')
    ));
  }
}
