<?php declare(strict_types=1);

namespace Luisdev\Blog\Setup\Patch\Data;

use Luisdev\Blog\Api\PostRepositoryInterface;
use Luisdev\Blog\Model\PostFactory;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchInterface;

class PopulateBlogPosts1 implements DataPatchInterface
{
    public function __construct(
        private ModuleDataSetupInterface $moduleDataSetup,
        private PostFactory $postFactory,
        private PostRepositoryInterface $postRepository,
    ) {}

    public static function getDependencies(): array
    {
        return [];
    }

    public function getAliases(): array
    {
        return [];
    }

    public function apply()
    {
        $this->moduleDataSetup->startSetup();

        $posts = [
            [
                'title' => 'How Senior Software Engineers Document',
                'content' => 'There’s one task that software engineers hate, yet this small attention to detail is what separates a good software engineer from a bad one',
            ],
            [
                'title' => 'Best 7 Practice Projects to Level Up your Skills',
                'content' => 'The field of web development is where practice leads to experience.',
            ],
        ];

        foreach ($posts as $postData) {
            $post = $this->postFactory->create();
            $post->setData($postData);
            $this->postRepository->save($post);
        }

        $this->moduleDataSetup->endSetup();
    }
}
