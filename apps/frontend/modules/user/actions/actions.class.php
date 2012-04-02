<?php

/**
 * user actions.
 *
 * @package    museu
 * @subpackage user
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class userActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
  }
  
  public function executeRegister(sfWebRequest $request)
  {
    $this->form = new sfGuardUserForm();
  }
  
  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new sfGuardUserForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('register');
  }
  
  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));

    if ($form->isValid())
    {
      $sf_guard_user = $form->save();
      
      $this->getUser()->setFlash('notice', sfContext::getInstance()->getI18N()->__('User created.'));

      $this->redirect('@sf_guard_signin');
    }
  }
}
