<?php

declare(strict_types=1);

namespace JTL\Console\Command;

use JTL\Cache\JTLCacheInterface;
use JTL\Console\Application;
use JTL\Console\ConsoleIO;
use JTL\DB\DbInterface;
use Symfony\Component\Console\Command\Command as BaseCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

/**
 * Class Command
 * @package JTL\Console\Command
 */
class Command extends BaseCommand
{
    protected DbInterface $db;

    protected JTLCacheInterface $cache;

    /**
     * @param string|null $name
     */
    public function __construct(?string $name = null)
    {
        parent::__construct($name);
    }

    /**
     * @return DbInterface
     */
    public function getDB(): DbInterface
    {
        return $this->db;
    }

    /**
     * @param DbInterface $db
     */
    public function setDB(DbInterface $db): void
    {
        $this->db = $db;
    }

    /**
     * @return JTLCacheInterface
     */
    public function getCache(): JTLCacheInterface
    {
        return $this->cache;
    }

    /**
     * @param JTLCacheInterface $cache
     */
    public function setCache(JTLCacheInterface $cache): void
    {
        $this->cache = $cache;
    }

    /**
     * @return Application|\Symfony\Component\Console\Application
     */
    public function getApp()
    {
        return $this->getApplication();
    }

    /**
     * @return ConsoleIO
     */
    public function getIO(): ConsoleIO
    {
        return $this->getApp()->getIO();
    }

    /**
     * @param string $name
     * @return InputArgument
     */
    public function getArgumentDefinition(string $name): InputArgument
    {
        return $this->getDefinition()->getArgument($name);
    }

    /**
     * @param string $name
     * @return bool
     */
    public function hasMissingOption(string $name): bool
    {
        $option = $this->getDefinition()->getOption($name);
        $value  = \trim($this->getIO()->getInput()->getOption($name) ?? '');

        return $option->isValueRequired() && $option->acceptValue() && empty($value);
    }

    /**
     * @param string $name
     * @return InputOption
     */
    public function getOptionDefinition(string $name): InputOption
    {
        return $this->getDefinition()->getOption($name);
    }

    /**
     * @param string $name
     * @return string|array|bool|null
     */
    public function getOption(string $name)
    {
        $value = $this->getIO()->getInput()->getOption($name);

        return \is_string($value) ? \trim($value) : $value;
    }

    /**
     * @return array
     */
    public function getOptions(): array
    {
        return $this->getIO()->getInput()->getOptions();
    }

    /**
     * @param string $name
     * @return bool
     */
    public function hasOption(string $name): bool
    {
        return $this->getIO()->getInput()->hasOption($name);
    }
}
