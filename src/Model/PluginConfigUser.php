<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Docker\API\Model;

class PluginConfigUser
{
    /**
     * @var int
     */
    protected $uID;
    /**
     * @var int
     */
    protected $gID;

    /**
     * @return int
     */
    public function getUID(): ?int
    {
        return $this->uID;
    }

    /**
     * @param int $uID
     *
     * @return self
     */
    public function setUID(?int $uID): self
    {
        $this->uID = $uID;

        return $this;
    }

    /**
     * @return int
     */
    public function getGID(): ?int
    {
        return $this->gID;
    }

    /**
     * @param int $gID
     *
     * @return self
     */
    public function setGID(?int $gID): self
    {
        $this->gID = $gID;

        return $this;
    }
}
