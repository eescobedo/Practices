<?php


class Generator {

	protected $file;

	public function __construct(File $file)
	{
		$this->file = $file;
	}

	public function fire()
	{
		$content = $this->getContent();

		$this->file->put('foo.txt', $content);
	}

	protected function getContent() {
		return 'foo bar';
	}
}