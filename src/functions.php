<?php

if (!shell_exec('which find')) {
    throw new \Exception('the `find` command is missing (https://ss64.com/bash/find.html)');
}

/**
 * Returns true only if $string contains $contains
 *
 * @param $string
 * @param $contains
 * @return bool
 */
if (!function_exists('str_contains')) {
    function str_contains($string, $contains)
    {
        return strpos($string, $contains) !== false;
    }
}

/**
 * Returns true only if $string starts with $startsWith
 *
 * @param $string
 * @param $startsWith
 * @return bool
 */
if (!function_exists('str_starts_with')) {
	function str_starts_with($string, $startsWith)
	{
		return substr($string, 0, strlen($startsWith)) === $startsWith;
	}
}

/**
 * Returns true only if $string ends with $endsWith
 *
 * @param $string
 * @param $endsWith
 * @return bool
 */
// if (!function_exists('str_ends_with')) {
// 	function str_ends_with($string, $endsWith)
// 	{
// 		return strlen($endsWith) == 0 || substr($string, -strlen($endsWith)) === $endsWith;
// 	}
// }
