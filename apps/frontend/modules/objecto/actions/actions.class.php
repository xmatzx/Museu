<?php

/**
 * objecto actions.
 *
 * @package    museu
 * @subpackage objecto
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class objectoActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }
  
  public function executeShow(sfWebRequest $request)
  {
    $id = $request->getParameter('id');
    
    $this->objecto = Doctrine::getTable('Objecto')->createQuery('o')
            ->where('o.id = ?', $id)
            ->fetchOne();
    
    $this->setLayout(false);
  }
}
