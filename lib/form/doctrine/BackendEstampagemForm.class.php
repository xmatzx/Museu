<?php
sfContext::getInstance()->getConfiguration()->loadHelpers('I18N');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BackendEstampagemForm
 *
 * @author matz
 */
class BackendEstampagemForm extends BaseEstampagemForm {
  public function configure()
  {
    parent::configure();
    unset($this['created_at'], $this['updated_at']);
    
    $this->setWidget('imagem', new sfWidgetFormInputFileEditable(
                    array(
                        'label' => 'Image',
                        'edit_mode' => !$this->isNew(),
                        'is_image' => true,
                        'with_delete' => false,
                        'template' => '<table class="normal"><tr><td colspan="2">%file%</td></tr><tr><td  colspan="2">%input%</td></tr></table>',
                        'file_src' => $this->getObject()->getImagem() ? '/uploads/estampagens' . DIRECTORY_SEPARATOR . $this->getObject()->getImagem() : '',
                    )
    ));
    
    $this->setValidator('imagem', new sfValidatorFile(
                    array(
                        'mime_types' => 'web_images',
                        'path' => sfConfig::get('sf_upload_dir') . DIRECTORY_SEPARATOR. 'estampagens' . DIRECTORY_SEPARATOR,
                        'required' => false,
                    )
    ));
    
    $this->widgetSchema->setLabels(array(
          'title' => __('Nome'),
          'intentario' => __('Nº Inventário'),
          'overview' => __('Descrição'),
          'designation' => __('Designação'),
          'autor' => __('Autor'),
          'price' => __('Preço'),
          'rel_date' => __('Data de Realização'),
          'material' => __('Material'),
          'tecnique' => __('Técnicas'),
          'colors' => __('Cores'),
          'obs' => __('Observações'),
          'bibliography' => __('Bibliografia'),
          'category_id' => __('Categoria'),
          'super_category_id' => __('Super Categoria'),
          'owner_id' => __('Instituição proprietária'),
          'imagem' => __('Imagem'),
          'local_id' => __('Localização'),
          'incorporation_id' => __('Modo de Incorporação'),
          'featured' => __('Destaque?'),
          'tipolocia_id' => __('Tipologia')
      ));
    
    $this->widgetSchema->setHelps(array('featured' => __('Colocar estampagem em destaque?')));
  }
}

?>
