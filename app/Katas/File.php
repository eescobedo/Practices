<?

class File {
	
	public function put ($path, $content) 
	{
		return file_put_contents($path, $content);

	}

}