<?php

class frontendConfiguration extends sfApplicationConfiguration
{
  public function configure()
  {
    sfValidatorBase::setDefaultMessage('required', 'Campo requerido.');
    sfValidatorBase::setDefaultMessage('invalid', 'Inválido.');
  }
}
