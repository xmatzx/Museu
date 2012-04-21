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
  public function executeShow(sfWebRequest $request)
  {
    $id = $request->getParameter('id');
    
    $this->objecto = Doctrine::getTable('Objecto')->createQuery('o')
            ->where('o.id = ?', $id)
            ->fetchOne();
    
    $this->comments = Doctrine::getTable('CommentObject')->createQuery('c')
            ->where('c.objecto_id = ?', $id)
            ->addWhere('c.aproved = ?', true)
            ->execute();
    
    $this->votes = Doctrine::getTable('VoteObjecto')->createQuery('v')
            ->where('v.objecto_id = ?', $id)
            ->addWhere('v.aproved = ?', true)
            ->execute();
    
    $this->setLayout('layout_box');
  }
}
