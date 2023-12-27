<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Luis Carlos Rodriguez <lcrodriguez@pcmsolinfo.com>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\GasInstallationInspector\Tests\Unit\Controller;

use OCA\GasInstallationInspector\Controller\NoteApiController;

class NoteApiControllerTest extends NoteControllerTest {
	public function setUp(): void {
		parent::setUp();
		$this->controller = new NoteApiController($this->request, $this->service, $this->userId);
	}
}
