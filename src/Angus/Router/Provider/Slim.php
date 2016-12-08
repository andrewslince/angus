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

use Angus\Router\Provider\ProviderInterface;

/**
 * @author Andrews Lince <andrews.lince@gmail.com>
 * @since  1.0.0
 */
class Slim implements ProviderInterface
{
    /**
     * @since 1.0.0
     * @var   \Slim\App
     */
    private function $container = null;

    /**
     * @author Andrews Lince <andrews.lince@gmail.com>
     * @since  1.0.0
     * @param  array $config
     */
    public function construct(array $config)
    {
        $this->container = new \Slim\App($config);
    }

    public function get($path, $callback)
    {
        return $this->container->get($path, $callback);
    }

    public function post($path, $callback)
    {
        return $this->container->post($path, $callback);
    }

    public function put($path, $callback)
    {
        return $this->container->put($path, $callback);
    }

    public function delete($path, $callback)
    {
        return $this->container->delete($path, $callback);
    }

    public function dispatch()
    {
        return $this->container->run();
    }

    public function getContainer()
    {
        return $this->container;
    }
}
