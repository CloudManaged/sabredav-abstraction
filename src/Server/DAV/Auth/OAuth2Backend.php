<?php namespace CloudManaged\Sabre\DAV\Abstraction\Server\DAV\Auth;

use Sabre\DAV;
use Sabre\HTTP\RequestInterface;
use Sabre\HTTP\ResponseInterface;

use CloudManaged\Sabre\DAV\Abstraction\Contracts\DAV\Auth\OAuth2BackendInterface;

class OAuth2Backend implements DAV\Auth\Backend\BackendInterface
{
    protected $backend;

    public function __construct(OAuth2BackendInterface $backend)
    {
        $this->backend = $backend;
    }

    public function check(RequestInterface $request, ResponseInterface $response)
    {
        return $this->backend->check($request, $response);
    }

    public function challenge(RequestInterface $request, ResponseInterface $response)
    {
        return $this->backend->challenge($request, $response);
    }
}
