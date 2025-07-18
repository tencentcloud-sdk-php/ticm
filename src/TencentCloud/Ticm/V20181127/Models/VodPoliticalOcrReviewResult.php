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
 * 内容审核 Ocr 文字鉴政、敏感任务结果类型
 *
 * @method string getStatus() 获取任务状态，有 PROCESSING，SUCCESS 和 FAIL 三种。
 * @method void setStatus(string $Status) 设置任务状态，有 PROCESSING，SUCCESS 和 FAIL 三种。
 * @method integer getCode() 获取错误码，0：成功，其他值：失败。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(integer $Code) 设置错误码，0：成功，其他值：失败。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMsg() 获取错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMsg(string $Msg) 设置错误信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getConfidence() 获取Ocr 文字涉政、敏感评分，分值为0到100。
 * @method void setConfidence(float $Confidence) 设置Ocr 文字涉政、敏感评分，分值为0到100。
 * @method string getSuggestion() 获取Ocr 文字涉政、敏感结果建议，取值范围：
pass。
review。
block。
 * @method void setSuggestion(string $Suggestion) 设置Ocr 文字涉政、敏感结果建议，取值范围：
pass。
review。
block。
 * @method array getSegmentSet() 获取Ocr 文字有涉政、敏感嫌疑的视频片段列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSegmentSet(array $SegmentSet) 设置Ocr 文字有涉政、敏感嫌疑的视频片段列表。
注意：此字段可能返回 null，表示取不到有效值。
 */
class VodPoliticalOcrReviewResult extends AbstractModel
{
    /**
     * @var string 任务状态，有 PROCESSING，SUCCESS 和 FAIL 三种。
     */
    public $Status;

    /**
     * @var integer 错误码，0：成功，其他值：失败。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var string 错误信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Msg;

    /**
     * @var float Ocr 文字涉政、敏感评分，分值为0到100。
     */
    public $Confidence;

    /**
     * @var string Ocr 文字涉政、敏感结果建议，取值范围：
pass。
review。
block。
     */
    public $Suggestion;

    /**
     * @var array Ocr 文字有涉政、敏感嫌疑的视频片段列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SegmentSet;

    /**
     * @param string $Status 任务状态，有 PROCESSING，SUCCESS 和 FAIL 三种。
     * @param integer $Code 错误码，0：成功，其他值：失败。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Msg 错误信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Confidence Ocr 文字涉政、敏感评分，分值为0到100。
     * @param string $Suggestion Ocr 文字涉政、敏感结果建议，取值范围：
pass。
review。
block。
     * @param array $SegmentSet Ocr 文字有涉政、敏感嫌疑的视频片段列表。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("Confidence",$param) and $param["Confidence"] !== null) {
            $this->Confidence = $param["Confidence"];
        }

        if (array_key_exists("Suggestion",$param) and $param["Suggestion"] !== null) {
            $this->Suggestion = $param["Suggestion"];
        }

        if (array_key_exists("SegmentSet",$param) and $param["SegmentSet"] !== null) {
            $this->SegmentSet = [];
            foreach ($param["SegmentSet"] as $key => $value){
                $obj = new VodOcrTextSegmentItem();
                $obj->deserialize($value);
                array_push($this->SegmentSet, $obj);
            }
        }
    }
}
