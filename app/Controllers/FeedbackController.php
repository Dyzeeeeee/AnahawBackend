<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\FeedbackModel;
use CodeIgniter\API\ResponseTrait;

class FeedbackController extends ResourceController
{
    use ResponseTrait;

    // Get all feedbacks
    public function getFeedbacks()
    {
        $model = new FeedbackModel();
        $feedbacks = $model->findAll(); // Retrieve all feedback records

        return $this->respond($feedbacks);
    }

    // Add a new feedback
    public function addFeedback()
    {
        $model = new FeedbackModel();
        $data = $this->request->getJSON(true); // Get JSON input as an array


        // Insert feedback into the database
        if ($model->insert($data)) {
            $response = [
                'id' => $model->getInsertID(),
                'status' => 'success',
                'message' => 'Feedback submitted successfully'
            ];
            return $this->respondCreated($response);
        } else {
            return $this->failServerError('Unable to submit feedback.');
        }
    }
}
