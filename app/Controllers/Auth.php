<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\AuthModel;
class Auth extends ResourceController
{
    use ResponseTrait;
    public function index(): string {
        return $this->respond("largo", 200);
    }
}