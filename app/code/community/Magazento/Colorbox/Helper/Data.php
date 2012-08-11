<?php
class Magazento_Colorbox_Helper_Data extends Mage_Core_Helper_Abstract
{
    public function isBookmarksEnabled() {
       return Mage::getStoreConfig('colorbox/options/enable');
    }
    
    public function printBookmarks($page_title,$page_url)
    {
        $list = Mage::getModel('colorbox/list')->buildBookmarksList($page_title,$page_url);
        return $list;
    }


}
