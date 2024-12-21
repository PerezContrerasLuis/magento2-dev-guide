<?php
declare(strict_types=1);
namespace Luisdev\JsFun\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class Message implements  ArgumentInterface {
    public function getMessage(){
        return __(str_shuffle('Alternative text'));
    }
}
