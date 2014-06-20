<?php
namespace OpenSearchServer\Search\Field;

use OpenSearchServer\Search\Field\SearchField;

class Search extends SearchField
{

	/******************************
	 * INHERITED METHODS OVERRIDDEN
	 ******************************/
	/**
	 * {@inheritdoc}
	 */
	public function getMethod()
	{
		return self::METHOD_POST;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getPath()
	{
    	$this->checkPathIndexNeeded();
        $path = $this->options['index'].'/search/field';
        return (!empty($this->options['template'])) ? $path.'/'.$this->options['template'] : $path;
	}
}