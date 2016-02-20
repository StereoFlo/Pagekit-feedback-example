<?php
namespace Pagekit\Contact\Model;

use Pagekit\Application as App;
use Pagekit\Database\ORM\ModelTrait;
/**
 * @Entity(tableClass="@contact_emails")
 */
class ContactModel implements \JsonSerializable {
    use ModelTrait;

/* --------------- FIELDS --------------- */
    /** @Column(type="integer") @id */
    public $id;
    /** @Column(type="string") */
    public $name;
    /** @Column(type="string") */
    public $email;
    /** @Column(type="string") */
    public $message;
    /** @Column(type="integer") */
    public $date;

	  /**
	   * {@inheritdoc}
	   */
    public function jsonSerialize ()
	{
        return $this->toArray([]);
    }

	public function toArray ()
	{
		return App::db()
            ->createQueryBuilder()
            ->from('@contact_emails')
            ->get();
	}
}
