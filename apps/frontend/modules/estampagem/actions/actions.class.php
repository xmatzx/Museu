<?php

/**
 * estampagem actions.
 *
 * @package    museu
 * @subpackage estampagem
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class estampagemActions extends sfActions
{
  public function executeShow(sfWebRequest $request)
  {
    $id = $request->getParameter('id');
    
    $this->estampagem = Doctrine::getTable('Estampagem')->createQuery('e')
            ->where('e.id = ?', $id)
            ->fetchOne();
    
    $this->comments = Doctrine::getTable('CommentEstampagem')->createQuery('c')
            ->where('c.estampagem_id = ?', $id)
            ->addWhere('c.aproved = ?', true)
            ->execute();
    
    $this->votes = Doctrine::getTable('VoteEstampagem')->createQuery('v')
            ->where('v.estampagem_id = ?', $id)
            ->addWhere('v.aproved = ?', true)
            ->execute();
    
    $this->setLayout('layout_box');
  }
}
