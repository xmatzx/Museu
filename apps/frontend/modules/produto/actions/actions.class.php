<?php

/**
 * produto actions.
 *
 * @package    museu
 * @subpackage produto
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class produtoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->produtos = Doctrine_Core::getTable('Produto')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->produto = Doctrine_Core::getTable('Produto')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->produto);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ProdutoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ProdutoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($produto = Doctrine_Core::getTable('Produto')->find(array($request->getParameter('id'))), sprintf('Object produto does not exist (%s).', $request->getParameter('id')));
    $this->form = new ProdutoForm($produto);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($produto = Doctrine_Core::getTable('Produto')->find(array($request->getParameter('id'))), sprintf('Object produto does not exist (%s).', $request->getParameter('id')));
    $this->form = new ProdutoForm($produto);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($produto = Doctrine_Core::getTable('Produto')->find(array($request->getParameter('id'))), sprintf('Object produto does not exist (%s).', $request->getParameter('id')));
    $produto->delete();

    $this->redirect('produto/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $produto = $form->save();

      $this->redirect('produto/edit?id='.$produto->getId());
    }
  }
}
