<?php

require_once APP_PATH . "/config.php";
require_once APP_PATH . "/tools/tools.php";
require_once "json.php";

function getModelFunction($function)
{
    $mode = getModelType();

    return $mode . ucfirst($function);
}
function getByKeyValue(string $entity, string $key, $value)
{
    $function = getModelFunction(__FUNCTION__);
    return $function($entity, $key, $value);
}

function getById(string $entity, int $id)
{
    $function = getModelFunction(__FUNCTION__);
    return $function($entity, $id);
}

function getAll(string $entity)
{
    $function = getModelFunction(__FUNCTION__);
    return $function($entity);
}

function editById(string $entity, int $id, array $data)
{
    $function = getModelFunction(__FUNCTION__);
    return $function($entity, $id, $data);
}

function deleteById(string $entity, int $id)
{
    $function = getModelFunction("deleteById");
    return $function($entity, $id);
}

function createEntity(string $entity, array $data)
{
    $function = getModelFunction(__FUNCTION__);
    return $function($entity, $data);
}