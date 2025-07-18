<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Ticm\V20181127\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVideoTask请求参数结构体
 *
 * @method string getVodTaskId() 获取需要查询的视频审核的任务ID
 * @method void setVodTaskId(string $VodTaskId) 设置需要查询的视频审核的任务ID
 */
class DescribeVideoTaskRequest extends AbstractModel
{
    /**
     * @var string 需要查询的视频审核的任务ID
     */
    public $VodTaskId;

    /**
     * @param string $VodTaskId 需要查询的视频审核的任务ID
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("VodTaskId",$param) and $param["VodTaskId"] !== null) {
            $this->VodTaskId = $param["VodTaskId"];
        }
    }
}
