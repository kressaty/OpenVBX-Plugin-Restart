### 6/14/2010

As of today an additional three lines are required in order to use the restart applet. Add the following code to OpenVBX/libraries/AppletInstance.php:

`public static function getBaseURI()
{
	return self::$baseURI;
}
`