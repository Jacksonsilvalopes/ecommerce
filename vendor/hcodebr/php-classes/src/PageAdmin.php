<?php

namespace Hcode;

Use Rain\Tpl;


class PageAdmin extends Page {
    
    //extendidio da classe page devido a semelhança, tudo que for publico e protegido é assessavel
         

    public function __construct($opts = array(), $tpl_dir = "/views/admin/") {

        parent::__construct($opts, $tpl_dir);
    }

   
}
