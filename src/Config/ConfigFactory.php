<?php

/* This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Phalcon\Config;

use Phalcon\Config;
use Phalcon\Config\ConfigInterface;
use Phalcon\Factory\AbstractFactory;
use Phalcon\Helper\Arr;

/**
 * Loads Config Adapter class using 'adapter' option, if no extension is
 * provided it will be added to filePath
 *
 * ```php
 * use Phalcon\Config\ConfigFactory;
 *
 * $options = [
 *     "filePath" => "path/config",
 *     "adapter"  => "php",
 * ];
 *
 * $config = (new ConfigFactory())->load($options);
 * ```
 */
class ConfigFactory extends AbstractFactory
{

    protected $exception = 'Phalcon\\\\Config\\\\Exception';


    /**
     * ConfigFactory constructor.
     *
     * @param array $services
     */
    public function __construct(array $services = [])
    {
    }

    /**
     * Load a config to create a new instance
     *
     * @param string|array|\Phalcon\Config $config = [
     *      'adapter' => 'ini',
     *      'filePath' => 'config.ini',
     *      'mode' => null,
     *      'callbacks' => null
     * ]
     * @return ConfigInterface
     */
    public function load($config): ConfigInterface
    {
    }

    /**
     * Returns a new Config instance
     *
     * @param string $name
     * @param string $fileName
     * @param mixed $params
     * @return ConfigInterface
     */
    public function newInstance(string $name, string $fileName, $params = null): ConfigInterface
    {
    }

    /**
     * Returns the adapters for the factory
     *
     * @return array
     */
    protected function getAdapters(): array
    {
    }
}
