<?php
/** .-------------------------------------------------------------------
 * |      Site: www.hdcms.com  www.houdunren.com
 * |      Date: 2018/7/2 上午12:54
 * |    Author: 向军大叔 <2300071698@qq.com>
 * '-------------------------------------------------------------------*/
/**
 * 后台菜单配置
 * 下面是属性说明：
 * title 菜单栏目
 * icon 图标参考 http://fontawesome.dashgame.com/
 * menus 子菜单
 * permission 权限标识，必须在permission.php配置文件中存在
 */
return [
    'Admin'=>[
        "title"      => "系统管理",
        "icon"       => "icon mdi mdi-border-all",
        'permission' => '权限标识',
        "menus"      => [
            [
                "title" => "角色管理",
                "permission" => "权限标识",
                "icon" => "ft-users",
                "url" => "链接地址",
                "menus" => [
                    ["title" => "角色列表", "permission" => "role.index", "url" => route('role.index')]
                ]
            ],
        ],
    ]
];
