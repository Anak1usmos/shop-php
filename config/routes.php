<?php
 return array(
     'cabinet/quest' => 'cabinet/quest',
     'cart/checkout' => 'cart/checkout',
     'category/([1-9])' => 'catalog/category/$1',
     'cart/delete/([0-9]+)' => 'cart/delete/$1',
     'cart/add/([0-9]+)' => 'cart/add/$1',
     'cart' => 'cart/index',
     'cabinet/edit' => 'cabinet/edit',
     'user/logout' => 'user/logout',
     'cabinet' => 'cabinet/index',
     'user/login' => 'user/login',
     'user/register' => 'user/register',
     'support' => 'site/support',
     'about' => 'site/about',
     'catalog/game/([0-9]+)' => 'catalog/view/$1',
     'catalog' => 'catalog/index',
     '' => 'site/index',




 );