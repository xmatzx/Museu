<?php
sfContext::getInstance()->getConfiguration()->loadHelpers('I18N');
/**
 * sfGuardUser form.
 *
 * @package    museu
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrinePluginFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sfGuardUserForm extends PluginsfGuardUserForm
{
  public function configure()
  {
    $this->widgetSchema['password'] = new sfWidgetFormInputPassword();
    $this->widgetSchema['password_again'] = new sfWidgetFormInputPassword();
    
    $this->validatorSchema['password_again'] = clone $this->validatorSchema['password'];
    
    $this->mergePostValidator(new sfValidatorSchemaCompare('password', sfValidatorSchemaCompare::EQUAL, 'password_again', array(), array('invalid' => __('A password deve coincidir.'))));
    
    $this->validatorSchema['email_address'] = new sfValidatorEmail(array(), array('invalid' => __('O email é inválido.')));
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
    
    $this->widgetSchema->setLabels(array(
        'first_name'      => __('Primeiro Nome'),
        'last_name'       => __('Último Nome'),
        'email_address'   => __('Email'),
        'username'        => __('Username'),
        'password_again'  => __('Reescreva a Password')
    ));
  }
}
