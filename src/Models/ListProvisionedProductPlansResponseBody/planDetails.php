<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProvisionedProductPlansResponseBody;

use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProvisionedProductPlansResponseBody\planDetails\assignedApprovers;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProvisionedProductPlansResponseBody\planDetails\parameters;
use AlibabaCloud\SDK\Servicecatalog\V20210901\Models\ListProvisionedProductPlansResponseBody\planDetails\tags;
use AlibabaCloud\Tea\Model;

class planDetails extends Model
{
    /**
     * @description An array that consists of reviewers.
     *
     * @var assignedApprovers[]
     */
    public $assignedApprovers;

    /**
     * @description The time when the plan was created.
     *
     * The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     * @example 2022-09-13T02:01:22Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the plan.
     *
     * @example For development team.
     *
     * @var string
     */
    public $description;

    /**
     * @description The purpose of the plan. Valid values:
     *
     *   LaunchProduct: launches the product. This is the default value.
     *   UpdateProvisionedProduct: updates the information about the product instance.
     *   TerminateProvisionedProduct: terminates the product instance.
     *
     * @example LaunchProduct
     *
     * @var string
     */
    public $operationType;

    /**
     * @description The ID of the RAM entity to which the plan belongs.
     *
     * @example 24477111603637****
     *
     * @var string
     */
    public $ownerPrincipalId;

    /**
     * @description The name of the RAM entity to which the plan belongs.
     *
     * @example enduser
     *
     * @var string
     */
    public $ownerPrincipalName;

    /**
     * @description The type of the RAM entity to which the plan belongs. Valid values:
     *
     *   RamUser: a RAM user
     *   RamRole: a RAM role
     *
     * @example RamUser
     *
     * @var string
     */
    public $ownerPrincipalType;

    /**
     * @description An array that consists of the parameters in the template.
     *
     * @var parameters[]
     */
    public $parameters;

    /**
     * @description The ID of the plan.
     *
     * @example plan-bp18mmdh2u****
     *
     * @var string
     */
    public $planId;

    /**
     * @description The name of the plan.
     *
     * @example DEMO-Create an ECS instance-637\*\*\*\*
     *
     * @var string
     */
    public $planName;

    /**
     * @description The type of the plan.
     *
     * The value is fixed as Ros, which indicates Resource Orchestration Service (ROS).
     * @example Ros
     *
     * @var string
     */
    public $planType;

    /**
     * @description The ID of the product portfolio.
     *
     * @example port-bp1438kf2j****
     *
     * @var string
     */
    public $portfolioId;

    /**
     * @description The ID of the product.
     *
     * @example prod-bp1rtrnh2c****
     *
     * @var string
     */
    public $productId;

    /**
     * @description The name of the product.
     *
     * @example Create an ECS instance
     *
     * @var string
     */
    public $productName;

    /**
     * @description The ID of the product version.
     *
     * @example pv-bp19udk22v****
     *
     * @var string
     */
    public $productVersionId;

    /**
     * @description The ID of the product instance.
     *
     * @example pp-bp1c35162d****
     *
     * @var string
     */
    public $provisionedProductId;

    /**
     * @description The name of the product instance.
     *
     * @example rds-MYSQL-875****
     *
     * @var string
     */
    public $provisionedProductName;

    /**
     * @description The ID of the ROS stack.
     *
     * @example 2599090a-309e-4306-b989-17ba66a9****
     *
     * @var string
     */
    public $stackId;

    /**
     * @description The ID of the region to which the ROS stack belongs.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $stackRegionId;

    /**
     * @description The state of the plan. Valid values:
     *
     *   PreviewInProgress: The plan is being prechecked.
     *   PreviewSuccess: The precheck is successful.
     *   PreviewFailed: The precheck fails.
     *   ApplicationInProgress: The plan is being reviewed.
     *   ApplicationApproved: The plan is approved.
     *   ApplicationRejected: The approval is rejected.
     *   ExecuteInProgress: The plan is being run.
     *   ExecuteSuccess: The plan is run.
     *   ExecuteFailed: The plan fails to be run.
     *   Canceled: The plan is canceled.
     *
     * @example PreviewSuccess
     *
     * @var string
     */
    public $status;

    /**
     * @description The message returned for the state.
     *
     * > This parameter is returned only when PreviewFailed or ExecuteFailed is returned for the Status parameter.
     * @example Create stack failed: Resource CREATE failed: terraform stack sc-146611588617****-pp-bp1ddg1n2a**** failure...
     *
     * @var string
     */
    public $statusMessage;

    /**
     * @description An array that consists of custom tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the Alibaba Cloud account to which the plan belongs.
     *
     * @example 146611588617****
     *
     * @var string
     */
    public $uid;

    /**
     * @description The last time when the task was modified.
     *
     * The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     * @example 2022-07-18T06:02:35.075Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'assignedApprovers'      => 'AssignedApprovers',
        'createTime'             => 'CreateTime',
        'description'            => 'Description',
        'operationType'          => 'OperationType',
        'ownerPrincipalId'       => 'OwnerPrincipalId',
        'ownerPrincipalName'     => 'OwnerPrincipalName',
        'ownerPrincipalType'     => 'OwnerPrincipalType',
        'parameters'             => 'Parameters',
        'planId'                 => 'PlanId',
        'planName'               => 'PlanName',
        'planType'               => 'PlanType',
        'portfolioId'            => 'PortfolioId',
        'productId'              => 'ProductId',
        'productName'            => 'ProductName',
        'productVersionId'       => 'ProductVersionId',
        'provisionedProductId'   => 'ProvisionedProductId',
        'provisionedProductName' => 'ProvisionedProductName',
        'stackId'                => 'StackId',
        'stackRegionId'          => 'StackRegionId',
        'status'                 => 'Status',
        'statusMessage'          => 'StatusMessage',
        'tags'                   => 'Tags',
        'uid'                    => 'Uid',
        'updateTime'             => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->assignedApprovers) {
            $res['AssignedApprovers'] = [];
            if (null !== $this->assignedApprovers && \is_array($this->assignedApprovers)) {
                $n = 0;
                foreach ($this->assignedApprovers as $item) {
                    $res['AssignedApprovers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->operationType) {
            $res['OperationType'] = $this->operationType;
        }
        if (null !== $this->ownerPrincipalId) {
            $res['OwnerPrincipalId'] = $this->ownerPrincipalId;
        }
        if (null !== $this->ownerPrincipalName) {
            $res['OwnerPrincipalName'] = $this->ownerPrincipalName;
        }
        if (null !== $this->ownerPrincipalType) {
            $res['OwnerPrincipalType'] = $this->ownerPrincipalType;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = [];
            if (null !== $this->parameters && \is_array($this->parameters)) {
                $n = 0;
                foreach ($this->parameters as $item) {
                    $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->planId) {
            $res['PlanId'] = $this->planId;
        }
        if (null !== $this->planName) {
            $res['PlanName'] = $this->planName;
        }
        if (null !== $this->planType) {
            $res['PlanType'] = $this->planType;
        }
        if (null !== $this->portfolioId) {
            $res['PortfolioId'] = $this->portfolioId;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->productVersionId) {
            $res['ProductVersionId'] = $this->productVersionId;
        }
        if (null !== $this->provisionedProductId) {
            $res['ProvisionedProductId'] = $this->provisionedProductId;
        }
        if (null !== $this->provisionedProductName) {
            $res['ProvisionedProductName'] = $this->provisionedProductName;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }
        if (null !== $this->stackRegionId) {
            $res['StackRegionId'] = $this->stackRegionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->statusMessage) {
            $res['StatusMessage'] = $this->statusMessage;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return planDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AssignedApprovers'])) {
            if (!empty($map['AssignedApprovers'])) {
                $model->assignedApprovers = [];
                $n                        = 0;
                foreach ($map['AssignedApprovers'] as $item) {
                    $model->assignedApprovers[$n++] = null !== $item ? assignedApprovers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['OperationType'])) {
            $model->operationType = $map['OperationType'];
        }
        if (isset($map['OwnerPrincipalId'])) {
            $model->ownerPrincipalId = $map['OwnerPrincipalId'];
        }
        if (isset($map['OwnerPrincipalName'])) {
            $model->ownerPrincipalName = $map['OwnerPrincipalName'];
        }
        if (isset($map['OwnerPrincipalType'])) {
            $model->ownerPrincipalType = $map['OwnerPrincipalType'];
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n                 = 0;
                foreach ($map['Parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PlanId'])) {
            $model->planId = $map['PlanId'];
        }
        if (isset($map['PlanName'])) {
            $model->planName = $map['PlanName'];
        }
        if (isset($map['PlanType'])) {
            $model->planType = $map['PlanType'];
        }
        if (isset($map['PortfolioId'])) {
            $model->portfolioId = $map['PortfolioId'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['ProductVersionId'])) {
            $model->productVersionId = $map['ProductVersionId'];
        }
        if (isset($map['ProvisionedProductId'])) {
            $model->provisionedProductId = $map['ProvisionedProductId'];
        }
        if (isset($map['ProvisionedProductName'])) {
            $model->provisionedProductName = $map['ProvisionedProductName'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }
        if (isset($map['StackRegionId'])) {
            $model->stackRegionId = $map['StackRegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StatusMessage'])) {
            $model->statusMessage = $map['StatusMessage'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
