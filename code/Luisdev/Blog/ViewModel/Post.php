<?php declare(strict_types=1);

namespace Luisdev\Blog\ViewModel;

use Luisdev\Blog\Model\ResourceModel\Post\Collection;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Post implements ArgumentInterface
{

    public function __construct(
        private Collection $collection,
    ) {}

    public function getList(): array
    {
        return $this->collection->getItems();
    }
}
