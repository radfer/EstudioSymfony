<?php

/**
 * cliente actions.
 *
 * @package    estudio
 * @subpackage cliente
 * @author     Your name here
 */
class clienteActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
	 
	$consulta = ConsultaQuery::create()->findByAbogadoId($this->getUser()->getAttribute('id_abogado'));
    $this->Clientes = ClienteQuery::create()
			->filterByConsulta($consulta, null)
			->groupByIdCliente()
			->find();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new ClienteForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ClienteForm();

    $this->processForm($request, $this->form);
    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $Cliente = ClienteQuery::create()->findPk($request->getParameter('id_cliente'));
    $this->forward404Unless($Cliente, sprintf('El cliente no existe (%s).', $request->getParameter('id_cliente')));
    $this->form = new ClienteForm($Cliente);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Cliente = ClienteQuery::create()->findPk($request->getParameter('id_cliente'));
    $this->forward404Unless($Cliente, sprintf('El cliente no existe (%s).', $request->getParameter('id_cliente')));
    $this->form = new ClienteForm($Cliente);
    $this->processForm($request, $this->form);
    $this->setTemplate('edit');
  }
  
  public function executeBorrarIndex(sfWebRequest $request)
  {
    $consulta = ConsultaQuery::create()->findByAbogadoId($this->getUser()->getAttribute('id_abogado'));
    $this->Clientes = ClienteQuery::create()
			->filterByConsulta($consulta, null)
			->groupByIdCliente()
			->find();
   }
   
   public function executeDelete(sfWebRequest $request)
  {
    $Cliente = ClienteQuery::create()->findPk($request->getParameter('id_cliente'));
    $this->forward404Unless($Cliente, sprintf('Object Cliente does not exist (%s).', $request->getParameter('id_cliente')));
    $this->form = new ClienteForm($Cliente);
  }

  public function executeDeleteBis(sfWebRequest $request)
  {
    $request->checkCSRFProtection();
    $Cliente = ClienteQuery::create()->findPk($request->getParameter('id_cliente'));
    $consulta = ConsultaQuery::create()->findByClienteId($request->getParameter('id_cliente'));
    $this->forward404Unless($Cliente, sprintf('Object Cliente does not exist (%s).', $request->getParameter('id_cliente')));
    $consulta->delete();
    $Cliente->delete();
    $this->redirect('cliente/borrarIndex');
	
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {		
      $Cliente = $form->save();
      $consulta = new Consulta();
	  $consulta->setAbogadoId($this->getUser()->getAttribute('id_abogado'));
	  $consulta->setClienteId($Cliente->getIdCliente());
	  $consulta->save();
	  $this->redirect('cliente/exito');
      //$this->redirect('cliente/edit?id_cliente='.$Cliente->getIdCliente());
    } 
  }
  
  public function executeExito(sfWebRequest $request)
  {
	  
  }
}
