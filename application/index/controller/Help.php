<?php

namespace app\index\controller;

use app\common\controller\Frontend;

class Help extends Frontend
{

    protected $noNeedLogin = '*';
    protected $noNeedRight = '*';
    protected $layout = '';

    public function dg_question()
    {



        return $this->view->fetch();
    }

}
