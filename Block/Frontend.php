<?php
/**
 * @category   Lavanya
 * @package    Lavanya_Frontend
 * @author     lavanyachandranece@gmail.com
 * @copyright  Copyright  Lavanya<lavanyachandranece@gmail.com>
 * @license    Open Software License
 */

namespace Lavanya\Frontend\Block;

/**
 * Frontend content block
 */
class Frontend extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context
    ) {
        parent::__construct($context);
    }

    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Lavanya Frontend Module'));
        
        return parent::_prepareLayout();
    }
}
