<?php
sfContext::getInstance()->getConfiguration()->loadHelpers('I18N');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class BackendObjectoForm extends ObjectoForm
{
  public function configure()
  {
    parent::configure();
    unset($this['created_at'], $this['updated_at']);
    
    $this->setWidget('image', new sfWidgetFormInputFileEditable(
                    array(
                        'label' => 'Image',
                        'edit_mode' => !$this->isNew(),
                        'is_image' => true,
                        'with_delete' => false,
                        'template' => '<table class="normal"><tr><td colspan="2">%file%</td></tr><tr><td  colspan="2">%input%</td></tr></table>',
                        'file_src' => $this->getObject()->getImage() ? '/uploads/objectos' . DIRECTORY_SEPARATOR . $this->getObject()->getImage() : '',
                    )
    ));
    
    $this->setValidator('image', new sfValidatorFile(
                    array(
                        'mime_types' => 'web_images',
                        'path' => sfConfig::get('sf_upload_dir') . DIRECTORY_SEPARATOR. 'objectos' . DIRECTORY_SEPARATOR,
                        'required' => false,
                    )
    ));
    
    $this->widgetSchema->setLabels(array(
          'title' => __('Nome'),
          'overview' => __('Descrição'),
          'obs' => __('Observações'),
          'designation' => __('Designação Genérica'),
          'image' => __('Imagem'),
          'denomination' => __('Denominação'),
          'finality' => __('Finalidade'),
          'history' => __('História do Objecto'),
          'buy_date' => __('Data de Incorporação'),
          'years' => __('Anos'),
          'price' => __('Preço'),
          'specification' => __('Especificação'),
          'bibliography' => __('Bibliografia'),
          'category_id' => __('Categoria'),
          'owner_id' => __('Instituição proprietária'),
          'featured' => __('Destaque?'),
          'super_category_id' => __('Super Categoria'),
          'local_id' => __('Localização'),
          'incorporation_id' => __('Modo de Incorporação')
      ));
    
    $this->widgetSchema->setHelps(array('featured' => __('Colocar objecto em destaque?')));
  }
  
  public function bind(array $taintedValues = null, array $taintedFiles = null) {
    if(isset($taintedValues['featured']))
    {
      Doctrine_Query::create()
        ->update('Objecto o')
        ->set('o.featured', '?', false)
        ->where('o.featured = ?', true)
        ->execute();
    }
    
    parent::bind($taintedValues, $taintedFiles);
  }
}