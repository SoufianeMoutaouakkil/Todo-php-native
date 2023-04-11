<?php

require_once __DIR__ . "/../config.php";
require_once __DIR__ . "/../tools/tools.php";

function jsonGetFilePath(string $entity): string
{
    if (isset(getJsonDataFiles()[$entity]) && is_string(getJsonDataFiles()[$entity])) {
        return getJsonDataFiles()[$entity];
    }
    return "";
}

function jsonGetByKeyValue(string $entity, string $key, $value)
{
    $all = jsonGetAll($entity);
    $fnc = fn($item) => $item[$key] == $value;
    $targetArr = array_filter($all, $fnc);
    return array_values($targetArr);
}

function jsonGetById(string $entity, int $id)
{
    $all = jsonGetAll($entity);
    $fnc = fn($item) => $item["id"] == $id;
    $targetArr = array_filter($all, $fnc);
    return array_values($targetArr)[0] ?? [];
}

function jsonGetAll(string $entity)
{
    $path = jsonGetFilePath($entity);
    $jsonContent = file_get_contents($path);

    return json_decode($jsonContent, true);
}

function jsonEditById(string $entity, int $id, array $data)
{
    $all = getAll($entity);
    $index = getIndex($all, $id);

    $all[$index] = $data;

    save($entity, $all);
}

function jsonDeleteById(string $entity, int $id)
{
    $all = getAll($entity);
    $index = getIndex($all, $id);

    unset($all[$index]);

    save($entity, $all);
}

function jsonCreateEntity(string $entity, $data)
{
    $all = getAll($entity);
    $id = getLastId($all);
    $data["id"] = ++$id;
    $all[] = $data;

    save($entity, $all);
    return $id;
}

function save($entity, $data)
{
    $path = jsonGetFilePath($entity);
    $jsonContent = json_encode($data);

    file_put_contents($path, $jsonContent);
}

function getIndex($data, $id)
{
    foreach ($data as $key => $value) {
        if ($value["id"] == $id) {
            return $key;
        }
    }
    return false;
}

function getLastId($data)
{
    $ids = [];
    foreach ($data as $value) {
        $ids[] = $value["id"];
    }
    return max($ids);
}
