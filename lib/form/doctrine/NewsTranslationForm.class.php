<?php

/**
 * NewsTranslation form.
 *
 * @package    museu
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class NewsTranslationForm extends BaseNewsTranslationForm
{
  public function configure()
  {
    $this->widgetSchema->setLabels(array(
          'title'     => __('Título'),
          'resume'    => __('Resumo'),
          'overview'  => __('Descrição')
      ));
  }
}
