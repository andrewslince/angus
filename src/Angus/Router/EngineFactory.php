<?php

/**
 * MIT License
 *
 * Copyright (c) 2016 Andrews Lince
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * copies of the Software, and to permit persons to whom the Software is
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

namespace Angus\Router;

use Angus\Router\Provider\Slim as AngusSlim;
use InvalidArgumentException;

/**
 * A PHP adapter that provide a abstract layer to use various micro frameworks
 * of URL routing in your application
 * @author    Andrews Lince <andrews.lince@gmail.com>
 * @version   1.0.0
 * @link      https://github.com/andrewslince/angus
 * @package   Angus/Provider
 * @copyright 2016 Andrews Lince
 */
class EngineFactory
{
    /**
     * Library version
     * @var string
     */
    const VERSION = '1.0.0';

    /**
     * Provider to Slim Framework
     * @var string
     */
    const PROVIDER_SLIM = 'slim';

    /**
     * @author Andrews Lince <andrews.lince@gmail.com>
     * @since  1.0.0
     * @param  string $provider
     * @param  array  $config
     * @return array
     */
    public static function init($provider, array $config)
    {
        $providerObject = null;

        switch ($provider) {
            case self::PROVIDER_SLIM:

                $providerObject = new AngusSlim($config);

                break;

            default:

                break;
        }

        return $providerObject->getContainer();
    }
}
