<?php
/*
 *  Created on Mar 16, 2011
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php

class Magazento_Colorbox_Model_Source_Transition {

    public function toOptionArray() {
        return array(
            array('value' => 'elastic', 'label' => Mage::helper('colorbox')->__('elastic')),
            array('value' => 'fade', 'label' => Mage::helper('colorbox')->__('fade')),
            array('value' => 'none', 'label' => Mage::helper('colorbox')->__('none')),
        );
    }

}