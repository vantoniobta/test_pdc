<?php
namespace Pdc\Hellopdc\Block;
use Magento\Framework\View\Element\Template;

class Hellopdc extends \Magento\Framework\View\Element\Template
{
    public function getHelloPdcTxt()
    {
        return 'Hello Productos designer canvas!';
    }
}