<?php

/**
 * inicio actions.
 *
 * @package    estudio
 * @subpackage inicio
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class inicioActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
 /* public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }*/
    
    public function executeMenuInicio(sfWebRequest $request)
    {
        $this->mensaje_error = ' ';
       $metodo = $request->getMethod();
       if($metodo == 'POST')
       {
         $usuario = $request->getParameter('usuario');
         $contrasenia = $request->getParameter('contrasenia');
		 $objAbogado = new Abogado();
		 $resultado=$objAbogado->logueoAbogado($usuario, $contrasenia);
          if($resultado!=NULL)
          {
              $this->getUser()->setAttribute('id_abogado', $resultado->getIdAbogado());
              $this->redirect('intranet/menuAbogado');
          }else
          {
              $this->setTemplate('menuInicio');
              $this->mensaje_error = 'Error al ingresar los datos';
          }
         
       }
			$this->getUser()->getAttributeHolder()->clear();
                 
       }
     public function executeAbogadosAsoc(sfWebRequest $request)
    {
        
    }
    
     public function executeQuienesSomos(sfWebRequest $request)
    {
        
    }
    
     public function executeCircunscripcion(sfWebRequest $request)
    {
		$metodo = $request->getMethod();
		if($metodo == 'POST')
		{
			$juzgados = new Juzgado();
			$resultado = $juzgados->listaJson();
			return $this->renderText($resultado->toJSON());
		}
    }
}

