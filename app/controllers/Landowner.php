<?php

class Landowner extends Controller
{
    private $manageland;

    public function __construct()
    {
        // Initialize the Land model in the constructor
        $this->manageland = new Land();
    }

    public function index($a = '', $b = '', $c = '')
    {
        // Ensure session_start() is called first
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        // Check if the user is logged in and is an admin
        if (!isset($_SESSION['id']) || $_SESSION['role_id'] != 4) { // Assuming 1 is the role ID for admin
            header("Location: " . ROOT . "/unauthorized");
            exit();
        }

        $user_id = $_SESSION['id'];
        // $data = [
        //     'landowner_id' => $user_id,
        // ];
        $lands = $this->manageland->findSpecificLand($user_id);


        $this->view('landowner', ['lands' => $lands]);
    }

    public function registerland()
    {
        $land = new Land();
        $data = [
            'errors' => [], // Initialize errors
        ];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // File upload handling
            $filePath = '';
            // echo 'hello';

            if (isset($_FILES['document'])) {
                // echo 'hello1';
                $uploadDir = 'C:\wamp64\www\gl\app\uploads\\';
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                $fileTmpPath = $_FILES['document']['tmp_name'];
                $fileName = basename($_FILES['document']['name']);
                $uniqueFileName = time() . '_' . $fileName;
                $destination = $uploadDir . $uniqueFileName;
                // show($destination);

                if (move_uploaded_file($fileTmpPath, $destination)) {
                    $filePath = '/uploads/' . $uniqueFileName;

                } else {
                    $data['errors'][] = "Failed to upload the file.";
                }
            }

            $formData = [
                'landowner_id' => $_SESSION['id'] ?? '',
                'address' => $_POST['address'] ?? '',
                'size' => $_POST['size'] ?? '',
                'duration' => $_POST['duration'] ?? '',
                'crop' => $_POST['crop'] ?? '',
                'document' => $filePath,
            ];

            // show($formData);
            if ($land->validate($formData)) {
                if ($land->insert($formData)) {
                    header('Location:' . ROOT . '/Landowner');
                    exit();
                } else {
                    $data['errors'][] = "Failed to insert data.";
                }
            } else {
                $data['errors'] = $land->errors; // Collect validation errors
            }
        }

        // $this->view('landowner', $data);
        header('Location:' . ROOT . '/Landowner');
    }

    public function deleteland($id)
    {
        if (!$this->manageland->delete($id)) {
            $lands = $this->manageland->findAll();
            header('Location:' . ROOT . '/landowner');
            exit();
        } else {
            // If deletion fails, show a 404 page or an error message
            $this->view('_404');
        }
    }
}