<?php declare(strict_types=1);

namespace Luisdev\Minerva\Model\ResourceModel\Faq;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Luisdev\Minerva\Model\Faq;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Faq::class, \Luisdev\Minerva\Model\ResourceModel\Faq::class);
    }
}
