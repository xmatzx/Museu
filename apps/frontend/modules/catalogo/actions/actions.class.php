<?php

/**
 * catalogo actions.
 *
 * @package    museu
 * @subpackage catalogo
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class catalogoActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $query = Doctrine_Query::create()
            ->select('o.*')
            ->from('Objecto o');

    $this->pager = new sfDoctrinePager('Objecto', 12);
    $this->pager->setQuery($query);
    $this->pager->setPage($request->getParameter('page', 1));
    $this->pager->init();
  }
  
  public function executeEstampagem(sfWebRequest $request)
  {
  }
}
