<?php namespace CI4Xpander_CRUD;

use Closure;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Controller extends \CodeIgniter\Controller
{
    /**
     * @var \CI4Xpander_CRUD\Data
     */
    protected $data;

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $this->_init();
    }

    protected function _init()
    {}

    protected function _action(...$params)
    {
        if ($this->request->getPost('_action')) {
            $methodName = '_action_' . $this->request->getPost('_action');
            if (method_exists($this, $methodName)) {
                $action = $this->{$methodName}(...$params);
                if (!is_null($action)) {
                    return $action;
                }
            }
        }

        return null;
    }
}