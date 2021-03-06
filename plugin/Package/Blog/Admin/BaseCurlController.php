<?php
// +----------------------------------------------------------------------
// | KQAdmin [ 基于Laravel后台快速开发后台 ]
// | 快速laravel后台管理系统，集成了，图片上传，多图上传，批量Excel导入，批量插入，修改，添加，搜索，权限管理RBAC,验证码，助你开发快人一步。
// +----------------------------------------------------------------------
// | Copyright (c) 2012~2019 www.haoxuekeji.cn All rights reserved.
// +----------------------------------------------------------------------
// | Laravel 原创视频教程，文档教程请关注 www.heibaiketang.com
// +----------------------------------------------------------------------
// | Author: kongqi <531833998@qq.com>`
// +----------------------------------------------------------------------

namespace Plugin\Package\Blog\Admin;

use Plugin\Package\Blog\Services\QueryWhereServices;
use Plugin\Plugin\Controller\Admin\PluginCurlController;

class BaseCurlController extends PluginCurlController
{
    /**
     * 设置搜索条件参数修改成我们的自己插件的查询地方
     * 或者你可以直接在模型里面修改getSearchModel这个方法，这个方法定义在app/TraitClass/SearchScopeTrait.php
     *
     * @param $data
     * @return mixed
     */
    public function getSearchModel($data, $type = '')
    {
        $search = new QueryWhereServices($this->getModel(), $data, $type);
        $search->unsetAllWhere();
        return $search->returnModel();
    }

}