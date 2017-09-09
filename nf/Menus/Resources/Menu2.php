<?php

namespace NF\Menus\Resources;

use NF\Menus\Abstracts\MenuAbstract;
use NF\Menus\Interfaces\MenuInterface;

/**
 * class Menu1 same benhvienchamcuu
 */
class Menu2 extends MenuAbstract implements MenuInterface
{
    protected $params = [];
    public function __construct($params = [])
    {
        $this->params = $this->getArgs($params);
    }

    public function renderView()
    {
        if (function_exists('wp_nav_menu')) {
            $before = "<div class='vc-class-menu2 {$this->params["container_class"]}'>";
            $before .= "<div class='main-menu mean-menu2 {$this->params["container_class_2"]}'>";
            echo $before;

            wp_nav_menu($this->params);
            
            $after = '</div>';
            $after .= "<div class='mobile-vc-menu2 {$this->params["container_class_mobile"]}'></div>";
            $after .= '</div>';

            echo $after;
        }
    }
}
