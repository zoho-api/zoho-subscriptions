<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2015 Julien Guittard (http://julienguittard.com)
 */

namespace Zoho\Subscriptions\Entity;

/**
 * Class Note
 *
 * @package Zoho\Subscriptions\Entity
 */
class Note
{
    use TimestampableTrait;

    /**
     * Unique ID generated for a note.
     *
     * @var string
     */
    protected $noteId;

    /**
     * Comments about the subscription made by the user.
     *
     * @var string
     */
    protected $description;

    /**
     * Name of the user who added the comment.
     *
     * @var string
     */
    protected $commentedBy;

    /**
     * Time at which the comment was added.
     *
     * @var string
     */
    protected $commentedTime;

    /**
     * Get the note ID
     *
     * @return string
     */
    public function getNoteId()
    {
        return $this->noteId;
    }

    /**
     * Set the note ID
     *
     * @param string $noteId
     * @return Note
     */
    public function setNoteId($noteId)
    {
        $this->noteId = $noteId;
        return $this;
    }

    /**
     * Get the description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the description
     *
     * @param string $description
     * @return Note
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get the commented by
     *
     * @return string
     */
    public function getCommentedBy()
    {
        return $this->commentedBy;
    }

    /**
     * Set the commented by
     *
     * @param string $commentedBy
     * @return Note
     */
    public function setCommentedBy($commentedBy)
    {
        $this->commentedBy = $commentedBy;
        return $this;
    }

    /**
     * Get the commented time
     *
     * @return string
     */
    public function getCommentedTime()
    {
        return $this->commentedTime;
    }

    /**
     * Set the commented time
     *
     * @param string $commentedTime
     * @return Note
     */
    public function setCommentedTime($commentedTime)
    {
        $this->commentedTime = $commentedTime;
        return $this;
    }

}