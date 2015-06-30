<?php namespace CloudManaged\Sabre\DAV\Abstraction\Contracts\DAV\Auth;

/**
 * HTTP Basic authentication backend class
 *
 * This class can be used by authentication objects wishing to use HTTP Basic
 * Most of the digest logic is handled, implementors just need to worry about
 * the validateUserPass method.
 */
interface BasicBackendInterface
{
    /**
     * Validates a username and password
     *
     * This method should return true or false depending on if login
     * succeeded.
     *
     * @param string $username
     * @param string $password
     * @return bool
     */
    public function validateUserPass($username, $password);
}
