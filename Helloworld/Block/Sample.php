<?php
namespace Manoj\Helloworld\Block;
class Sample extends \Magento\Framework\View\Element\Template {

    public function gettestfunction() {
        $html = '<p>Make this world a beautiful place to live.</p>';
        return $html;
    }
}