<?php declare(strict_types=1);

namespace Luisdev\Blog\Model;

use Luisdev\Blog\Api\Data\PostInterface;
use Luisdev\Blog\Api\PostRepositoryInterface;
use Luisdev\Blog\Model\ResourceModel\Post as PostResourceModel;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;

class PostRepository implements PostRepositoryInterface
{

    /**
     * @param PostFactory $postFactory
     * @param PostResourceModel $resourceModelPost
     */
    public function __construct(
        private PostFactory       $postFactory,
        private PostResourceModel $postResourceModel
    )
    {
    }


    /**
     * @param int $id
     * @return PostInterface
     */
    public function getById(int $id): PostInterface
    {
        $post = $this->postFactory->create();
        $this->postResourceModel->load($post, $id);
        if (!$post->getId()) {
            throw new NoSuchEntityException(__('No existe un post con el ID "%1" .', $id));
        }
        return $post;
    }

    public function save(PostInterface $post): PostInterface
    {
        // TODO: Implement save() method.
    }

    public function deleteById(int $id): bool
    {
        // TODO: Implement deleteById() method.
    }
}
