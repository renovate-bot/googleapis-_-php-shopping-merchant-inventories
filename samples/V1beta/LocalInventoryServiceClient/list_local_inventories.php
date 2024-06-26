<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START merchantapi_v1beta_generated_LocalInventoryService_ListLocalInventories_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Shopping\Merchant\Inventories\V1beta\Client\LocalInventoryServiceClient;
use Google\Shopping\Merchant\Inventories\V1beta\ListLocalInventoriesRequest;
use Google\Shopping\Merchant\Inventories\V1beta\LocalInventory;

/**
 * Lists the `LocalInventory` resources for the given product in your merchant
 * account. The response might contain fewer items than specified by
 * `pageSize`. If `pageToken` was returned in previous request, it can be used
 * to obtain additional results.
 *
 * `LocalInventory` resources are listed per product for a given account.
 *
 * @param string $formattedParent The `name` of the parent product to list local inventories for.
 *                                Format:
 *                                `accounts/{account}/products/{product}`
 *                                Please see {@see LocalInventoryServiceClient::productName()} for help formatting this field.
 */
function list_local_inventories_sample(string $formattedParent): void
{
    // Create a client.
    $localInventoryServiceClient = new LocalInventoryServiceClient();

    // Prepare the request message.
    $request = (new ListLocalInventoriesRequest())
        ->setParent($formattedParent);

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $localInventoryServiceClient->listLocalInventories($request);

        /** @var LocalInventory $element */
        foreach ($response as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedParent = LocalInventoryServiceClient::productName('[ACCOUNT]', '[PRODUCT]');

    list_local_inventories_sample($formattedParent);
}
// [END merchantapi_v1beta_generated_LocalInventoryService_ListLocalInventories_sync]
