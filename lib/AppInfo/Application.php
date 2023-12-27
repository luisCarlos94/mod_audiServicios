<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Luis Carlos Rodriguez <lcrodriguez@pcmsolinfo.com>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\GasInstallationInspector\AppInfo;

use OCP\AppFramework\App;

class Application extends App {
	public const APP_ID = 'gasinstallationinspector';

	public function __construct() {
		parent::__construct(self::APP_ID);
	}
}
