<?php declare(strict_types=1);

namespace Luisdev\BlogExtra\Plugin;

use Luisdev\Blog\Observer\LogPostDetailView;

class PreventPostDetailLogger
{
    public function aroundExecute(
        LogPostDetailView $subject,
        callable          $proceed,
    )
    {
        // This method doesn’t do anything specific, it only prevents the logger from executing.
    }
}
