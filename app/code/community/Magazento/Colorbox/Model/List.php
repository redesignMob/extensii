<?php

class Magazento_Colorbox_Model_List extends Mage_Core_Model_Abstract {

    public function getBookmarksList() {
        return Mage::getStoreConfig('colorbox/options/bookmarkslist');
    }
    public function getApiKey() {
        return Mage::getStoreConfig('colorbox/options/apikey');
    }
    public function getSource() {
        return Mage::getStoreConfig('colorbox/options/source');
    }

    public function buildBookmarksList($page_title, $page_url) {
        $href = 'http://www.Shareaholic.com/api/share/';
        $title = $page_title;
        $link = $page_url;
        $shortlink = '';
        $feed = 'feed';
//        $shortlink = $this->googl_generator($page_url);
        $notes = '';
        $apikey = $this->getApiKey();
        $apitype = '1';
        $source = $this->getSource();
        $tags = '';


        $blist = '';
        $bookmarksarray = $this->getEnabledBookmarksArray();

        if (in_array("shr-delicious", $bookmarksarray))
            $blist.='<li class="shr-delicious">
                    <a title="Share this on del.icio.us" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=2&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-facebook", $bookmarksarray))
            $blist.='<li class="shr-facebook">
                    <a onclick="window.open(this.href,\'sharer\',\'toolbar=0,status=0,width=626,height=436\'); return false;" title="Share this on Facebook" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=5&amp;tags=' . $tags . '&amp;ctype=">&nbsp;</a>
                    </li>';
        if (in_array("shr-gmail", $bookmarksarray))
            $blist.='<li class="shr-gmail">
                    <a title="Email this via Gmail" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=52&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-googlebuzz", $bookmarksarray))
            $blist.='<li class="shr-googlebuzz">
                    <a title="Post on Google Buzz" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=257&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-linkedin", $bookmarksarray))
            $blist.='<li class="shr-linkedin">
                    <a title="Share this on LinkedIn" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=88&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-mail", $bookmarksarray))
            $blist.='<li class="shr-mail">
                    <a title="Email this to a friend?" class="external" rel="nofollow" href="' . $href . '?v=1&title=Hello%20world%21&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=201&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-printfriendly", $bookmarksarray))
            $blist.='<li class="shr-printfriendly">
                    <a title="Send this page to Print Friendly" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=236&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-reddit", $bookmarksarray))
            $blist.='<li class="shr-reddit">
                    <a title="Share this on Reddit" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=40&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-stumbleupon", $bookmarksarray))
            $blist.='<li class="shr-stumbleupon">
                    <a title="Stumble upon something good? Share it on StumbleUpon" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=38&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-twitter", $bookmarksarray))
            $blist.='<li class="shr-twitter">
                    <a title="Tweet This!" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=%24%7Btitle%7D+-+%24%7Bshort_link%7D+via+%40' . $source . '&amp;service=7&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-100zakladok", $bookmarksarray))
            $blist.='<li class="shr-100zakladok">
                    <a title="Add this to 100 bookmarks" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=281&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-bebo", $bookmarksarray))
            $blist.='<li class="shr-bebo">
                    <a title="Share this on Bebo" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=196&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-bitacoras", $bookmarksarray))
            $blist.='<li class="shr-bitacoras">
                    <a title="Submit this to Bitacoras" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=288&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-blinklist", $bookmarksarray))
            $blist.='<li class="shr-blinklist">
                    <a title="Share this on Blinklist" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=48&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-blogengage", $bookmarksarray))
            $blist.='<li class="shr-blogengage">
                    <a title="Engage with this article!" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=286&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-blogger", $bookmarksarray))
            $blist.='<li class="shr-blogger">
                    <a title="Blog this on Blogger" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=219&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-blogmarks", $bookmarksarray))
            $blist.='<li class="shr-blogmarks">
                    <a title="Mark this on BlogMarks" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=27&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-bobrdobr", $bookmarksarray))
            $blist.='<li class="shr-bobrdobr">
                    <a title="Share this on BobrDobr" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=266&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-bonzobox", $bookmarksarray))
            $blist.='<li class="shr-bonzobox">
                    <a title="Add this to BonzoBox" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=292&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-box", $bookmarksarray))
            $blist.='<li class="shr-box">
                    <a title="Add this link to Box.net" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=240&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-buzzster", $bookmarksarray))
            $blist.='<li class="shr-buzzster">
                    <a title="Share this via Buzzster!" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=1&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';

//        if (in_array("shr-comfeed", $bookmarksarray))
//            $blist.='<li class="shr-comfeed">
//                    <a title="Subscribe via RSS" class="external" rel="nofollow" href="' . $link . '&amp;feed=comments-rss2" target="_blank">&nbsp;</a>
//                    </li>';
        
        if (in_array("shr-current", $bookmarksarray))
            $blist.='<li class="shr-current">
                    <a title="Post this to Current" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=80&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-designbump", $bookmarksarray))
            $blist.='<li class="shr-designbump">
                    <a title="Bump this on DesignBump" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=282&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-designfloat", $bookmarksarray))
            $blist.='<li class="shr-designfloat">
                    <a title="Submit this to DesignFloat" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=106&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-digg", $bookmarksarray))
            $blist.='<li class="shr-digg">
                    <a title="Digg this!" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=3&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-diigo", $bookmarksarray))
            $blist.='<li class="shr-diigo">
                    <a title="Post this on Diigo" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=24&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-dzone", $bookmarksarray))
            $blist.='<li class="shr-dzone">
                    <a title="Add this to DZone" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=102&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-ekudos", $bookmarksarray))
            $blist.='<li class="shr-ekudos">
                    <a title="Submit this to eKudos" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=283&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-evernote", $bookmarksarray))
            $blist.='<li class="shr-evernote">
                    <a title="Clip this to Evernote" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=191&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-faqpal", $bookmarksarray))
            $blist.='<li class="shr-faqpal">
                    <a title="Submit this to FAQpal" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=287&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-friendfeed", $bookmarksarray))
            $blist.='<li class="shr-friendfeed">
                    <a title="Share this on FriendFeed" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=43&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-fwisp", $bookmarksarray))
            $blist.='<li class="shr-fwisp">
                    <a title="Share this on Fwisp" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=280&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-globalgrind", $bookmarksarray))
            $blist.='<li class="shr-globalgrind">
                    <a title="Grind this! on Global Grind" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=89&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-googlebookmarks", $bookmarksarray))
            $blist.='<li class="shr-googlebookmarks">
                    <a title="Add this to Google Bookmarks" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=74&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-googlereader", $bookmarksarray))
            $blist.='<li class="shr-googlereader">
                    <a title="Add this to Google Reader" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=207&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-hackernews", $bookmarksarray))
            $blist.='<li class="shr-hackernews">
                    <a title="Submit this to Hacker News" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=202&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-hatena", $bookmarksarray))
            $blist.='<li class="shr-hatena">
                    <a title="Bookmarks this on Hatena Bookmarks" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=246&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-hotmail", $bookmarksarray))
            $blist.='<li class="shr-hotmail">
                    <a title="Email this via Hotmail" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=53&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-hyves", $bookmarksarray))
            $blist.='<li class="shr-hyves">
                    <a title="Share this on Hyves" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=105&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-identica", $bookmarksarray))
            $blist.='<li class="shr-identica">
                    <a title="Post this to Identica" class="external" rel="nofollow" href="' . $href . '?v=1&title=TITLE&amp;link=PERMALINK&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=205&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-izeby", $bookmarksarray))
            $blist.='<li class="shr-izeby">
                    <a title="Add this to Izeby" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=263&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-jumptags", $bookmarksarray))
            $blist.='<li class="shr-jumptags">
                    <a title="Submit this link to JumpTags" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=14&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-kaevur", $bookmarksarray))
            $blist.='<li class="shr-kaevur">
                    <a title="Share this on Kaevur" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=290&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-memoryru", $bookmarksarray))
            $blist.='<li class="shr-memoryru">
                    <a title="Add this to Memory.ru" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=269&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-meneame", $bookmarksarray))
            $blist.='<li class="shr-meneame">
                    <a title="Submit this to Meneame" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=33&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-misterwong", $bookmarksarray))
            $blist.='<li class="shr-misterwong">
                    <a title="Add this to Mister Wong" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=6&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-mixx", $bookmarksarray))
            $blist.='<li class="shr-mixx">
                    <a title="Share this on Mixx" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=4&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-moemesto", $bookmarksarray))
            $blist.='<li class="shr-moemesto">
                    <a title="Add this to MyPlace" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=268&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-mylinkvault", $bookmarksarray))
            $blist.='<li class="shr-mylinkvault">
                    <a title="Store this link on MyLinkVault" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=98&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-myspace", $bookmarksarray))
            $blist.='<li class="shr-myspace">
                    <a title="Post this to MySpace" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=39&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-n4g", $bookmarksarray))
            $blist.='<li class="shr-n4g">
                    <a title="Submit tip to N4G" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=289&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-netvibes", $bookmarksarray))
            $blist.='<li class="shr-netvibes">
                    <a title="Submit this to Netvibes" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=195&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-netvouz", $bookmarksarray))
            $blist.='<li class="shr-netvouz">
                    <a title="Submit this to Netvouz" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=21&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-newsvine", $bookmarksarray))
            $blist.='<li class="shr-newsvine">
                    <a title="Seed this on Newsvine" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=41&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-ning", $bookmarksarray))
            $blist.='<li class="shr-ning">
                    <a title="Add this to Ning" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=264&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-nujij", $bookmarksarray))
            $blist.='<li class="shr-nujij">
                    <a title="Submit this to NUjij" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=238&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-oknotizie", $bookmarksarray))
            $blist.='<li class="shr-oknotizie">
                    <a title="Share this on OkNotizie" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=243&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-orkut", $bookmarksarray))
            $blist.='<li class="shr-orkut">
                    <a title="Promote this on Orkut" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=247&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-pfbuzz", $bookmarksarray))
            $blist.='<li class="shr-pfbuzz">
                    <a title="Share this on PFBuzz" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=279&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-pingfm", $bookmarksarray))
            $blist.='<li class="shr-pingfm">
                    <a title="Ping this on Ping.fm" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=45&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-plaxo", $bookmarksarray))
            $blist.='<li class="shr-plaxo">
                    <a title="Share this on Plaxo" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=44&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-plurk", $bookmarksarray))
            $blist.='<li class="shr-plurk">
                    <a title="Share this on Plurk" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=218&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-posterous", $bookmarksarray))
            $blist.='<li class="shr-posterous">
                    <a title="Post this to Posterous" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=210&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-propeller", $bookmarksarray))
            $blist.='<li class="shr-propeller">
                    <a title="Submit this story to Propeller" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=77&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-pusha", $bookmarksarray))
            $blist.='<li class="shr-pusha">
                    <a title="Push this on Pusha" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=59&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-scriptstyle", $bookmarksarray))
            $blist.='<li class="shr-scriptstyle">
                    <a title="Submit this to Script &amp; Style" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=278&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-slashdot", $bookmarksarray))
            $blist.='<li class="shr-slashdot">
                    <a title="Submit this to SlashDot" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=61&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-sphinn", $bookmarksarray))
            $blist.='<li class="shr-sphinn">
                    <a title="Sphinn this on Sphinn" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=100&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-springpad", $bookmarksarray))
            $blist.='<li class="shr-springpad">
                    <a title="Spring this on SpringPad" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=265&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-squidoo", $bookmarksarray))
            $blist.='<li class="shr-squidoo">
                    <a title="Add to a lense on Squidoo" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=46&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-strands", $bookmarksarray))
            $blist.='<li class="shr-strands">
                    <a title="Submit this to Strands" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=190&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-stumpedia", $bookmarksarray))
            $blist.='<li class="shr-stumpedia">
                    <a title="Add this to Stumpedia" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=192&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-techmeme", $bookmarksarray))
            $blist.='<li class="shr-techmeme">
                    <a title="Tip this to TechMeme" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=204&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-technorati", $bookmarksarray))
            $blist.='<li class="shr-technorati">
                    <a title="Share this on Technorati" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=10&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-tipd", $bookmarksarray))
            $blist.='<li class="shr-tipd">
                    <a title="Share this on Tipd" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=188&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-tomuse", $bookmarksarray))
            $blist.='<li class="shr-tomuse">
                    <a title="Suggest this article to ToMuse" class="external" rel="nofollow" href="' . $href . '?v=1&title=Hello%20world%21&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=294&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-tumblr", $bookmarksarray))
            $blist.='<li class="shr-tumblr">
                    <a title="Share this on Tumblr" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=http%3A%2F%2Flocalhost%2Fwordpress%2F%3Fp%3D1&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=78&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-twittley", $bookmarksarray))
            $blist.='<li class="shr-twittley">
                    <a title="Submit this to Twittley" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=http%3A%2F%2Flocalhost%2Fwordpress%2F%3Fp%3D1&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=277&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-viadeo", $bookmarksarray))
            $blist.='<li class="shr-viadeo">
                    <a title="Share this on Viadeo" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=92&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-virb", $bookmarksarray))
            $blist.='<li class="shr-virb">
                    <a title="Share this on Virb" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=291&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-webblend", $bookmarksarray))
            $blist.='<li class="shr-webblend">
                    <a title="Blend this!" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=284&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-wykop", $bookmarksarray))
            $blist.='<li class="shr-wykop">
                    <a title="Add this to Wykop!" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=285&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-xerpi", $bookmarksarray))
            $blist.='<li class="shr-xerpi">
                    <a title="Save this to Xerpi" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=20&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-yahoobuzz", $bookmarksarray))
            $blist.='<li class="shr-yahoobuzz">
                    <a title="Buzz up!" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=73&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-yahoomail", $bookmarksarray))
            $blist.='<li class="shr-yahoomail">
                    <a title="Email this via Yahoo! Mail" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=54&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-yandex", $bookmarksarray))
            $blist.='<li class="shr-yandex">
                    <a title="Add this to Yandex.Bookmarks" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=267&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';
        if (in_array("shr-zabox", $bookmarksarray))
            $blist.='<li class="shr-zabox">
                    <a title="Box this on Zabox" class="external" rel="nofollow" href="' . $href . '?v=1&title=' . $title . '&amp;link=' . $link . '&amp;notes=' . $notes . '&amp;short_link=' . $shortlink . '&amp;apitype=' . $apitype . '&amp;apikey=' . $apikey . '&amp;source=' . $source . '&amp;template=&amp;service=293&amp;tags=' . $tags . '&amp;ctype=" target="_blank">&nbsp;</a>
                    </li>';

        return $blist;
    }

    public function getEnabledBookmarksArray() {
        $arr = $this->_bookmarkslist = explode(',', $this->getBookmarksList());
        return $arr;
    }

    protected function googl_generator($long_url) {

        $output = '';

        if (extension_loaded("curl")) {

            $curl = curl_init("http://ggl-shortener.appspot.com/?url=" . rawurlencode($long_url));
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $response_text = curl_exec($curl);
            if ($response_text) {
                $json_response = json_decode($response_text);
            }
            $output = $json_response->short_url;
        } else {

            $url = htmlentities($long_url, ENT_QUOTES);
            $obj = json_decode(file_get_contents('http://ggl-shortener.appspot.com/?url=' . urlencode($url)));
            $output = $obj->{'short_url'};
        }

        return $output;
    }

}