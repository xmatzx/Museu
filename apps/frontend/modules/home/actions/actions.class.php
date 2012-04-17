<?php

/**
 * home actions.
 *
 * @package    museu
 * @subpackage home
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class homeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->news = Doctrine::getTable('News')->createQuery('n')
            ->orderBy('n.created_at DESC')
            ->limit(3)
            ->execute();
    
    $this->objects = Doctrine::getTable('Objecto')->createQuery('o')
            ->where('o.featured =?', true)
            ->limit(1)
            ->execute();
  }
  
  public function executeSetCulture(sfWebRequest $request)
  {
    $culture = $request->getParameter('culture');
    $this->getUser()->setCulture($culture);
    $this->setLayout(false);

    return sfView::NONE;
  }
}
