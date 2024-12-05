<?php

class Supervisor extends Controller
{

    public function index($a = '', $b = '', $c = '')
    {

        // Ensure session_start() is called first
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        // Check if the user is logged in and is an admin
        if (!isset($_SESSION['id']) || $_SESSION['role_id'] != 2) { // Assuming 1 is the role ID for admin
            header("Location: " . ROOT . "/unauthorized");
            exit();
        }


        $issuesModel = new IssueModel();

        // $inquiries = $inquiriesModel->findAll();

        // $data = [
        //     'inquiries' => $inquiries,
        // ];

        // $this->view('admin',$data);

        // Fetch all pending issues from the database
        $pendingIssues = $issuesModel->where(['status' => 'pending']);

        // Fetch all solved issues from the database
        $solvedIssues = $issuesModel->where(['status' => 'solved']);

        $this->view('Supervisor', [
            'pendingIssues' => $pendingIssues,
            'solvedIssues' => $solvedIssues,
        ]);

        // $this->view('supervisor');
    }
}
