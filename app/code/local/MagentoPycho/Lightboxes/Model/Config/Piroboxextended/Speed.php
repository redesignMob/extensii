<?php
/**
 * @category   MagentoPycho
 * @package    MagentoPycho_Lightboxes
 * @author     magepsycho@gmail.com
 * @website    http://www.magepsycho.com
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class MagentoPycho_Lightboxes_Model_Config_Piroboxextended_Speed
{
    public function toOptionArray()
    {
        $range = range(500, 1000, 100);
        $array = array();
        foreach($range as $val){
            $array[$val] = $val;
        }
        return $array;
    }
}