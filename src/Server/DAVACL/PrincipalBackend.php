<?php namespace CloudManaged\Sabre\DAV\Abstraction\Server\DAVACL;

use Sabre\DAV\MkCol;
use Sabre\DAV\PropPatch;
use Sabre\DAVACL\PrincipalBackend\BackendInterface;
use Sabre\DAVACL\PrincipalBackend\CreatePrincipalSupport;

use CloudManaged\Sabre\DAV\Abstraction\Contracts\DAVACL\PrincipalBackendInterface;

class PrincipalBackend implements BackendInterface, CreatePrincipalSupport
{
    protected $backend;

    public function __construct(PrincipalBackendInterface $backend)
    {
        $this->backend = $backend;
    }

    public function getPrincipalsByPrefix($prefixPath)
    {
        return $this->backend->getPrincipalsByPrefix($prefixPath);
    }

    public function getPrincipalByPath($path)
    {
        return $this->backend->getPrincipalByPath($path);
    }

    public function updatePrincipal($path, PropPatch $propPatch)
    {
        return $this->backend->updatePrincipal($path, $propPatch);
    }

    public function searchPrincipals($prefixPath, array $searchProperties, $test = 'allof')
    {
        return $this->backend->searchPrincipals($prefixPath, $searchProperties, $test);
    }

    public function findByUri($uri, $principalPrefix)
    {
        return $this->backend->findByUri($uri, $principalPrefix);
    }

    public function getGroupMemberSet($principal)
    {
        return $this->backend->getGroupMemberSet($principal);
    }

    public function getGroupMembership($principal)
    {
        return $this->backend->getGroupMembership($principal);
    }

    public function setGroupMemberSet($principal, array $members)
    {
        return $this->backend->setGroupMemberSet($principal, $members);
    }

    public function createPrincipal($path, MkCol $mkCol)
    {
        return $this->backend->createPrincipal($path, $mkCol);
    }
}
