<?php

/**
 * boxiframe actions.
 *
 * @package    museu
 * @subpackage boxiframe
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class boxiframeActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->setLayout(false);

    $this->iframe_module = $request->getParameter('i_module');
    $this->iframe_action = $request->getParameter('i_action');

    $this->iframe_name = $request->getParameter('i_name','iframe');
    $this->iframe_width  = $request->getParameter('i_width',700);
    $this->iframe_height = $request->getParameter('i_height',400);

    //passa os parametros para a view para serem incluidos na chamada do module/action no iframe
    $this->params = $request->getParameter('p', array());
  }
}
