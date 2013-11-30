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
		$this->circunscripcion = array (
			'juzgadoA' => array(
				'nombre' => 'Camara de Apelaciones Sala A',
				'juez' => 'Dr. Marcelo Jorge LOPEZ MESA, Dr. Carlos Alberto VELAZQUEZ',
				'secretario' => 'Dr. José Pablo DESCALZI',
				'direccion' => 'Av. 9 de Julio 261',
				'ciudad' => 'Trelew'),
			'juzgadoB' => array(
				'nombre' => 'Camara de Apelaciones Sala B',
				'juez' => 'Dr. Sergio Rubén LUCERO, Dr. Raúl Adrián VERGARA, Dr. Aldo Luis DE CUNTO',
				'secretario' => 'Dra. Vilma Noemí BIRRI',
				'direccion' => 'Av. 9 de Julio 261',
				'ciudad' => 'Trelew'), 
			'juzgadoC' => array(
				'nombre' => 'Juzgado Letrado de 1ra. Instancia Civil y Comercial Nº 1',
				'juez' => 'Dra. Adela Lucia JUAREZ ALDAZABAL',
				'secretario' => 'Dra. María Esther TAME, Dra. Nancy Noemí ARNAUDO',
				'direccion' => 'Av. 9 de Julio 261',
				'ciudad' => 'Trelew'), 
			'juzgadoD' => array(
				'nombre' => 'Juzgado Letrado de 1ra. Instancia Civil y Comercial Nº 2',
				'juez' => 'Dr. Argentino Carlos María FAIELLA PIZZULL',
				'secretario' => 'Dr. Ubaldo René AGUILERA, Dr. Fernando Daniel SANTOME OSUNA',
				'direccion' => 'Av. 9 de Julio 261',
				'ciudad' => 'Trelew'), 
			'juzgadoE' => array(
				'nombre' => ' Juzgado de Familia N° 1',
				'juez' => 'Dra. Gladys Susana RODRIGUEZ',
				'secretario' => 'Dr. Rodolfo José SANGUINETTI, Dra. Helena Adriana GARCIA MORENO',
				'direccion' => 'Paraguay 89',
				'ciudad' => 'Trelew')
				);

        
    }
}

