<?php
/**
 * @category   MagentoPycho
 * @package    MagentoPycho_Lightboxes
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagentoPycho_Lightboxes_Model_Config_Prettyphoto_Theme
{
    public function toOptionArray()
    {
        return array(
            'pp_default'		=> Mage::helper('lightboxes')->__('pp_default'),
            'light_rounded'		=> Mage::helper('lightboxes')->__('light_rounded'),
            'dark_rounded'		=> Mage::helper('lightboxes')->__('dark_rounded'),
            'light_square'		=> Mage::helper('lightboxes')->__('light_square'),
            'dark_square'		=> Mage::helper('lightboxes')->__('dark_square'),
            'facebook'			=> Mage::helper('lightboxes')->__('facebook'),
        );
    }
}