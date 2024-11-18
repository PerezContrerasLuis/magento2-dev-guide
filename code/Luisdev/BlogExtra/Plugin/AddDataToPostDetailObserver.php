<?php
declare(strict_types=1);

namespace Luisdev\BlogExtra\Plugin;

use Luisdev\Blog\Observer\LogPostDetailView;
use Magento\Framework\Event\Observer;
use Magento\Framework\Stdlib\DateTime\TimezoneInterface;

class AddDataToPostDetailObserver
{

    public function __construct(private TimezoneInterface $timezone)
    {
    }

    public function beforeExecute(LogPostDetailView $subject,
                                  Observer          $observer)
    {
        $request = $observer->getData('request');
        $request->setParam('dateTime', $this->timezone->date());
        return [$observer];
    }
}
