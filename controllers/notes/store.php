<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $currentUserId = $_POST['currentUserId'];

    $errors = [];

    if (!Validator::correctRequest($_POST, 'description')) {
        Response::abort(Response::BAD_REQUEST);
    }

    if (!Validator::between($_POST['description'], 50)) {
        $errors['description'] = 'The description must be between 1 and 50 ';
    }

    if (empty($errors)) {
        $description = $_POST['description'];
        $database = new Database(ENV_FILE);
        $database->query('INSERT INTO notes(description, user_id) values(:description, :currentUserId)', ['description' => $description, 'currentUserId' => $currentUserId]);
        Response::redirect('Location: http://cours6.localhost/notes');
    } else {
        $heading = 'Create Note';
        require VIEWS_PATH . '/note-create.view.php';
    }
} else {
    Response::abort();
}
