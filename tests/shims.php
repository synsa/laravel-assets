<?php
/**
 * laravel-assets: asset management for Laravel 5
 *
 * Copyright (C) 2015 Greg Roach
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

/**
 * Shim for the laravel helper function url() which does not exist during testing.
 *
 * @param string $x
 *
 * @return string
 */
function url($x) {
	return $x;
}

/**
 * Shim for the laravel helper function config_path() which does not exist during testing.
 *
 * @param string $x
 *
 * @return string
 */
function config_path($x) {
	return $x;
}
