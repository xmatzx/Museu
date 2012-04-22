<?php

/**
 * search actions.
 *
 * @package    museu
 * @subpackage search
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class searchActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
  }
  
  public function executeFind(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));
    
    $this->slug = $request->getParameter('slug');
    $this->forward404Unless($this->slug);
    
    // objecto
    $this->objectos = Doctrine::getTable('Objecto')->createQuery('o')
            ->where('o.title LIKE ?', '%'.$this->slug.'%')
            ->orWhere('o.overview LIKE ?', '%'.$this->slug.'%')
            ->orWhere('o.designation LIKE ?', '%'.$this->slug.'%')
            ->orWhere('o.denomination LIKE ?', '%'.$this->slug.'%')
            ->orWhere('o.finality LIKE ?', '%'.$this->slug.'%')
            ->orWhere('o.history LIKE ?', '%'.$this->slug.'%')
            ->execute();
    
    // estampagem
    $this->estampagens = Doctrine::getTable('Estampagem')->createQuery('e')
            ->where('e.title LIKE ?', '%'.$this->slug.'%')
            ->orWhere('e.overview LIKE ?', '%'.$this->slug.'%')
            ->orWhere('e.designation LIKE ?', '%'.$this->slug.'%')
            ->orWhere('e.autor LIKE ?', '%'.$this->slug.'%')
            ->orWhere('e.material LIKE ?', '%'.$this->slug.'%')
            ->orWhere('e.tecnique LIKE ?', '%'.$this->slug.'%')
            ->orWhere('e.colors LIKE ?', '%'.$this->slug.'%')
            ->execute();
    
    // noticia
    $this->noticias = Doctrine::getTable('News')->createQuery('n')
            ->innerJoin('n.Translation t')
            ->where('t.title LIKE ?', '%'.$this->slug.'%')
            ->orWhere('t.overview LIKE ?', '%'.$this->slug.'%')
            ->orWhere('t.resume LIKE ?', '%'.$this->slug.'%')
            ->execute();
    
    // eventos
    $this->eventos = Doctrine::getTable('Evento')->createQuery('v')
            ->where('v.title LIKE ?', '%'.$this->slug.'%')
            ->orWhere('v.overview LIKE ?', '%'.$this->slug.'%')
            ->execute();
  }
}
