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
        // if (!isset($_SESSION['id']) || $_SESSION['role_id'] != 1) { // Assuming 1 is the role ID for admin
        //     header("Location: " . ROOT . "/unauthorized");
        //     exit();
        // }

        $inquiriesModel = new InquiryModel();

        // $inquiries = $inquiriesModel->findAll();

        // $data = [
        //     'inquiries' => $inquiries,
        // ];

        // $this->view('admin',$data);

        // Fetch all pending issues from the database
        $pendingInquiries = $inquiriesModel->where(['is_solved' => 0]);

        // Fetch all solved issues from the database
        $solvedInquiries = $inquiriesModel->where(['is_solved' => 1]);

        $this->view('Admin', [
            'pendingInquiries' => $pendingInquiries,
            'solvedInquiries' => $solvedInquiries,
        ]);
    }
}
