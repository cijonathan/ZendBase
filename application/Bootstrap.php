<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected function _initAutoLoad(){
        /* [REGISTRO DE MODULOS] */
        $modulos = new Zend_Application_Module_Autoloader(array(
        'namespace'=>'',
        'basePath'=>APPLICATION_PATH.'/modules/default'
        ));
        return $modulos;
    }
    protected function _initView()
    {
        $vista = new Zend_View();
        /* [DOCTYPE] */
        $vista->doctype('HTML5');
        /* [META] */    
        $vista->headMeta()
                /* [META HTML] */
                ->setHttpEquiv('Content-Language', 'es')
                ->setHttpEquiv('Content-Type', 'text/html; charset=UTF-8')
                ->appendName('author', 'Creatividad e Inteligencia')
                ->appendName('description','')
                ->appendName('keywords','')
                ->appendName('robots','index,follow');
        
        /* [TITLE] */
        $vista->headTitle('NOMBRE SITIO');
        /* FAVICON */
        $vista->headLink(array('type'=>'image/x-icon','rel' => 'shortcut icon','href' =>'/images/generales/favicon.jpg'));       
        /* CSS */        
        $vista->headLink()
                ->appendStylesheet('/css/estilo.css');
        /* [JS] */
        $vista->headScript()
                ->appendFile('/js/jquery.js') 
                ->appendFile('/js/jquery.validate.js') 
                ->appendFile('/js/jquery.sitio.js'); 
        return $vista;
    }   
}

