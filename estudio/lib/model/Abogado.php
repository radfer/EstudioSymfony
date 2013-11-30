<?php



/**
 * Skeleton subclass for representing a row from the 'abogado' table.
 *
 *
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class Abogado extends BaseAbogado
{
    public function logueoAbogado($usuario, $contrasenia)
    {
        if(!empty($usuario)&& !empty($contrasenia))
        { 
            $abogado = AbogadoQuery::create();
            $resultado = $abogado->findOneByMail($usuario);
            if($resultado != NULL)
            {
                if(sha1($contrasenia)== $resultado->getContrasenia())
                {
                     return $resultado;
                }else
                {
                    return NULL;
                }
            }else 
            {
                return NULL;
            }
         }else 
        {
            return NULL;
        }
    }
}
