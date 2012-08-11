<?php
/**
 * @category   MagentoPycho
 * @package    MagentoPycho_Lightboxes
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagentoPycho_Lightboxes_Model_Config_Lightboxtypes
{
    public function toOptionArray()
    {
        return array(
            'fancybox'				=> Mage::helper('lightboxes')->__('FancyBox'),
            'pirobox'				=> Mage::helper('lightboxes')->__('PiroBox'),
            'piroboxextended'		=> Mage::helper('lightboxes')->__('PiroBox Extended'),
            'prettyphoto'			=> Mage::helper('lightboxes')->__('prettyPhoto'),
            'lightboxclone'			=> Mage::helper('lightboxes')->__('Lightbox Clone'),
        );
    }
}