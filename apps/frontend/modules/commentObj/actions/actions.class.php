<?php

/**
 * commentObj actions.
 *
 * @package    museu
 * @subpackage commentObj
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class commentObjActions extends sfActions
{
  public function executeNew(sfWebRequest $request)
  {
    $this->objecto_id = $request->getParameter('obj');
    
    $this->form = new CommentObjectForm();
    $this->form->setDefaults(array(
        'user_id'    => $this->getUser()->getGuardUser()->getId(),
        'objecto_id' => $this->objecto_id
    ));
    
    $this->setLayout('layout_box');
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->objecto_id = $request->getParameter('obj');
    $this->form = new CommentObjectForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
    
    $this->setLayout('layout_box');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($comment_object = Doctrine_Core::getTable('CommentObject')->find(array($request->getParameter('id'))), sprintf('Object comment_object does not exist (%s).', $request->getParameter('id')));
    
    $this->objecto_id = $comment_object->getObjecto()->getId();
    $this->form = new CommentObjectForm($comment_object);
    
    $this->setLayout('layout_box');
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($comment_object = Doctrine_Core::getTable('CommentObject')->find(array($request->getParameter('id'))), sprintf('Object comment_object does not exist (%s).', $request->getParameter('id')));
    
    $this->objecto_id = $request->getParameter('obj');
    $this->form = new CommentObjectForm($comment_object);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
    $this->setLayout('layout_box');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($comment_object = Doctrine_Core::getTable('CommentObject')->find(array($request->getParameter('id'))), sprintf('Object comment_object does not exist (%s).', $request->getParameter('id')));
    $comment_object->delete();

    $this->redirect('commentObj/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $comment_object = $form->save();

      $this->getUser()->setFlash('success', sfContext::getInstance()->getI18N()->__('Comentário inserido com sucesso.'));
      
      $this->redirect('objecto/show?id='.$comment_object->getObjecto()->getId());
    }
  }
}
