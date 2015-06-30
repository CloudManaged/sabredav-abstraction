<?php namespace CloudManaged\Sabre\DAV\Abstraction\Server\CardDAV;

use Sabre\DAV;
use Sabre\CardDAV;

use CloudManaged\Sabre\DAV\Abstraction\Contracts\CardDAV\BackendInterface;

class Backend extends CardDAV\Backend\AbstractBackend implements BackendInterface
{
    protected $backend;

    public function __construct(BackendInterface $backend)
    {
        $this->backend = $backend;
    }

    public function getAddressBooksForUser($principalUri)
    {
        return $this->backend->getAddressBooksForUser($principalUri);
    }

    public function updateAddressBook($addressBookId, DAV\PropPatch $propPatch)
    {
        return $this->backend->updateAddressBook($addressBookId, $propPatch);
    }

    public function createAddressBook($principalUri, $url, array $properties)
    {
        return $this->backend->createAddressBook($principalUri, $url, $properties);
    }

    public function deleteAddressBook($addressBookId)
    {
        return $this->backend->deleteAddressBook($addressBookId);
    }

    public function getCards($addressbookId)
    {
        return $this->backend->getCards($addressbookId);
    }

    public function getCard($addressBookId, $cardUri)
    {
        return $this->backend->getCard($addressBookId, $cardUri);
    }

    public function createCard($addressBookId, $cardUri, $cardData)
    {
        return $this->backend->createCard($addressBookId, $cardUri, $cardData);
    }

    public function updateCard($addressBookId, $cardUri, $cardData)
    {
        return $this->backend->updateCard($addressBookId, $cardUri, $cardData);
    }

    public function deleteCard($addressBookId, $cardUri)
    {
        return $this->backend->deleteCard($addressBookId, $cardUri);
    }
}
