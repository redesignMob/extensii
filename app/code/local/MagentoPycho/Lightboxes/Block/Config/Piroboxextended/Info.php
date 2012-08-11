<?php
/**
 * @category   MagentoPycho
 * @package    MagentoPycho_Lightboxes
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagentoPycho_Lightboxes_Block_Config_Piroboxextended_Info
    extends Mage_Adminhtml_Block_Abstract
    implements Varien_Data_Form_Element_Renderer_Interface
{

    /**
     * Render fieldset html
     *
     * @param Varien_Data_Form_Element_Abstract $element
     * @return string
     */
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        $html = '<div style="border:1px solid #CCCCCC;margin-bottom:10px;padding:10px 10px 10px 10px;">
    <h4>About PiroBox Extended (1.0)</h4>
    <p>PiroBox Extended is advanced form of PiroBox (1.2.2) which has the ability to open any type of file, from inLine content to swf files, likewise, from simple images to pdf files.<br /><br />
    Click <a href="http://www.pirolab.it/pirobox" target="_blank" >here</a> for more details
    </p>
    </div>
';

        return $html;
    }
}
