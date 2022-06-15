<?php
session_start();
require_once 'public/connect.php';


function createService($conn, $name_service, $descriprion, $img, $price_first, $price_second, $price_third)
{
    $sql = "INSERT INTO `services` 
        (`id`, `name_service`, `description`, `img`, `price_first`, `price_second`, `price_third`) 
        VALUES (NULL, '$name_service', $descriprion, '$img', '$price_first', '$price_second', '$price_third')";
    $result = $conn->query($sql);
    if ($result) {
        return true;
    }
    else {
        return false;
    }
}

function createApp($conn, $idUser, $name, $imgBefore, $imgAfter, $category, $status)
{
    $date = date("d/m/Y");
    $sql = "SELECT * FROM `applications`";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return false;
    }
    else {
        $register_sql = "INSERT INTO applications (`id-user`, `name`, `img-before`, `img-after`, `date`, `category`, `status`)
        VALUES ('$idUser', '$name', '$imgBefore', '$imgAfter', '$date', '$category', '$status')";
        $result = $conn->query($register_sql);
        if ($result) {
            return true;
        }
    }

    return false;
}
function getAllServices($conn)
{
    $services = [];
    $result = mysqli_query($conn, "SELECT * FROM services");
    $applications = mysqli_fetch_assoc($result);
    array_push($services, $applications);
    while ($applications = mysqli_fetch_assoc($result)) 
{
        array_push($services, $applications);
    }
    return $services;
}
function getAllTintings($conn)
{
    $works = [];
    $result = mysqli_query($conn, "SELECT * FROM tinting");
    $applications = mysqli_fetch_assoc($result);
    array_push($works, $applications);
    while ($applications = mysqli_fetch_assoc($result)) 
{
        array_push($works, $applications);
    }
    return $works;
}
function getAllProtect($conn)
{
    $protectings = [];
    $result = mysqli_query($conn, "SELECT * FROM protect");
    $applications = mysqli_fetch_assoc($result);
    array_push($protectings, $applications);
    while ($applications = mysqli_fetch_assoc($result)) 
{
        array_push($protectings, $applications);
    }
    return $protectings;
}
function addNewService($conn, $title, $description, $img, $href)
{
    $result = mysqli_query($conn,
        "INSERT INTO `services` (`id`, `title`, `description`, `img`, `href`, `price_first`, `price_second`, `price_third`) VALUES (NULL, '$title', '$description', '$img', '$href', '', '', '');");
    if ($result) {
        return true;
    }
    else {
        return false;
    }
}
function deleteService($conn, $id)
{
    $result = mysqli_query($conn,
        "DELETE FROM `services` WHERE `id`='$id'");
    if ($result) {
        return true;
    }
    else {
        return false;
    }
}
function updateService($conn, $services)
{
    foreach ($services as $mass) {
        $rezult = mysqli_query($conn, "UPDATE `services` SET `id`='$mass[0]',`title`='$mass[1]',`description`='$mass[2]',`img`='$mass[3]',`href`='$mass[4]',`price_first`='$mass[5]',`price_second`='$mass[6]',`price_third`='$mass[7]' WHERE `id`='$mass[id]'");
    }
    return true;
}

$type = $_POST["type"];

switch ($type) {
    case "GET_SERVICES":
        echo json_encode(getAllServices($conn));
        break;
    case "GET_TINTINGS":
        echo json_encode(getAllTintings($conn));
        break;
    case "GET_PROTECT":
        echo json_encode(getAllProtect($conn));
        break;
    case "ADD_SERVICE":
        echo json_encode(addNewService($conn,
            $_POST["title"], $_POST["description"],
            $_POST["img"], $_POST["href"]));
        break;
    case "DELETE_SERVICE":
        echo json_encode(deleteService($conn,
            $_POST["id"]));
        break;
    case "UPDATE_SERVICE":
        echo json_encode(updateService($conn,
            $_POST["object"]));
        break;
    default:
        break;
}