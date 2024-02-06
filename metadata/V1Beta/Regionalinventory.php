<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/inventories/v1beta/regionalinventory.proto

namespace GPBMetadata\Google\Shopping\Merchant\Inventories\V1Beta;

class Regionalinventory
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Shopping\Type\Types::initOnce();
        \GPBMetadata\Google\Type\Interval::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Cgoogle/shopping/merchant/inventories/v1beta/regionalinventory.proto+google.shopping.merchant.inventories.v1betagoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/protobuf/empty.proto google/shopping/type/types.protogoogle/type/interval.proto"�
RegionalInventory
name (	B�A
account (B�A
region (	B�A*
price (2.google.shopping.type.Price/

sale_price (2.google.shopping.type.Price8
sale_price_effective_date (2.google.type.Interval
availability (	H �@
custom_attributes (2%.google.shopping.type.CustomAttribute:u�Ar
,merchantapi.googleapis.com/RegionalInventoryBaccounts/{account}/products/{product}/regionalInventories/{region}B
_availability"\\
ListRegionalInventoriesRequest
parent (	B�A
	page_size (

page_token (	"�
ListRegionalInventoriesResponse\\
regional_inventories (2>.google.shopping.merchant.inventories.v1beta.RegionalInventory
next_page_token (	"�
InsertRegionalInventoryRequest
parent (	B�A_
regional_inventory (2>.google.shopping.merchant.inventories.v1beta.RegionalInventoryB�A"d
DeleteRegionalInventoryRequestB
name (	B4�A�A.
,merchantapi.googleapis.com/RegionalInventory2�
RegionalInventoryService�
ListRegionalInventoriesK.google.shopping.merchant.inventories.v1beta.ListRegionalInventoriesRequestL.google.shopping.merchant.inventories.v1beta.ListRegionalInventoriesResponse"W�Aparent���HF/inventories/v1beta/{parent=accounts/*/products/*}/regionalInventories�
InsertRegionalInventoryK.google.shopping.merchant.inventories.v1beta.InsertRegionalInventoryRequest>.google.shopping.merchant.inventories.v1beta.RegionalInventory"i���c"M/inventories/v1beta/{parent=accounts/*/products/*}/regionalInventories:insert:regional_inventory�
DeleteRegionalInventoryK.google.shopping.merchant.inventories.v1beta.DeleteRegionalInventoryRequest.google.protobuf.Empty"U�Aname���H*F/inventories/v1beta/{name=accounts/*/products/*/regionalInventories/*}G�Amerchantapi.googleapis.com�A\'https://www.googleapis.com/auth/contentB�
/com.google.shopping.merchant.inventories.v1betaBRegionalInventoryProtoPZWcloud.google.com/go/shopping/merchant/inventories/apiv1beta/inventoriespb;inventoriespbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

