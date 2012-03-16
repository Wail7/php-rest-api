<?php

// include the APIResponse Class
require_once dirname(__FILE__).'/APIResponse.class.php';

/**
 * APIController Class
 * handle API Requests and send API responses
 */
class APIController {

    protected $_db;
    protected $_auth;
    protected $_user;

    /**
     * @var $request_method - the HTTP method used
     */
    protected $request_method = 'GET';

    /**
     * @var $allowed_methods - the allowed HTTP methods
     */
    protected $allowed_methods = array('GET', 'POST', 'PUT', 'DELETE');

    /**
     * @var $response
     *
     * The response object (APIResponse Class)
     */
    public $response;

    /**
     * Constructor
     */
    public function __construct() {
        global $db, $auth, $user;
        $this->_db = $db;
        $this->_auth = $auth;
        $this->_user = $user;

        // set the request method
        $this->setRequestMethod();

        $this->response = new APIResponse();
    }

    /**
     * @method setRequestMethod
     * set the request method, allowing for an overide
     */
    protected function setRequestMethod() {
        $this->request_method = $_SERVER['REQUEST_METHOD'];

        // override the method
        if (($this->request_method == 'POST') && isset($_POST['_method'])  && in_array(strtoupper($_POST['_method']), $this->allowed_methods)) {
            $this->request_method = $_POST['_method'];
        }
    }
}