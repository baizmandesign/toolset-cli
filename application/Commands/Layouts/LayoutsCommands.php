<?php

namespace OTGS\Toolset\CLI\Layouts;

use OTGS\Toolset\CLI\Commands\ToolsetCommand;

/**
 * The base class for Layouts commands.
 */
abstract class LayoutsCommand extends ToolsetCommand {

	/**
	 * Constructor.
	 * FIXME: do we need this?
	 */
	public function __construct() {
		parent::__construct();

	}

}