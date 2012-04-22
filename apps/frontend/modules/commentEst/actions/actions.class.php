<?php

/**
 * commentEst actions.
 *
 * @package    museu
 * @subpackage commentEst
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class commentEstActions extends sfActions
{
  public function executeNew(sfWebRequest $request)
  {
    $this->objecto_id = $request->getParameter('obj');
    
    $this->form = new CommentEstampagemForm();
    $this->form->setDefaults(array(
        'user_id'    => $this->getUser()->getGuardUser()->getId(),
        'estampagem_id' => $this->objecto_id
    ));
    
    $this->setLayout('layout_box');
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->objecto_id = $request->getParameter('obj');
    
    $this->form = new CommentEstampagemForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
    
    $this->setLayout('layout_box');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($comment_estampagem = Doctrine_Core::getTable('CommentEstampagem')->find(array($request->getParameter('id'))), sprintf('Object comment_estampagem does not exist (%s).', $request->getParameter('id')));
    
    $this->objecto_id = $comment_estampagem->getEstampagem()->getId();
            
    $this->form = new CommentEstampagemForm($comment_estampagem);
    
    $this->setLayout('layout_box');
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($comment_estampagem = Doctrine_Core::getTable('CommentEstampagem')->find(array($request->getParameter('id'))), sprintf('Object comment_estampagem does not exist (%s).', $request->getParameter('id')));
    
    $this->objecto_id = $request->getParameter('obj');
    $this->form = new CommentEstampagemForm($comment_estampagem);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
    
    $this->setLayout('layout_box');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($comment_estampagem = Doctrine_Core::getTable('CommentEstampagem')->find(array($request->getParameter('id'))), sprintf('Object comment_estampagem does not exist (%s).', $request->getParameter('id')));
    $comment_estampagem->delete();

    $this->redirect('commentEst/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $comment_estampagem = $form->save();

      $this->getUser()->setFlash('success', sfContext::getInstance()->getI18N()->__('Comentário inserido com sucesso.'));
      
      $this->redirect('estampagem/show?id='.$comment_estampagem->getEstampagem()->getId());
    }
  }
}
