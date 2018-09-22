<?php
/** .-------------------------------------------------------------------
 * |      Site: www.hdcms.com  www.houdunren.com
 * |      Date: 2018/7/2 上午12:54
 * |    Author: 向军大叔 <2300071698@qq.com>
 * '-------------------------------------------------------------------*/
/**
 * 权限配置
 * 为了避免其他模块有同名的权限，权限标识要以 '控制器@方法' 开始
 */
return [
    [
        'group' => '文章管理',
        'permissions' => [
            ['title' => '添加栏目', 'name' => 'Article:add_group', 'guard' => 'admin'],
            ['title' => '添加文章', 'name' => 'Article:add_article', 'guard' => 'web'],
            ['title' => '微信设置', 'name' => 'Admin:config-wechat', 'guard' => 'web'],
            ['title' => '权限控制', 'name' => 'Admin:role-manage', 'guard' => 'admin'],
        ],
    ],
];
