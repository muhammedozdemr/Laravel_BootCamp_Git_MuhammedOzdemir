<?php 

namespace App\Helpers;


class UploadPaths
{
	public static $uploadPaths = array(
	'product_photos' => '/uploads/products',
	'profile_photos'  => '/uploads/profiles'
	);

	public static function getUploadPath($path)
	{
		return public_path().self::$uploadPaths[$path];
	}
}