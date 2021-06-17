<?php

namespace App\Controllers;

use \App\Models\FeedbackModel;

class Feedback extends BaseController
{
    public function __construct()
    {
        $this->feedbackModel = new FeedbackModel();
    }

    public function index()
    {

        /* // Pagination nomor/*  */
        $currentPage = $this->request->getVar('page_feedback') ? $this->request->getVar('page_feedback') :
            1;

        // Searching
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $feedback = $this->feedbackModel->search($keyword);
        } else {
            $feedback = $this->feedbackModel;
        }

        $data = [
            'title' => 'Cultivation | Feedback',
            'feedback' => $feedback->paginate(5, 'feedback'),
            'pager' => $this->feedbackModel->pager,
            'currentPage' => $currentPage,
        ];
        return view('/feedback/index', $data);
    }
}
