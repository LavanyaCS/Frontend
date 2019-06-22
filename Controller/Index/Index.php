<?php
/**
 * @category   Lavanya
 * @package    Lavanya_Frontend
 * @author     lavanyachandranece@gmail.com
 * @copyright  Copyright  Lavanya<lavanyachandranece@gmail.com>
 * @license    Open Software License
 */

namespace Lavanya\Frontend\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
    }
}
