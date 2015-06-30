<?php namespace CloudManaged\Sabre\DAV\Abstraction\Contracts\DAV\Auth;

/**
 * HTTP Digest authentication backend class
 *
 * This class can be used by authentication objects wishing to use HTTP Digest
 * Most of the digest logic is handled, implementors just need to worry about
 * the getDigestHash method
 */
interface DigestBackendInterface
{
    /**
     * Returns a users digest hash based on the username and realm.
     *
     * If the user was not known, null must be returned.
     *
     * @param string $realm
     * @param string $username
     * @return string|null
     */
    public function getDigestHash($realm, $username);
}
