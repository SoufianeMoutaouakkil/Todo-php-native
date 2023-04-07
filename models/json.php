<?php

require_once __DIR__ . "/../config.php";
require_once __DIR__ . "/../tools.php";

function getFilePath(string $entity) :string
{
    if (isset(getJsonDataFiles()[$entity]) &&  is_string(getJsonDataFiles()[$entity])) {
        return getJsonDataFiles()[$entity];
    }
    return "";
}

function getByKeyValue(string $entity, string $key, mixed $value)
{
    $all = getAll($entity);
    $fnc = fn($item)=> $item[$key] == $value;
    $targetArr = array_filter($all, $fnc);
    return array_values($targetArr);
}

function getById(string $entity, int $id)
{
    $all = getAll($entity);
    $fnc = fn($item)=> $item["id"] == $id;
    $targetArr = array_filter($all, $fnc);
    return array_values($targetArr)[0] ?? [];
}

function getAll(string $entity)
{
    $path = getFilePath($entity);
    $jsonContent = file_get_contents($path);

    return json_decode($jsonContent, true);
}

function editById(string $entity, int $id, array $data)
{
    # To impliment later
}

function save($entity, $data) {
    $path = getFilePath($entity);
    $jsonContent = json_encode($data);

    file_put_contents($path, $jsonContent);
}