<?php

/*  phpADNSite
 Copyright (C) 2014 Lukas Rosenstock

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU Affero General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU Affero General Public License for more details.

You should have received a copy of the GNU Affero General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

namespace PhpADNSite\Core;

/**
 * Generic interface for API clients.
 */
interface APIClient {
	
	/**
	 * Set the configuration for a particular user. This is called before any other method is called.
	 * @param array $globalConfiguration
	 * @param array $userConfiguration
	 */
	public function configure(array $globalConfiguration, array $userConfiguration);

	/**
	 * Retrieve the recent posts for the user.
	 */
	public function retrieveRecentPosts();
	
	/**
	 * Retrieve a single post by its ID.
	 * @param integer $id The ID of the post.
	 */
	public function retrieveSinglePost($id);
}