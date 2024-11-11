<?php declare(strict_types=1);

namespace Luisdev\Blog\ViewModel;

use Luisdev\Blog\Api\Data\PostInterface;
use Luisdev\Blog\Api\PostRepositoryInterface;
use Luisdev\Blog\Model\ResourceModel\Post\Collection;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\View\Element\Block\ArgumentInterface;

class Post implements ArgumentInterface
{

    public function __construct(
        private Collection $collection,
        private PostRepositoryInterface $postRepository,
        private RequestInterface $request,
    ) {}

    public function getList(): array
    {
        return $this->collection->getItems();
    }

    public function getCount(): int
    {
        return count($this->getList());
    }

    public function getDetail(): PostInterface
    {
        $id = (int) $this->request->getParam('id');
        return $this->postRepository->getById($id);
    }
}
