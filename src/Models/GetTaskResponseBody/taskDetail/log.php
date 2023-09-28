<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetTaskResponseBody\taskDetail;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\GetTaskResponseBody\taskDetail\log\terraformLogs;
use AlibabaCloud\Tea\Model;

class log extends Model
{
    /**
     * @description The Terraform logs.
     *
     * @var terraformLogs[]
     */
    public $terraformLogs;
    protected $_name = [
        'terraformLogs' => 'TerraformLogs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->terraformLogs) {
            $res['TerraformLogs'] = [];
            if (null !== $this->terraformLogs && \is_array($this->terraformLogs)) {
                $n = 0;
                foreach ($this->terraformLogs as $item) {
                    $res['TerraformLogs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return log
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TerraformLogs'])) {
            if (!empty($map['TerraformLogs'])) {
                $model->terraformLogs = [];
                $n                    = 0;
                foreach ($map['TerraformLogs'] as $item) {
                    $model->terraformLogs[$n++] = null !== $item ? terraformLogs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
