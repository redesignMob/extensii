<?php
/*
 *  Created on Mar 16, 2011
 *  Author Ivan Proskuryakov - volgodark@gmail.com - Magazento.com
 *  Copyright Proskuryakov Ivan. Magazento.com © 2011. All Rights Reserved.
 *  Single Use, Limited Licence and Single Use No Resale Licence ["Single Use"]
 */
?>
<?php

class Magazento_Colorbox_Model_Source_Boolean {

    public function toOptionArray() {
        return array(
            array('value' => 'true', 'label' => Mage::helper('colorbox')->__('True')),
            array('value' => 'false', 'label' => Mage::helper('colorbox')->__('False')),
        );
    }

}