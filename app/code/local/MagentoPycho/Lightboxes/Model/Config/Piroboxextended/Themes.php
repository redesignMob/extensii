<?php
/**
 * @category   MagentoPycho
 * @package    MagentoPycho_Lightboxes
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagentoPycho_Lightboxes_Model_Config_Piroboxextended_Themes
{
    public function toOptionArray()
    {
        return array(
            'style_1'    => Mage::helper('lightboxes')->__('Style 1'),
            'style_2'    => Mage::helper('lightboxes')->__('Style 2'),
        );
    }
}