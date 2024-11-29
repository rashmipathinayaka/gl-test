<?php

class Issue extends Controller
{

    public function index($a = '', $b = '', $c = '')
    {
        // Ensure session_start() is called first
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        // Check if the user is logged in
        if (!isset($_SESSION['id'])) {
            header("Location: " . ROOT . "/unauthorized");
            exit();
        }

        // Load the view for inquiries (if required)
        $this->view('Sitehead');
    }

    public function addIssue()
    {

        $issueModel = new IssueModel();  // Using InquiryModel for the model

        // $data = [
        //     'errors' => [], // Initialize errors
        // ];

        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //     // Capture form data
        //     $formData = [
        //         'name' => $_POST['name'] ?? null,
        //         'complaint_type' => $_POST['complaint-type'] ?? null,
        //         'description' => $_POST['description'] ?? null,
        // 		'attachment' => $_FILES['attachment'] ?? null,
        //     ];

        //     // Validate data
        //     if ($issueModel->validate($formData)) {
        //         // Insert data into the inquiry table
        //         $issueModel->insert($formData);
        //     } else {
        //         echo "Data insertion failed.";
        //     }
        // }

        // // Redirect back to the landing page or wherever necessary
        // header('Location:' . ROOT . '/home');

        $data = ['errors' => []]; // Initialize errors array

        // Check if form was submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get form data
            $formData = [
                'name' => $_POST['name'] ?? null,
                'complaint_type' => $_POST['complaint-type'] ?? null,
                'description' => $_POST['description'] ?? null,
                'attachment' => $_FILES['attachment'] ?? null,
            ];

            // Validate the data
            $issueModel = new IssueModel();
            if ($issueModel->validate($formData)) {
                // // Handle file upload
                if (!empty($formData['attachment']['name'])) {
                    $fileName = time() . '_' . $formData['attachment']['name'];
                    $uploadDir = 'C:\wamp64\www\gl\app\uploads\\';
                    if (!is_dir($uploadDir)) {
                        mkdir($uploadDir, 0777, true);
                    }
                    move_uploaded_file($formData['attachment']['tmp_name'], $uploadDir . $fileName);
                    $formData['attachment'] = $fileName;
                } else {
                    $formData['attachment'] = null; // No file uploaded
                }

                // Insert into database
                if ($issueModel->insert($formData)) {
                    // Redirect or show success message
                    header('Location: ' . ROOT . '/Sitehead');
                    exit;
                } else {
                    $data['errors'][] = 'Failed to save the issue. Please try again.';
                }
            } else {
                $data['errors'] = $issueModel->errors; // Collect validation errors
            }
        }

        // Load the view with errors (if any)
        // $this->view('/Sitehead', $data);
        header('Location: ' . ROOT . '/Sitehead');
    }

    public function markAsSolved($id)
    {
        // Update the status of the issue to 'solved'
        $issueModel = new IssueModel();

        if (!$issueModel->update($id, ['status' => 'solved'], 'id')) {
            // Redirect back to the Manage Issues page
            // $this->view('/Supervisor/ManageIssues');
            header('Location: ' . ROOT . '/Supervisor');
        } else {
            // Show an error page if the update fails
            $this->view('_404');
        }
    }

    public function deleteIssue($id)
    {

        $issueModel = new IssueModel();  // Using InquiryModel for the model
        if (!$issueModel->delete($id)) {
            header('Location:' . ROOT . '/Supervisor');
            exit();
        } else {
            // If deletion fails, show a 404 page or an error message
            $this->view('_404');
        }
    }
}
