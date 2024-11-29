<?php

class Sitehead extends Controller
{

    public function index($a = '', $b = '', $c = '')
    {
        // Ensure session_start() is called first
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        // Check if the user is logged in and is an admin
        // if (!isset($_SESSION['id']) || $_SESSION['role_id'] != 3) { // Assuming 1 is the role ID for admin
        //     header("Location: " . ROOT . "/unauthorized");
        //     exit();
        // }

        $this->view('sitehead');
    }

    public function reportIssue()
    {
        $issue = new Issue();
        $data = [
            'errors' => [], // Initialize errors
        ];


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {



            $formData = [
                'address' => $_POST['address'] ?? null,
                'size' => $_POST['size'] ?? null,
                'duration' => $_POST['duration'],
                'crop' => $_POST['crop'] ?? null,
                'document' => $_POST['document'] ?? null,

            ];

            if ($issue->validate($formData)) {
                $issue->insert($formData);

            } else {
                echo "Data insertion failed.";
            }
        }

        $this->view('landowner', $data);
    }
}
