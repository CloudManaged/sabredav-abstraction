<?php namespace CloudManaged\Sabre\DAV\Abstraction\Server\DAV\Auth;

use Sabre\DAV;

use CloudManaged\Sabre\DAV\Abstraction\Contracts\DAV\Auth\DigestBackendInterface;

class DigestBackend extends DAV\Auth\Backend\AbstractDigest implements DigestBackendInterface
{
    protected $backend;

    public function __construct(DigestBackendInterface $backend)
    {
        $this->backend = $backend;
    }

    public function getDigestHash($realm, $username)
    {
        return $this->backend->getDigestHash($realm, $username);
    }
}
