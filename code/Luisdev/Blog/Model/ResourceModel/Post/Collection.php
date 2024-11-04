<?php declare(strict_types=1);

namespace luisdev\Blog\Model\ResourceModel\Post;

use luisdev\Blog\Model\Post;
use luisdev\Blog\Model\ResourceModel\Post as PostResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Post::class, PostResourceModel::class);
    }
}
