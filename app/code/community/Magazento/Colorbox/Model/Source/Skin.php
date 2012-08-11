<?php
/*
 *  Created on Mar 16, 2011
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php

class Magazento_Colorbox_Model_Source_Skin {

    public function toOptionArray() {
        return array(
            array('value' => 'skin1', 'label' => Mage::helper('colorbox')->__('skin1')),
            array('value' => 'skin2', 'label' => Mage::helper('colorbox')->__('skin2')),
            array('value' => 'skin3', 'label' => Mage::helper('colorbox')->__('skin3')),
            array('value' => 'skin4', 'label' => Mage::helper('colorbox')->__('skin4')),
            array('value' => 'skin5', 'label' => Mage::helper('colorbox')->__('skin5')),
        );
    }

}