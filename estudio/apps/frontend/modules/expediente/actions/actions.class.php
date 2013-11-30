<?php

/**
 * expediente actions.
 *
 * @package    estudio
 * @subpackage expediente
 * @author     Your name here
 */
class expedienteActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->Expedientes = ExpedienteQuery::create()
    ->joinExpedienteClienteAbogado()
    ->find();
  }

  public function executeNew(sfWebRequest $request)
  {
	$this->bandera = 0;  
	$consulta = ConsultaQuery::create()->findByAbogadoId($this->getUser()->getAttribute('id_abogado'));
    $this->Clientes = ClienteQuery::create()
			->filterByConsulta($consulta, null)
			->groupByIdCliente()
			->find();  
	$elegido = $request->getParameter('lista');
	if(!empty($elegido))
	{
		$array = explode(' ', $elegido);
		$this->getUser()->setAttribute('id_cliente', $array[0]);
		$this->bandera = 1;	
		$this->form = new ExpedienteForm();
	}
  }

  public function executeCreate(sfWebRequest $request)
  {
	$this->bandera = 1;   
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new ExpedienteForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  { 
    $Expediente = ExpedienteQuery::create()->findPk($request->getParameter('id_expediente'));
    $this->forward404Unless($Expediente, sprintf('Object Expediente does not exist (%s).', $request->getParameter('id_expediente')));
    $this->form = new ExpedienteForm($Expediente);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $Expediente = ExpedienteQuery::create()->findPk($request->getParameter('id_expediente'));
    $this->forward404Unless($Expediente, sprintf('Object Expediente does not exist (%s).', $request->getParameter('id_expediente')));
    $this->form = new ExpedienteForm($Expediente);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }
  
   public function executeDelete(sfWebRequest $request)
  {
    $Expediente = ExpedienteQuery::create()->findPk($request->getParameter('id_expediente'));
    $this->forward404Unless($Expediente, sprintf('Object Expediente does not exist (%s).', $request->getParameter('id_expediente')));
    $this->form = new ExpedienteForm($Expediente);
  }

  public function executeDeleteBis(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $Expediente = ExpedienteQuery::create()->findPk($request->getParameter('id_expediente'));
    $this->forward404Unless($Expediente, sprintf('Object Expediente does not exist (%s).', 
    $request->getParameter('id_expediente')));
    $Relacion = ExpedienteClienteAbogadoQuery::create()->findByExpedienteId($request->getParameter('id_expediente'));
    $Relacion->delete();
    $Expediente->delete();

    $this->redirect('expediente/borrarIndex');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $Expediente = $form->save();
      $Relacion = new ExpedienteClienteAbogado();
      $Relacion->setExpedienteId($Expediente->getIdExpediente());
      $Relacion->setAbogadoId($this->getUser()->getAttribute('id_abogado'));
      $Relacion->setClienteId($this->getUser()->getAttribute('id_cliente'));
      $Relacion->save();
	  $this->redirect('expediente/exito');	
      //$this->redirect('expediente/edit?id_expediente='.$Expediente->getIdExpediente());
    }
  }
  
   public function executeBorrarIndex(sfWebRequest $request)
  {
	  $this->Expedientes = ExpedienteQuery::create()
    ->joinExpedienteClienteAbogado()
    ->find();
  }
  
  public function executeExito(sfWebRequest $request)
  {
	  
  }
}
