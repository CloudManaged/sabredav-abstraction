<?php namespace CloudManaged\Sabre\DAV\Abstraction\Server\DAV\Auth;

use Sabre\DAV;

use CloudManaged\Sabre\DAV\Abstraction\Contracts\DAV\Auth\BasicBackendInterface;

class BasicBackend extends DAV\Auth\Backend\AbstractBasic implements BasicBackendInterface
{
    protected $backend;

    public function __construct(BasicBackendInterface $backend)
    {
        $this->backend = $backend;
    }

    public function validateUserPass($username, $password)
    {
        return $this->backend->validateUserPass($username, $password);
    }
}
