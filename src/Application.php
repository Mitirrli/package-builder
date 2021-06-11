<?php

/*
 * This file is part of the mitirrli/package-builder.
 *
 * (c) mitirrli <i@mitirrli.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Mitirrli\PackageBuilder;

use Mitirrli\PackageBuilder\Commands\BuildCommand;
use Symfony\Component\Console\Application as BasicApplication;

/**
 * Class Application.
 *
 * @author mitirrli <i@mitirrli.me>
 */
class Application extends BasicApplication
{
    /**
     * Application constructor.
     *
     * @param string $name
     * @param string $version
     */
    public function __construct($name, $version)
    {
        parent::__construct($name, $version);

        $this->add(new BuildCommand());
    }
}
