<?php
/**
 * @category   MagentoPycho
 * @package    MagentoPycho_Lightboxes
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagentoPycho_Lightboxes_Block_Config_Popupimagesize extends Mage_Adminhtml_Block_System_Config_Form_Field
{

    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        $element->setStyle('width:70px;')
				->setName($element->getName() . '[]');

        if ($element->getValue()) {
            $values = explode(',', $element->getValue());
        } else {
            $values = array();
        }

        $from	= $element->setValue(isset($values[0]) ? $values[0] : '')->getElementHtml();
        $to		= $element->setValue(isset($values[1]) ? $values[1] : '')->getElementHtml();
        return $from.'  '.Mage::helper('lightboxes')->__(' x '). '    '.$to ;
    }
}