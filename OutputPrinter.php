<?php

/*
 * This file is part of the DriftPHP Project
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 */

declare(strict_types=1);

namespace Drift\Console;

use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class ServerHeaderPrinter.
 */
class OutputPrinter
{
    private OutputInterface $output;
    private bool $quiet;

    /**
     * ServerHeaderPrinter constructor.
     *
     * @param OutputInterface $output
     * @param bool            $beQuiet
     */
    public function __construct(
        OutputInterface $output,
        bool $beQuiet = false
    ) {
        $this->output = $output;
        $this->quiet = $beQuiet;
    }

    /**
     * @return bool
     */
    public function isQuiet(): bool
    {
        return $this->quiet;
    }

    /**
     * Print header line.
     *
     * @param string $line
     */
    public function printHeaderLine(string $line = '')
    {
        $this->printLine(">  $line");
    }

    /**
     * Print line.
     *
     * @param string $line
     */
    public function printLine(string $line = '')
    {
        $this
            ->output
            ->writeln($line);
    }

    /**
     * Print line.
     *
     * @param string $data
     */
    public function print(string $data)
    {
        $this
            ->output
            ->write($data);
    }
}
