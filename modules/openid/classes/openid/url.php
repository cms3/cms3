<?php
/**
 * helper class for working with urls.
 * (these functions could possibly sit in the core url helper?).
 *
 * $Id: url.php 2008-09-25 17:28:07 BST Atomless $
 *
 * @package    core
 * @author     Kohana Team
 * @copyright  (c) 2007-2008 Kohana Team
 * @license    http://kohanaphp.com/license.html
 */
class Openid_url {

	/**
	 * Given a URL, this "normalizes" it by adding a trailing slash
	 * and a leading http:// scheme where necessary.  Returns
	 * null if the original URL is malformed and cannot be normalized.
	 * **note: Currently preserves fragment and query!
	 *
	 * @param  reference to string URL to be normalized.
	 * @return boolean
	 */
	public static function normalize($url, $include_query = TRUE, $include_fragment = TRUE, $default_scheme = 'http://')
	{
		$url_components = @parse_url($url);

		if ($url_components === FALSE)
			return FALSE;

		$default_url_components = array
		(
			'scheme'   => '',
			'host'     => '',
			'path'     => '',
			'query'    => '',
			'fragment' => '',
			'port'     => ''
		);

		$url_components = array_merge($default_url_components, $url_components);

		if (($url_components['scheme'] == '') OR ($url_components['host'] == ''))
		{
			if ($url_components['path'] == '' AND $url_components['query'] == '')
				return FALSE;

			$url = $default_scheme.$url;

			if ($new_url_components = @parse_url($url))
			{
				$url_components = array_merge($default_url_components, $new_url_components);
			}
		}

		$url_components['path']  = (empty($url_components['path']) OR $url_components['path'] == '/')? '/' : rtrim($url_components['path'], '/');

		$url_components['query'] = ($include_query)? $url_components['query'] : FALSE;

		$url_components['fragment'] = ($include_fragment)? $url_components['fragment'] : FALSE;

		$url = Openid_url::unparse
		(
			$url_components['scheme'],
			$url_components['host'],
			$url_components['port'],
			$url_components['path'],
			$url_components['query'],
			$url_components['fragment']
		 );

		return $url;
	}

	/**
	 * Python style url unparse.
	 * Given the specified components of a URL, this function rebuilds
	 * and returns the URL.
	 *
	 * @param string $scheme The scheme (e.g. 'http').  Defaults to 'http'.
	 * @param string $host The host.  Required.
	 * @param string $port The port.
	 * @param string $path The path.
	 * @param string $query The query.
	 * @param string $fragment The fragment.
	 *
	 * @return string $url The URL resulting from assembling the
	 * specified components.
	 */
	public static function unparse($scheme, $host, $port = FALSE, $path = '/', $query = FALSE, $fragment = FALSE)
	{
		if ( ! $scheme)
		{
			$scheme = 'http';
		}

		if ( ! $host)
			return FALSE;

		$result = $scheme.'://'.$host;

		if ($port)
		{
			$result .= ':'.$port;
		}

		if ( ! $path)
		{
			$path = '';
		}

		$result .= $path;

		if ($query)
		{
			$result .= '?'.$query;
		}

		if ($fragment)
		{
			$result .= '#'.$fragment;
		}

		return $result;
	}

} // End url
