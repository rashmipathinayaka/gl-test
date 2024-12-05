<?php

class Admin extends Controller
{

    public function index($a = '', $b = '', $c = '')
    {
        // Ensure session_start() is called first
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        // Check if the user is logged in and is an admin
        if (!isset($_SESSION['id']) || $_SESSION['role_id'] != 1) { // Assuming 1 is the role ID for admin
            header("Location: " . ROOT . "/unauthorized");
            exit();
        }

        $inquiriesModel = new InquiryModel();

        // $inquiries = $inquiriesModel->findAll();

        // $data = [
        //     'inquiries' => $inquiries,
        // ];

        // $this->view('Admin',$data);

        // // Fetch all pending issues from the database
        $pendingInquiries = $inquiriesModel->where(['is_solved' => 0]);

        // // // Fetch all solved issues from the database
        $solvedInquiries = $inquiriesModel->where(['is_solved' => 1]);

        // $this->view('Admin', [
        //     'pendingInquiries' => $pendingInquiries,
        //     'solvedInquiries' => $solvedInquiries,
        // ]);


        $manageland = new Land();

        $lands = $manageland->findAll();

        // $this->view('Admin', ['lands' => $lands]);

        $this->view('Admin', [
            'pendingInquiries' => $pendingInquiries,
            'solvedInquiries' => $solvedInquiries,
            'lands' => $lands
        ]);
    }

    public function updateland($id)
{
    echo "Inside UpdateLand";
    $manageland = new Land();

    $data = ['status' => 1];
    $result = $manageland->update($id, $data, 'id');

    if ($result === false) {
        // Log the error or handle the failed update
        // You might want to add error logging here
        echo "Update failed";
    }

    header('Location:' . ROOT . '/Admin');
    exit();
}
}
