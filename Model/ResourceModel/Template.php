<?php

namespace Webguys\Easytemplate\Model\ResourceModel;

class Template extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    protected function _construct()
    {
        $this->_init('easytemplate_template', 'id');
    }

}
