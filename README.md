# Bytescale PHP SDK

🚧 This package is in alpha development and is not suitable for production (yet) 🚧

A PHP library for interacting with the [Bytescale](https://www.bytescale.com) API.

See the official JS repository for more examples of what you can do: [https://github.com/bytescale/bytescale-javascript-sdk](https://github.com/bytescale/bytescale-javascript-sdk)

Developed using swagger-codegen v3 and the [Bytescale OpenAPI specification](https://api.bytescale.com/docs/openapi-spec-v3.json)

- API version: 2.0.0

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/sonable/bytescale-php-sdk.git"
    }
  ],
  "require": {
    "sonable/bytescale-php-sdk": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/bytescale-php-sdk/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Uploading Files

## Processing Files

## Downloading Files

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: authorization-header
$config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
$config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
$config = BytescalePHP\Client\Configuration::getDefaultConfiguration()->setHost('https://upcdn.io');

$apiInstance = new BytescalePHP\Client\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$account_id = "YOUR_ACCOUNT_ID"; // string | REPLACE THIS WITH YOUR ACCOUNT ID
$file_path = "/MyFolder/IMG_1866.jpg"; // string | REPLACE THIS WITH A BYTESCALE FILEPATH
$cache = true; // bool | Specifies whether to cache the raw file in the Bytescale CDN.  Default: true
$cache_ttl = 1.2; // float | Specifies the maximum amount of time, in seconds, the file will be cached on the user's device and in the Bytescale CDN's edge cache.  Default: Please refer to your account's default cache settings in the Bytescale Dashboard.
$version = "version_example"; // string | Downloads the latest version of your file (if you have overwritten it) when added to the URL with a unique value.    The value of the `version` parameter can be anything, e.g. an incremental number, a timestamp, etc.    You only need to provide and update this value if/when you overwrite your file.

try {
    $result = $apiInstance->downloadFile($account_id, $file_path, $cache, $cache_ttl, $version);
    $localPath = $_SERVER['DOCUMENT_ROOT'] . '/my-downloaded-file.jpg';
    file_put_contents($localPath, $result) or die("Unable to save file!");
    print_r('Downloaded: ' . $file_path);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->downloadFile: ', $e->getMessage(), PHP_EOL;
}

```

## Get File Details

## Listing Folders

## Documentation for API Endpoints

All URIs are relative to *https://api.bytescale.com*

| Class       | Method                                                                 | HTTP request                                                                | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
| ----------- | ---------------------------------------------------------------------- | --------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| _FileApi_   | [**copyFile**](docs/Api/FileApi.md#copyfile)                           | **POST** /v2/accounts/{accountId}/files/copy                                | Copies a file synchronously.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            |
| _FileApi_   | [**copyFileBatch**](docs/Api/FileApi.md#copyfilebatch)                 | **POST** /v2/accounts/{accountId}/files/copy/batch                          | Copies multiple files asynchronously.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| _FileApi_   | [**deleteFile**](docs/Api/FileApi.md#deletefile)                       | **DELETE** /v2/accounts/{accountId}/files                                   | Deletes a file synchronously. Requires a &#x60;secret*\*&#x60; API key. Alternatively, you can use a &#x60;public*\*&#x60; API key and JWT-based auth.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| _FileApi_   | [**deleteFileBatch**](docs/Api/FileApi.md#deletefilebatch)             | **DELETE** /v2/accounts/{accountId}/files/batch                             | Deletes multiple files asynchronously. Requires a &#x60;secret*\*&#x60; API key. Alternatively, you can use a &#x60;public*\*&#x60; API key and JWT-based auth.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| _FileApi_   | [**downloadFile**](docs/Api/FileApi.md#downloadfile)                   | **GET** /{accountId}/raw{filePath}                                          | Downloads a file in its original/unprocessed state.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     |
| _FileApi_   | [**getFileDetails**](docs/Api/FileApi.md#getfiledetails)               | **GET** /v2/accounts/{accountId}/files/details                              | Gets the full details (e.g. metadata, tags, etc.) for a file.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| _FileApi_   | [**processFile**](docs/Api/FileApi.md#processfile)                     | **GET** /{accountId}/{transformation}{filePath}                             | Processes a file and returns the result.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| _FileApi_   | [**processFileAndSave**](docs/Api/FileApi.md#processfileandsave)       | **POST** /{accountId}/save/{transformation}{filePath}                       | Processes a file and saves the result.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| _FolderApi_ | [**copyFolder**](docs/Api/FolderApi.md#copyfolder)                     | **POST** /v2/accounts/{accountId}/folders/copy                              | Copies a folder asynchronously. You can use ListFolder to preview the operation using the &#x60;dryRun&#x60; parameter.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 |
| _FolderApi_ | [**copyFolderBatch**](docs/Api/FolderApi.md#copyfolderbatch)           | **POST** /v2/accounts/{accountId}/folders/copy/batch                        | Copies multiple folders asynchronously. You can use ListFolder to preview the operation using the &#x60;dryRun&#x60; parameter.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| _FolderApi_ | [**deleteFolder**](docs/Api/FolderApi.md#deletefolder)                 | **DELETE** /v2/accounts/{accountId}/folders                                 | Deletes a folder asynchronously. You can use ListFolder to preview the operation using the &#x60;dryRun&#x60; parameter. _When deleting a folder with external storage:_ if the folder at &#x60;folderPath&#x60; has overridden storage settings (like an AWS S3 bucket), no files will be deleted, regardless of the parameters you pass. Only the mapping will be removed. If the folder at &#x60;folderPath&#x60; has inherited storage settings but includes subfolders with overridden storage settings, files in those subfolders won&#x27;t be deleted, regardless of the parameters you pass. In summary, files in folders with overridden storage are never deleted, unless you directly delete a subfolder of such a folder. Requires a &#x60;secret*\*&#x60; API key. Alternatively, you can use a &#x60;public*\*&#x60; API key and JWT-based auth.         |
| _FolderApi_ | [**deleteFolderBatch**](docs/Api/FolderApi.md#deletefolderbatch)       | **DELETE** /v2/accounts/{accountId}/folders/batch                           | Deletes multiple folders asynchronously. You can use ListFolder to preview the operation using the &#x60;dryRun&#x60; parameter. _When deleting a folder with external storage:_ if the folder at &#x60;folderPath&#x60; has overridden storage settings (like an AWS S3 bucket), no files will be deleted, regardless of the parameters you pass. Only the mapping will be removed. If the folder at &#x60;folderPath&#x60; has inherited storage settings but includes subfolders with overridden storage settings, files in those subfolders won&#x27;t be deleted, regardless of the parameters you pass. In summary, files in folders with overridden storage are never deleted, unless you directly delete a subfolder of such a folder. Requires a &#x60;secret*\*&#x60; API key. Alternatively, you can use a &#x60;public*\*&#x60; API key and JWT-based auth. |
| _FolderApi_ | [**getFolderDetails**](docs/Api/FolderApi.md#getfolderdetails)         | **GET** /v2/accounts/{accountId}/folders                                    | Gets the full details (e.g. permission, storage layer, etc.) for a folder. Returns an empty object if no settings have been configured for this folder. Requires a &#x60;secret*\*&#x60; API key. Alternatively, you can use a &#x60;public*\*&#x60; API key and JWT-based auth.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| _FolderApi_ | [**listFolder**](docs/Api/FolderApi.md#listfolder)                     | **GET** /v2/accounts/{accountId}/folders/list                               | Lists the folder&#x27;s contents. The result may be paginated: subsequent pages can be requested by passing the &#x60;&#x60;&#x60;cursor&#x60;&#x60;&#x60; from the response into the next request. Pagination is complete when the response includes &#x60;isPaginationComplete&#x3D;true&#x60;.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
| _FolderApi_ | [**putFolder**](docs/Api/FolderApi.md#putfolder)                       | **PUT** /v2/accounts/{accountId}/folders                                    | Creates or updates the folder specified by the &#x60;folderPath&#x60;. If the folder&#x27;s ancestors do not exist, they will be created automatically (with empty FolderSettings). Note: you don&#x27;t need to create folders before uploading files to them. Requires a &#x60;secret*\*&#x60; API key. Alternatively, you can use a &#x60;public*\*&#x60; API key and JWT-based auth.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| _JobApi_    | [**cancelJob**](docs/Api/JobApi.md#canceljob)                          | **DELETE** /v2/accounts/{accountId}/jobs/{jobType}/{jobId}                  | Cancels an in-progress background job. Requires a &#x60;secret\_\*&#x60; API key.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
| _JobApi_    | [**getJob**](docs/Api/JobApi.md#getjob)                                | **GET** /v2/accounts/{accountId}/jobs/{jobType}/{jobId}                     | Gets information on a background job. Requires a &#x60;secret\_\*&#x60; API key.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
| _JobApi_    | [**listRecentJobs**](docs/Api/JobApi.md#listrecentjobs)                | **GET** /v2/accounts/{accountId}/jobs                                       | Lists the most recently issued background jobs. Requires a &#x60;secret\_\*&#x60; API key.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
| _UploadApi_ | [**beginMultipartUpload**](docs/Api/UploadApi.md#beginmultipartupload) | **POST** /v2/accounts/{accountId}/uploads                                   | Begins a new multipart file upload process.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             |
| _UploadApi_ | [**completeUploadPart**](docs/Api/UploadApi.md#completeuploadpart)     | **PUT** /v2/accounts/{accountId}/uploads/{uploadId}/parts/{uploadPartIndex} | Marks an upload part as uploaded. You must call this endpoint after you have successfully issued a &#x60;PUT&#x60; request to the &#x60;uploadUrl&#x60; on the corresponding UploadPart.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                |
| _UploadApi_ | [**getUploadPart**](docs/Api/UploadApi.md#getuploadpart)               | **GET** /v2/accounts/{accountId}/uploads/{uploadId}/parts/{uploadPartIndex} | Gets a remaining upload part for a multipart file upload.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               |
| _UploadApi_ | [**listUploadParts**](docs/Api/UploadApi.md#listuploadparts)           | **GET** /v2/accounts/{accountId}/uploads/{uploadId}/parts                   | Lists the remaining upload parts for a multipart file upload. An empty array is returned when the upload is complete.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   |
| _UploadApi_ | [**uploadFromUrl**](docs/Api/UploadApi.md#uploadfromurl)               | **POST** /v2/accounts/{accountId}/uploads/url                               | Upload from a URL with a single HTTP request:                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |

## Documentation For Models

- [AccountId](docs/Model/AccountId.md)
- [AccountJobId](docs/Model/AccountJobId.md)
- [AccountJobStatus](docs/Model/AccountJobStatus.md)
- [AccountJobType](docs/Model/AccountJobType.md)
- [AllOfFileDetailsOriginalFileName](docs/Model/AllOfFileDetailsOriginalFileName.md)
- [AsyncResponse](docs/Model/AsyncResponse.md)
- [AwsAccessKey](docs/Model/AwsAccessKey.md)
- [AwsRegion](docs/Model/AwsRegion.md)
- [AwsSecretKey](docs/Model/AwsSecretKey.md)
- [Base64](docs/Model/Base64.md)
- [BasicUploadResponse](docs/Model/BasicUploadResponse.md)
- [BeginMultipartUploadRequest](docs/Model/BeginMultipartUploadRequest.md)
- [BeginMultipartUploadResponse](docs/Model/BeginMultipartUploadResponse.md)
- [BeginMultipartUploadResponseUploadParts](docs/Model/BeginMultipartUploadResponseUploadParts.md)
- [CloudflareAccountId](docs/Model/CloudflareAccountId.md)
- [CompleteUploadPartRequest](docs/Model/CompleteUploadPartRequest.md)
- [CopyFileBatchRequest](docs/Model/CopyFileBatchRequest.md)
- [CopyFileRequest](docs/Model/CopyFileRequest.md)
- [CopyFileResponse](docs/Model/CopyFileResponse.md)
- [CopyFolderBatchRequest](docs/Model/CopyFolderBatchRequest.md)
- [CopyFolderRequest](docs/Model/CopyFolderRequest.md)
- [CopyableFileDataFileMetadata\_](docs/Model/CopyableFileDataFileMetadata_.md)
- [CopyableFileDataFileTagNameArray\_](docs/Model/CopyableFileDataFileTagNameArray_.md)
- [DeleteFileBatchRequest](docs/Model/DeleteFileBatchRequest.md)
- [DeleteFolderBatchRequest](docs/Model/DeleteFolderBatchRequest.md)
- [DeleteFolderRequest](docs/Model/DeleteFolderRequest.md)
- [DigitalOceanRegion](docs/Model/DigitalOceanRegion.md)
- [DigitalOceanStorage](docs/Model/DigitalOceanStorage.md)
- [DigitalOceanStorageCredentials](docs/Model/DigitalOceanStorageCredentials.md)
- [DigitalOceanStorageWithoutCredentials](docs/Model/DigitalOceanStorageWithoutCredentials.md)
- [DynamicFilePath](docs/Model/DynamicFilePath.md)
- [ETag](docs/Model/ETag.md)
- [EpochMillis](docs/Model/EpochMillis.md)
- [ErrorResponse](docs/Model/ErrorResponse.md)
- [ErrorResponseError](docs/Model/ErrorResponseError.md)
- [FileCopyStatus](docs/Model/FileCopyStatus.md)
- [FileDetails](docs/Model/FileDetails.md)
- [FileDownloadGrants](docs/Model/FileDownloadGrants.md)
- [FileDownloadGrantsArray](docs/Model/FileDownloadGrantsArray.md)
- [FileMetadata](docs/Model/FileMetadata.md)
- [FileName](docs/Model/FileName.md)
- [FileNameVariablesEnabled](docs/Model/FileNameVariablesEnabled.md)
- [FileOrFolderPath](docs/Model/FileOrFolderPath.md)
- [FilePartCount](docs/Model/FilePartCount.md)
- [FilePath](docs/Model/FilePath.md)
- [FilePathDefinition](docs/Model/FilePathDefinition.md)
- [FilePathText](docs/Model/FilePathText.md)
- [FileSummary](docs/Model/FileSummary.md)
- [FileTagName](docs/Model/FileTagName.md)
- [FolderDescription](docs/Model/FolderDescription.md)
- [FolderDetails](docs/Model/FolderDetails.md)
- [FolderPath](docs/Model/FolderPath.md)
- [FolderPathVariablesEnabled](docs/Model/FolderPathVariablesEnabled.md)
- [FolderSettings](docs/Model/FolderSettings.md)
- [FolderSettingsInherited](docs/Model/FolderSettingsInherited.md)
- [FolderSettingsStorageLayerSummary\_](docs/Model/FolderSettingsStorageLayerSummary_.md)
- [FolderSummary](docs/Model/FolderSummary.md)
- [GoogleBucketName](docs/Model/GoogleBucketName.md)
- [GoogleStorage](docs/Model/GoogleStorage.md)
- [GoogleStorageCredentials](docs/Model/GoogleStorageCredentials.md)
- [GoogleStorageWithoutCredentials](docs/Model/GoogleStorageWithoutCredentials.md)
- [HttpUrl](docs/Model/HttpUrl.md)
- [HttpUrlToUpload](docs/Model/HttpUrlToUpload.md)
- [IncludeFiles](docs/Model/IncludeFiles.md)
- [IncludeOverriddenStorage](docs/Model/IncludeOverriddenStorage.md)
- [IncludePhysicalFolders](docs/Model/IncludePhysicalFolders.md)
- [IncludeVirtualFolders](docs/Model/IncludeVirtualFolders.md)
- [InternalStorageV1](docs/Model/InternalStorageV1.md)
- [InternalStorageV2](docs/Model/InternalStorageV2.md)
- [IterateFolderRecursively](docs/Model/IterateFolderRecursively.md)
- [JobSummary](docs/Model/JobSummary.md)
- [JobSummaryError](docs/Model/JobSummaryError.md)
- [JobUrl](docs/Model/JobUrl.md)
- [JsonObject](docs/Model/JsonObject.md)
- [ListFolderCursor](docs/Model/ListFolderCursor.md)
- [ListFolderDryRun](docs/Model/ListFolderDryRun.md)
- [ListFolderItemLimit](docs/Model/ListFolderItemLimit.md)
- [ListFolderResponse](docs/Model/ListFolderResponse.md)
- [ListRecentJobsResponse](docs/Model/ListRecentJobsResponse.md)
- [MimeType](docs/Model/MimeType.md)
- [MultipartUploadProtocol](docs/Model/MultipartUploadProtocol.md)
- [ObjectSummary](docs/Model/ObjectSummary.md)
- [OmitDigitalOceanStorageCredentials\_](docs/Model/OmitDigitalOceanStorageCredentials_.md)
- [OmitGoogleStorageCredentials\_](docs/Model/OmitGoogleStorageCredentials_.md)
- [OmitR2StorageCredentials\_](docs/Model/OmitR2StorageCredentials_.md)
- [OmitS3StorageCredentials\_](docs/Model/OmitS3StorageCredentials_.md)
- [OriginalFileName](docs/Model/OriginalFileName.md)
- [PatchFolderDescription](docs/Model/PatchFolderDescription.md)
- [PatchFolderPublicPermissions](docs/Model/PatchFolderPublicPermissions.md)
- [PatchFolderSettings](docs/Model/PatchFolderSettings.md)
- [PatchFolderStorageLayer](docs/Model/PatchFolderStorageLayer.md)
- [PathPermissionScope](docs/Model/PathPermissionScope.md)
- [PickDigitalOceanStorageExcludeKeyofDigitalOceanStorageCredentialsBucket](docs/Model/PickDigitalOceanStorageExcludeKeyofDigitalOceanStorageCredentialsBucket.md)
- [PickDigitalOceanStorageExcludeKeyofDigitalOceanStorageCredentials\_](docs/Model/PickDigitalOceanStorageExcludeKeyofDigitalOceanStorageCredentials_.md)
- [PickGoogleStorageExcludeKeyofGoogleStorageCredentialsBucket](docs/Model/PickGoogleStorageExcludeKeyofGoogleStorageCredentialsBucket.md)
- [PickGoogleStorageExcludeKeyofGoogleStorageCredentials\_](docs/Model/PickGoogleStorageExcludeKeyofGoogleStorageCredentials_.md)
- [PickR2StorageExcludeKeyofR2StorageCredentialsBucket](docs/Model/PickR2StorageExcludeKeyofR2StorageCredentialsBucket.md)
- [PickR2StorageExcludeKeyofR2StorageCredentials\_](docs/Model/PickR2StorageExcludeKeyofR2StorageCredentials_.md)
- [PickS3StorageExcludeKeyofS3StorageCredentialsBucket](docs/Model/PickS3StorageExcludeKeyofS3StorageCredentialsBucket.md)
- [PickS3StorageExcludeKeyofS3StorageCredentials\_](docs/Model/PickS3StorageExcludeKeyofS3StorageCredentials_.md)
- [PreSignedUploadUrl](docs/Model/PreSignedUploadUrl.md)
- [ProcessFileAndSaveRequest](docs/Model/ProcessFileAndSaveRequest.md)
- [ProcessFileAndSaveResponse](docs/Model/ProcessFileAndSaveResponse.md)
- [ProcessFileAndSaveResponseAsync](docs/Model/ProcessFileAndSaveResponseAsync.md)
- [ProcessFileAndSaveResponseSync](docs/Model/ProcessFileAndSaveResponseSync.md)
- [ProcessedFileMetadata](docs/Model/ProcessedFileMetadata.md)
- [ProcessedFileTags](docs/Model/ProcessedFileTags.md)
- [PublicPermissions](docs/Model/PublicPermissions.md)
- [PublicPermissionsGrants](docs/Model/PublicPermissionsGrants.md)
- [PublicPermissionsGrantsFiles](docs/Model/PublicPermissionsGrantsFiles.md)
- [PublicPermissionsInherited](docs/Model/PublicPermissionsInherited.md)
- [PutFolderRequest](docs/Model/PutFolderRequest.md)
- [R2Storage](docs/Model/R2Storage.md)
- [R2StorageCredentials](docs/Model/R2StorageCredentials.md)
- [R2StorageWithoutCredentials](docs/Model/R2StorageWithoutCredentials.md)
- [RawFileUrl](docs/Model/RawFileUrl.md)
- [RawFileUrlText](docs/Model/RawFileUrlText.md)
- [RelativeOrAbsoluteFilePath](docs/Model/RelativeOrAbsoluteFilePath.md)
- [RelativeOrAbsoluteFolderPath](docs/Model/RelativeOrAbsoluteFolderPath.md)
- [S3BucketName](docs/Model/S3BucketName.md)
- [S3ObjectKey](docs/Model/S3ObjectKey.md)
- [S3Storage](docs/Model/S3Storage.md)
- [S3StorageCredentials](docs/Model/S3StorageCredentials.md)
- [S3StorageWithoutCredentials](docs/Model/S3StorageWithoutCredentials.md)
- [SizeInBytes](docs/Model/SizeInBytes.md)
- [SpecifiedFieldValueEmptiableFolderDescription\_](docs/Model/SpecifiedFieldValueEmptiableFolderDescription_.md)
- [SpecifiedFieldValueEmptiablePublicPermissionsArray\_](docs/Model/SpecifiedFieldValueEmptiablePublicPermissionsArray_.md)
- [SpecifiedFieldValueEmptiableStorageLayerUpdate\_](docs/Model/SpecifiedFieldValueEmptiableStorageLayerUpdate_.md)
- [StorageLayerInherited](docs/Model/StorageLayerInherited.md)
- [StorageLayerSummary](docs/Model/StorageLayerSummary.md)
- [StorageLayerUpdate](docs/Model/StorageLayerUpdate.md)
- [TransformationArtifactPath](docs/Model/TransformationArtifactPath.md)
- [TransformationParamValue](docs/Model/TransformationParamValue.md)
- [TransformationParams](docs/Model/TransformationParams.md)
- [TransformationParamsGroup](docs/Model/TransformationParamsGroup.md)
- [TransformationSummary](docs/Model/TransformationSummary.md)
- [TransformationUrlSlug](docs/Model/TransformationUrlSlug.md)
- [TransformationUrlSlugPattern](docs/Model/TransformationUrlSlugPattern.md)
- [UnspecifiedFieldValue](docs/Model/UnspecifiedFieldValue.md)
- [UpdatableFieldEmptiableFolderDescription\_](docs/Model/UpdatableFieldEmptiableFolderDescription_.md)
- [UpdatableFieldEmptiablePublicPermissionsArray\_](docs/Model/UpdatableFieldEmptiablePublicPermissionsArray_.md)
- [UpdatableFieldEmptiableStorageLayerUpdate\_](docs/Model/UpdatableFieldEmptiableStorageLayerUpdate_.md)
- [UploadFromUrlRequest](docs/Model/UploadFromUrlRequest.md)
- [UploadId](docs/Model/UploadId.md)
- [UploadPart](docs/Model/UploadPart.md)
- [UploadPartIndex](docs/Model/UploadPartIndex.md)
- [UploadPartList](docs/Model/UploadPartList.md)
- [UploadPartRange](docs/Model/UploadPartRange.md)
- [WebStorage](docs/Model/WebStorage.md)
- [WithFolderPathPublicPermissionsArray\_](docs/Model/WithFolderPathPublicPermissionsArray_.md)
- [WithFolderPathStorageLayerSummary\_](docs/Model/WithFolderPathStorageLayerSummary_.md)

## Documentation For Authorization

## authorization-header

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header
