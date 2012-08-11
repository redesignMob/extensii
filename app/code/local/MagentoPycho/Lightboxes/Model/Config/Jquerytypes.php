<?php
/**
 * @category   MagentoPycho
 * @package    MagentoPycho_Lightboxes
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagentoPycho_Lightboxes_Model_Config_jquerytypes
{
    public function toOptionArray()
    {
        return array(
            'local'    => Mage::helper('lightboxes')->__('Local (Version 1.7.1)'),
            'google'    => Mage::helper('lightboxes')->__('Google CDN (Version 1.7.1)'),
        );
    }
}