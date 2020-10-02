<?php
session_start();

if (isset($_GET['id'])) {
  $target_dir;
  $id = $_GET['id'];
  if (isset($_GET['act'])) {
    switch ($_GET['act']) {
      case 'inGameImages':
        $target_dir = 'assets/images/game/'.$id.'/';
        break;
      case 'coverGameImages':
        $target_dir = 'assets/images/thumb/'.$id.'/';
        break;
    }
  }
  $request = 1;
  if (isset($_POST['request'])) {
    $request = $_POST['request'];
  }

  // Upload file
  if ($request == 1) {
    $today = date("m.d.y");
    $target_file = $target_dir . hash('md5', $today)."-".basename($_FILES['file']['name']);
    $msg = '';

    if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
    }
    header('Content-type: application/json');
    echo json_encode(['target_file' => $target_file]);
    exit();
  }

  // Remove file
  if ($request == 2) {
    $filename = $target_dir . $_POST['name'];
    unlink($filename);
    exit;
  }
  return;
}

if (!file_exists('uploads')) {
  mkdir('uploads', 0777, true);
}
$target_dir = 'uploads/';
// Upload directory
$folder = 'images';
if (isset($_GET['act'])) {
  switch ($_GET['act']) {
    case 'inGameImages':
      if (!file_exists('uploads/inGame')) {
        mkdir('uploads/inGame', 0777, true);
      }
      $target_dir = 'uploads/inGame/';
      $folder = 'inGame';
      break;
    case 'coverGameImages':
      if (!file_exists('uploads/coverGame')) {
        mkdir('uploads/coverGame', 0777, true);
      }
      $target_dir = 'uploads/coverGame/';
      $folder = 'coverGame';
      break;
  }
}
$request = 1;
if (isset($_POST['request'])) {

  $request = $_POST['request'];
}

// Upload file
if ($request == 1) {

  $target_file = $target_dir . hash('md5', $today)."-".basename($_FILES['file']['name']);
  $msg = '';

  if (move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
    $msg = 'Successfully uploaded';
    array_push($_SESSION['images-upload'][$folder], $_FILES['file']['name']);
  } else {

    $msg = 'Error while uploading';
  }

  echo $msg;
  exit;
}

// Remove file
if ($request == 2) {

  $filename = $target_dir . $_POST['name'];

  unlink($filename);

  if (in_array($_POST['name'], $_SESSION['images-upload'][$folder])) {
    unset($_SESSION['images-upload'][$folder][array_search($_POST['name'], $_SESSION['images-upload'][$folder])]);
  }
  print_r($_SESSION['images-upload']);
  exit;
}
