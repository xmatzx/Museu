<?php

/**
 * voteObj actions.
 *
 * @package    museu
 * @subpackage voteObj
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class voteObjActions extends sfActions
{
  public function executeNew(sfWebRequest $request)
  {
    $this->objecto_id = $request->getParameter('obj');
    
    $voted = Doctrine::getTable('VoteObjecto')->createQuery('v')
            ->where('v.objecto_id = ?', $this->objecto_id)
            ->addWhere('v.user_id = ?', $this->getUser()->getGuardUser()->getId())
            ->fetchOne();
    
    if($voted)
      $this->redirect ('voteObj/edit?id='.$voted->getId());
    
    $this->form = new VoteObjectoForm();
    $this->form->setDefaults(array(
      'user_id'    => $this->getUser()->getGuardUser()->getId(),
      'objecto_id' => $this->objecto_id
    ));
    
    $this->setLayout('layout_box');
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new VoteObjectoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
    $this->setLayout('layout_box');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($vote_objecto = Doctrine_Core::getTable('VoteObjecto')->find(array($request->getParameter('id'))), sprintf('Object vote_objecto does not exist (%s).', $request->getParameter('id')));
    $this->form = new VoteObjectoForm($vote_objecto);
    
    $this->objecto_id = $vote_objecto->getObjecto()->getId();
    
    $this->setLayout('layout_box');
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($vote_objecto = Doctrine_Core::getTable('VoteObjecto')->find(array($request->getParameter('id'))), sprintf('Object vote_objecto does not exist (%s).', $request->getParameter('id')));
    $this->form = new VoteObjectoForm($vote_objecto);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
    $this->setLayout('layout_box');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($vote_objecto = Doctrine_Core::getTable('VoteObjecto')->find(array($request->getParameter('id'))), sprintf('Object vote_objecto does not exist (%s).', $request->getParameter('id')));
    $vote_objecto->delete();

    $this->redirect('voteObj/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $vote_objecto = $form->save();
      
      $this->getUser()->setFlash('success', ($vote_objecto->isNew() ? sfContext::getInstance()->getI18N()->__('Voto inserido com sucesso.') : sfContext::getInstance()->getI18N()->__('Voto actualizado com sucesso.')));
      $this->redirect('objecto/show?id='.$vote_objecto->getObjecto()->getId());
    }
  }
}
