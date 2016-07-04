<?php

/*
 * @author     M2E Pro Developers Team
 * @copyright  2011-2015 ESS-UA [M2E Pro]
 * @license    Commercial use is forbidden
 */

namespace Ess\M2ePro\Model\ResourceModel\Ebay\Template\SellingFormat;

class Collection extends \Ess\M2ePro\Model\ResourceModel\ActiveRecord\Collection\Component\Child\AbstractCollection
{
    //########################################

    public function _construct()
    {
        parent::_construct();
        $this->_init(
            'Ess\M2ePro\Model\Ebay\Template\SellingFormat',
            'Ess\M2ePro\Model\ResourceModel\Ebay\Template\SellingFormat'
        );
    }

    //########################################
}