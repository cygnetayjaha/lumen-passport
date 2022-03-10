<?php
/**
 * @author      Alex Bilbie <hello@alexbilbie.com>
 * @copyright   Copyright (c) Alex Bilbie
 * @license     http://mit-license.org/
 *
 * @link        https://github.com/thephpleague/oauth2-server
 */

namespace Cygnet\OAuth2\Server\Entities;

interface AuthCodeEntityInterface extends TokenInterface
{
    /**
     * @return string|null
     */
    public function getRedirectUri();

    /**
     * @param string $uri
     */
    public function setRedirectUri($uri);
}
