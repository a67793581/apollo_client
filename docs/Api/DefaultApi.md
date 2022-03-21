# Swagger\Client\DefaultApi

All URIs are relative to *http://config-admin.test.huajiao.com/openapi/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteField**](DefaultApi.md#deletefield) | **DELETE** /envs/{env}/apps/{appId}/clusters/{clusterName}/namespaces/{namespaceName}/items/{key} | 删除配置接口
[**getAppInfo**](DefaultApi.md#getappinfo) | **GET** /apps | 获取App信息
[**getClusters**](DefaultApi.md#getclusters) | **GET** /envs/{env}/apps/{appId}/clusters/{clusterName} | 获取集群接口
[**getEnvClustersById**](DefaultApi.md#getenvclustersbyid) | **GET** /apps/{appId}/envclusters | 获取App的环境，集群信息
[**getField**](DefaultApi.md#getfield) | **GET** /envs/{env}/apps/{appId}/clusters/{clusterName}/namespaces/{namespaceName}/items/{key} | 读取配置接口
[**getLock**](DefaultApi.md#getlock) | **GET** /envs/{env}/apps/{appId}/clusters/{clusterName}/namespaces/{namespaceName}/lock | 获取某个Namespace当前编辑人接口
[**getNamespace**](DefaultApi.md#getnamespace) | **GET** /envs/{env}/apps/{appId}/clusters/{clusterName}/namespaces/{namespaceName} | 获取某个Namespace信息接口
[**getNamespaces**](DefaultApi.md#getnamespaces) | **GET** /envs/{env}/apps/{appId}/clusters/{clusterName}/namespaces | 获取集群下所有Namespace信息接口
[**getReleases**](DefaultApi.md#getreleases) | **GET** /envs/{env}/apps/{appId}/clusters/{clusterName}/namespaces/{namespaceName}/releases/latest | 获取生效配置接口
[**postClusters**](DefaultApi.md#postclusters) | **POST** /envs/{env}/apps/{appId}/clusters | 创建集群接口
[**postField**](DefaultApi.md#postfield) | **POST** /envs/{env}/apps/{appId}/clusters/{clusterName}/namespaces/{namespaceName}/items | 新增配置接口
[**postNamespace**](DefaultApi.md#postnamespace) | **POST** /apps/{appId}/appnamespaces | 创建Namespace
[**postReleases**](DefaultApi.md#postreleases) | **POST** /envs/{env}/apps/{appId}/clusters/{clusterName}/namespaces/{namespaceName}/releases | 发布配置接口
[**putField**](DefaultApi.md#putfield) | **PUT** /envs/{env}/apps/{appId}/clusters/{clusterName}/namespaces/{namespaceName}/items/{key} | 修改配置接口
[**rollback**](DefaultApi.md#rollback) | **PUT** /envs/{env}/releases/{releaseId}/rollback | 回滚已发布配置接口

# **deleteField**
> deleteField($app_id, $env, $cluster_name, $namespace_name, $key, $operator)

删除配置接口

删除配置接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 应用id
$env = "env_example"; // string | 环境
$cluster_name = "cluster_name_example"; // string | 集群名称
$namespace_name = "namespace_name_example"; // string | 命名空间名称
$key = "key_example"; // string | 字段名
$operator = "operator_example"; // string | 删除配置的操作者，域账号

try {
    $apiInstance->deleteField($app_id, $env, $cluster_name, $namespace_name, $key, $operator);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| 应用id |
 **env** | **string**| 环境 |
 **cluster_name** | **string**| 集群名称 |
 **namespace_name** | **string**| 命名空间名称 |
 **key** | **string**| 字段名 |
 **operator** | **string**| 删除配置的操作者，域账号 |

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAppInfo**
> \Swagger\Client\Model\AppInfo[] getAppInfo()

获取App信息

获取App信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAppInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAppInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\AppInfo[]**](../Model/AppInfo.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getClusters**
> \Swagger\Client\Model\ClusterInfo getClusters($app_id, $env, $cluster_name)

获取集群接口

获取集群接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 应用id
$env = "env_example"; // string | 环境
$cluster_name = "cluster_name_example"; // string | 集群名称

try {
    $result = $apiInstance->getClusters($app_id, $env, $cluster_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getClusters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| 应用id |
 **env** | **string**| 环境 |
 **cluster_name** | **string**| 集群名称 |

### Return type

[**\Swagger\Client\Model\ClusterInfo**](../Model/ClusterInfo.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnvClustersById**
> \Swagger\Client\Model\EnvCluster[] getEnvClustersById($app_id)

获取App的环境，集群信息

获取App的环境，集群信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 应用id

try {
    $result = $apiInstance->getEnvClustersById($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEnvClustersById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| 应用id |

### Return type

[**\Swagger\Client\Model\EnvCluster[]**](../Model/EnvCluster.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getField**
> \Swagger\Client\Model\Field getField($app_id, $env, $cluster_name, $namespace_name, $key)

读取配置接口

读取配置接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 应用id
$env = "env_example"; // string | 环境
$cluster_name = "cluster_name_example"; // string | 集群名称
$namespace_name = "namespace_name_example"; // string | 命名空间名称
$key = "key_example"; // string | 字段名

try {
    $result = $apiInstance->getField($app_id, $env, $cluster_name, $namespace_name, $key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| 应用id |
 **env** | **string**| 环境 |
 **cluster_name** | **string**| 集群名称 |
 **namespace_name** | **string**| 命名空间名称 |
 **key** | **string**| 字段名 |

### Return type

[**\Swagger\Client\Model\Field**](../Model/Field.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLock**
> \Swagger\Client\Model\Lock getLock($app_id, $env, $cluster_name, $namespace_name)

获取某个Namespace当前编辑人接口

Apollo在生产环境（PRO）有限制规则：每次发布只能有一个人编辑配置，且该次发布的人不能是该次发布的编辑人。<br> 也就是说如果一个用户A修改了某个namespace的配置，那么在这个namespace发布前，只能由A修改，其它用户无法修改。<br> 同时，该用户A无法发布自己修改的配置，必须找另一个有发布权限的人操作。<br> 这个接口就是用来获取当前namespace是否有人锁定的接口。在非生产环境（FAT、UAT），该接口始终返回没有人锁定。<br>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 应用id
$env = "env_example"; // string | 环境
$cluster_name = "cluster_name_example"; // string | 集群名称
$namespace_name = "namespace_name_example"; // string | 命名空间名称

try {
    $result = $apiInstance->getLock($app_id, $env, $cluster_name, $namespace_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getLock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| 应用id |
 **env** | **string**| 环境 |
 **cluster_name** | **string**| 集群名称 |
 **namespace_name** | **string**| 命名空间名称 |

### Return type

[**\Swagger\Client\Model\Lock**](../Model/Lock.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNamespace**
> \Swagger\Client\Model\ModelNamespace getNamespace($app_id, $env, $cluster_name, $namespace_name)

获取某个Namespace信息接口

获取某个Namespace信息接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 应用id
$env = "env_example"; // string | 环境
$cluster_name = "cluster_name_example"; // string | 集群名称
$namespace_name = "namespace_name_example"; // string | 命名空间名称

try {
    $result = $apiInstance->getNamespace($app_id, $env, $cluster_name, $namespace_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getNamespace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| 应用id |
 **env** | **string**| 环境 |
 **cluster_name** | **string**| 集群名称 |
 **namespace_name** | **string**| 命名空间名称 |

### Return type

[**\Swagger\Client\Model\ModelNamespace**](../Model/ModelNamespace.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNamespaces**
> \Swagger\Client\Model\ModelNamespace[] getNamespaces($app_id, $env, $cluster_name)

获取集群下所有Namespace信息接口

获取集群下所有Namespace信息接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 应用id
$env = "env_example"; // string | 环境
$cluster_name = "cluster_name_example"; // string | 集群名称

try {
    $result = $apiInstance->getNamespaces($app_id, $env, $cluster_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getNamespaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| 应用id |
 **env** | **string**| 环境 |
 **cluster_name** | **string**| 集群名称 |

### Return type

[**\Swagger\Client\Model\ModelNamespace[]**](../Model/ModelNamespace.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReleases**
> \Swagger\Client\Model\Releases getReleases($app_id, $env, $cluster_name, $namespace_name)

获取生效配置接口

获取某个Namespace当前生效的已发布配置接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | 应用id
$env = "env_example"; // string | 环境
$cluster_name = "cluster_name_example"; // string | 集群名称
$namespace_name = "namespace_name_example"; // string | 命名空间名称

try {
    $result = $apiInstance->getReleases($app_id, $env, $cluster_name, $namespace_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getReleases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| 应用id |
 **env** | **string**| 环境 |
 **cluster_name** | **string**| 集群名称 |
 **namespace_name** | **string**| 命名空间名称 |

### Return type

[**\Swagger\Client\Model\Releases**](../Model/Releases.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postClusters**
> \Swagger\Client\Model\ClusterInfo postClusters($body, $app_id, $env)

创建集群接口

可以通过此接口创建集群，调用此接口需要授予第三方APP对目标APP的管理权限。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ClusterInfoBase(); // \Swagger\Client\Model\ClusterInfoBase | post携带参数
$app_id = "app_id_example"; // string | 应用id
$env = "env_example"; // string | 环境

try {
    $result = $apiInstance->postClusters($body, $app_id, $env);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postClusters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ClusterInfoBase**](../Model/ClusterInfoBase.md)| post携带参数 |
 **app_id** | **string**| 应用id |
 **env** | **string**| 环境 |

### Return type

[**\Swagger\Client\Model\ClusterInfo**](../Model/ClusterInfo.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postField**
> \Swagger\Client\Model\Field postField($body, $app_id, $env, $cluster_name, $namespace_name)

新增配置接口

新增配置接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\FieldBase(); // \Swagger\Client\Model\FieldBase | post携带参数
$app_id = "app_id_example"; // string | 应用id
$env = "env_example"; // string | 环境
$cluster_name = "cluster_name_example"; // string | 集群名称
$namespace_name = "namespace_name_example"; // string | 命名空间名称

try {
    $result = $apiInstance->postField($body, $app_id, $env, $cluster_name, $namespace_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FieldBase**](../Model/FieldBase.md)| post携带参数 |
 **app_id** | **string**| 应用id |
 **env** | **string**| 环境 |
 **cluster_name** | **string**| 集群名称 |
 **namespace_name** | **string**| 命名空间名称 |

### Return type

[**\Swagger\Client\Model\Field**](../Model/Field.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postNamespace**
> \Swagger\Client\Model\NamespaceInfo postNamespace($body, $app_id)

创建Namespace

可以通过此接口创建Namespace，调用此接口需要授予第三方APP对目标APP的管理权限。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\NamespaceBase(); // \Swagger\Client\Model\NamespaceBase | post携带参数
$app_id = "app_id_example"; // string | 应用id

try {
    $result = $apiInstance->postNamespace($body, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postNamespace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NamespaceBase**](../Model/NamespaceBase.md)| post携带参数 |
 **app_id** | **string**| 应用id |

### Return type

[**\Swagger\Client\Model\NamespaceInfo**](../Model/NamespaceInfo.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postReleases**
> \Swagger\Client\Model\Releases postReleases($body, $app_id, $env, $cluster_name, $namespace_name)

发布配置接口

发布配置接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ReleasesPost(); // \Swagger\Client\Model\ReleasesPost | post携带参数
$app_id = "app_id_example"; // string | 应用id
$env = "env_example"; // string | 环境
$cluster_name = "cluster_name_example"; // string | 集群名称
$namespace_name = "namespace_name_example"; // string | 命名空间名称

try {
    $result = $apiInstance->postReleases($body, $app_id, $env, $cluster_name, $namespace_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->postReleases: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ReleasesPost**](../Model/ReleasesPost.md)| post携带参数 |
 **app_id** | **string**| 应用id |
 **env** | **string**| 环境 |
 **cluster_name** | **string**| 集群名称 |
 **namespace_name** | **string**| 命名空间名称 |

### Return type

[**\Swagger\Client\Model\Releases**](../Model/Releases.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putField**
> putField($body, $app_id, $env, $cluster_name, $namespace_name, $key, $create_if_not_exists)

修改配置接口

修改配置接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\FieldPut(); // \Swagger\Client\Model\FieldPut | 携带参数
$app_id = "app_id_example"; // string | 应用id
$env = "env_example"; // string | 环境
$cluster_name = "cluster_name_example"; // string | 集群名称
$namespace_name = "namespace_name_example"; // string | 命名空间名称
$key = "key_example"; // string | 字段名
$create_if_not_exists = true; // bool | 当配置不存在时是否自动创建

try {
    $apiInstance->putField($body, $app_id, $env, $cluster_name, $namespace_name, $key, $create_if_not_exists);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->putField: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\FieldPut**](../Model/FieldPut.md)| 携带参数 |
 **app_id** | **string**| 应用id |
 **env** | **string**| 环境 |
 **cluster_name** | **string**| 集群名称 |
 **namespace_name** | **string**| 命名空间名称 |
 **key** | **string**| 字段名 |
 **create_if_not_exists** | **bool**| 当配置不存在时是否自动创建 | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rollback**
> \Swagger\Client\Model\Releases rollback($operator, $release_id, $env)

回滚已发布配置接口

回滚已发布配置接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$operator = "operator_example"; // string | 删除配置的操作者，域账号
$release_id = "release_id_example"; // string | 发布记录id
$env = "env_example"; // string | 环境

try {
    $result = $apiInstance->rollback($operator, $release_id, $env);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->rollback: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **operator** | **string**| 删除配置的操作者，域账号 |
 **release_id** | **string**| 发布记录id |
 **env** | **string**| 环境 |

### Return type

[**\Swagger\Client\Model\Releases**](../Model/Releases.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

