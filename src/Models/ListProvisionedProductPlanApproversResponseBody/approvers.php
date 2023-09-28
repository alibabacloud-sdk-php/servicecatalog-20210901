<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProvisionedProductPlanApproversResponseBody;

use AlibabaCloud\Tea\Model;

class approvers extends Model
{
    /**
     * @description The name of the reviewer.
     *
     * @example approver-1
     *
     * @var string
     */
    public $principalName;

    /**
     * @description The type of the Resource Access Management (RAM) entity of the reviewer. Valid values:
     *
     *   RamUser: a RAM user
     *   RamRole: a RAM role
     *
     * @example RamUser
     *
     * @var string
     */
    public $principalType;
    protected $_name = [
        'principalName' => 'PrincipalName',
        'principalType' => 'PrincipalType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->principalType) {
            $res['PrincipalType'] = $this->principalType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return approvers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['PrincipalType'])) {
            $model->principalType = $map['PrincipalType'];
        }

        return $model;
    }
}
