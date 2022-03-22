<?php

namespace App\Service;


class BaseService {

    private $session = null;

    public function __construct() {
        $this->login();
    }

    public function __desctuct() {
        $this->logout();
    }

    public function getSessionId() {
        return $this->session;
    }

    public function setSessionId($sessionId) {
        $this->session = $sessionId;
        return true;
    }

    private function login() {
        //TODO get credentials from environment
        //TODO implement login functionality
    }
    
    private function logout() {
        //TODO implement logout functionality
    }

} 
