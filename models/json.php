<?php

require_once __DIR__ . "/../config.php";
require_once __DIR__ . "/../tools/tools.php";

function jsonGetFilePath(string $entity) :string
{
    if (isset(getJsonDataFiles()[$entity]) &&  is_string(getJsonDataFiles()[$entity])) {
        return getJsonDataFiles()[$entity];
    }
    return "";
}

function jsonGetByKeyValue(string $entity, string $key, $value)
{
    $all = jsonGetAll($entity);
    $fnc = fn($item)=> $item[$key] == $value;
    $targetArr = array_filter($all, $fnc);
    return array_values($targetArr);
}

function jsonGetById(string $entity, int $id)
{
    $all = jsonGetAll($entity);
    $fnc = fn($item)=> $item["id"] == $id;
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
    # To impliment later
}

function save($entity, $data) {
    $path = jsonGetFilePath($entity);
    $jsonContent = json_encode($data);

    file_put_contents($path, $jsonContent);
}