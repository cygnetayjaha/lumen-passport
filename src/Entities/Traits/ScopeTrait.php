<?php
/**
 * @author    Andrew Millington <andrew@noexceptions.io>
 * @copyright Copyright (c) Andrew Millington
 * @license   http://mit-license.org
 *
 * @link      https://github.com/thephpleague/oauth2-server
 */

namespace Cygnet\OAuth2\Server\Entities\Traits;

trait ScopeTrait
{
    /**
     * Serialize the object to the scopes string identifier when using json_encode().
     *
     * @return string
     */
    public function jsonSerialize()
    {
        return $this->getIdentifier();
    }

    /**
     * @return string
     */
    abstract public function getIdentifier();
}
