<?php

/**
 * news actions.
 *
 * @package    museu
 * @subpackage news
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class newsActions extends sfActions
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
    $this->news = Doctrine_Core::getTable('News')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->news);
    
    $this->date = new sfDateFormat($this->getUser()->getCulture());
  }
}
