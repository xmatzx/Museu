<?php

/**
 * voteEst actions.
 *
 * @package    museu
 * @subpackage voteEst
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class voteEstActions extends sfActions
{
  public function executeNew(sfWebRequest $request)
  {
    $this->objecto_id = $request->getParameter('obj');
    
    $voted = Doctrine::getTable('VoteEstampagem')->createQuery('v')
            ->where('v.estampagem_id = ?', $this->objecto_id)
            ->addWhere('v.user_id = ?', $this->getUser()->getGuardUser()->getId())
            ->fetchOne();
    
    if($voted)
      $this->redirect ('voteEst/edit?id='.$voted->getId());
    
    $this->form = new VoteEstampagemForm();
    $this->form->setDefaults(array(
      'user_id'    => $this->getUser()->getGuardUser()->getId(),
      'estampagem_id' => $this->objecto_id
    ));
    
    $this->setLayout('layout_box');
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new VoteEstampagemForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
    $this->setLayout('layout_box');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($vote_estampagem = Doctrine_Core::getTable('VoteEstampagem')->find(array($request->getParameter('id'))), sprintf('Object vote_estampagem does not exist (%s).', $request->getParameter('id')));
    $this->form = new VoteEstampagemForm($vote_estampagem);
    
    $this->objecto_id = $vote_estampagem->getEstampagem()->getId();
    
    $this->setLayout('layout_box');
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($vote_estampagem = Doctrine_Core::getTable('VoteEstampagem')->find(array($request->getParameter('id'))), sprintf('Object vote_estampagem does not exist (%s).', $request->getParameter('id')));
    $this->form = new VoteEstampagemForm($vote_estampagem);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
    $this->setLayout('layout_box');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($vote_estampagem = Doctrine_Core::getTable('VoteEstampagem')->find(array($request->getParameter('id'))), sprintf('Object vote_estampagem does not exist (%s).', $request->getParameter('id')));
    $vote_estampagem->delete();

    $this->redirect('voteEst/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $vote_estampagem = $form->save();

      $this->getUser()->setFlash('success', ($vote_estampagem->isNew() ? sfContext::getInstance()->getI18N()->__('Voto inserido com sucesso.') : sfContext::getInstance()->getI18N()->__('Voto actualizado com sucesso.')));
      $this->redirect('estampagem/show?id='.$vote_estampagem->getEstampagem()->getId());
    }
  }
}
