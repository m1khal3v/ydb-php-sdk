<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: kikimr/public/api/protos/ydb_experimental.proto

namespace GPBMetadata\Kikimr\PBPublic\Api\Protos;

class YdbExperimental
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbIssueMessage::initOnce();
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbOperation::initOnce();
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbStatusCodes::initOnce();
        \GPBMetadata\Kikimr\PBPublic\Api\Protos\YdbValue::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
/kikimr/public/api/protos/ydb_experimental.protoYdb.Experimental,kikimr/public/api/protos/ydb_operation.proto/kikimr/public/api/protos/ydb_status_codes.proto(kikimr/public/api/protos/ydb_value.proto"|
UploadRowsRequest
table (	
rows (2.Ydb.TypedValue9
operation_params (2.Ydb.Operations.OperationParams"B
UploadRowsResponse,
	operation (2.Ydb.Operations.Operation"
UploadRowsResult"�
ExecuteStreamQueryRequest
yql_text (	O

parameters (2;.Ydb.Experimental.ExecuteStreamQueryRequest.ParametersEntryM
profile_mode (27.Ydb.Experimental.ExecuteStreamQueryRequest.ProfileMode
explain (B
ParametersEntry
key (	
value (2.Ydb.TypedValue:8"J
ProfileMode
PROFILE_MODE_UNSPECIFIED 
NONE	
BASIC
FULL"�
ExecuteStreamQueryResponse)
status (2.Ydb.StatusIds.StatusCode\'
issues (2.Ydb.Issue.IssueMessage:
result (2*.Ydb.Experimental.ExecuteStreamQueryResult"
StreamQueryProgress"�
ExecuteStreamQueryResult$

result_set (2.Ydb.ResultSetH 
profile (	H 9
progress (2%.Ydb.Experimental.StreamQueryProgressH 

query_plan (	H B
result"g
GetDiskSpaceUsageRequest9
operation_params (2.Ydb.Operations.OperationParams
database (	"I
GetDiskSpaceUsageResponse,
	operation (2.Ydb.Operations.Operation"�
GetDiskSpaceUsageResult
cloud_id (	
	folder_id (	
database_id (	

total_size (
	data_size (

index_size (B4
com.yandex.ydb.experimentalBExperimentalProtos�bproto3'
        , true);

        static::$is_initialized = true;
    }
}

