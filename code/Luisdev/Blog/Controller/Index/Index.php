<?php declare(strict_types=1);

namespace Luisdev\Blog\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface;

class Index implements HttpGetActionInterface
{
    public function execute()
    {
        die('Blog index');
    }
}
