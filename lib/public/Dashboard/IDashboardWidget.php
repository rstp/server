<?php
declare(strict_types=1);


/**
 * Nextcloud - Dashboard App
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Maxence Lange <maxence@artificial-owl.com>
 * @copyright 2018, Maxence Lange <maxence@artificial-owl.com>
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */


namespace OCP\Dashboard;


use OCP\Dashboard\Model\IWidgetRequest;
use OCP\Dashboard\Model\IWidgetSettings;

/**
 * @since 15.0.0
 *
 * Interface IDashboardWidget
 *
 * @package OCP\Dashboard
 */
interface IDashboardWidget {

	/**
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getId(): string;


	/**
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getName(): string;


	/**
	 * @since 15.0.0
	 *
	 * @return string
	 */
	public function getDescription(): string;


	/**
	 * @since 15.0.0
	 *
	 * @return array
	 */
	public function getTemplate(): array;


	/**
	 * @since 15.0.0
	 *
	 * @param IWidgetSettings $settings
	 */
	public function loadWidget(IWidgetSettings $settings);


	/**
	 * @since 15.0.0
	 *
	 * @return array
	 */
	public function widgetSetup(): array;


	/**
	 * @since 15.0.0
	 *
	 * @param IWidgetRequest $request
	 */
	public function requestWidget(IWidgetRequest $request);

}