<?php

namespace NF\Menus\Abstracts;

abstract class MenuAbstract
{
    public function getArgs($params)
    {
        $default = [
            'container'       => 'ul',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => '',
            'menu_id'         => '',
            'link_before'     => '',
            'link_after'      => '',
            'before'          => '',
            'after'           => '',
        ];

        $params = wp_parse_args($params, $default);

        return $params;
    }
}
