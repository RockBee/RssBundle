<?php

namespace Rockbee\RssBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class RssController extends Controller
{
    public function getAction($url)
    {
    	
    	$rss = $this->get('rb_rss.rss');
    	
    	$rss->load($url);
    	
    	$items = $rss->getItems();
    
        return $rss;
    }
}
