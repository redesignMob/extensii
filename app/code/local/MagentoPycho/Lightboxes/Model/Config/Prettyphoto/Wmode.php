<?php
/**
 * @category   MagentoPycho
 * @package    MagentoPycho_Lightboxes
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagentoPycho_Lightboxes_Model_Config_Prettyphoto_Wmode
{
    public function toOptionArray()
    {
        return array(
            'opaque'			=> Mage::helper('lightboxes')->__('opaque'),
            'transparent'		=> Mage::helper('lightboxes')->__('transparent'),
        );
    }
}