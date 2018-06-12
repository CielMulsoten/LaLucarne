<?php

namespace Entity;
class Author
{
    private $id_event;
    private $title;
    private $picture;
    private $type;
    private $description;
    private $link;
    private $begin_date;
    private $end_date;
    private $active;
    
    public function setId_event($arg)
	{
		$this -> id_event = $arg;
	}

	public function getId_event()
	{
		return $this -> id_event;
	}

    public function setTitle($arg)
	{
		$this -> title = $arg;
	}

	public function getTitle()
	{
		return $this -> title;
	}

    public function setPicture($arg)
	{
		$this -> picture = $arg;
	}

	public function getPicture()
	{
		return $this -> picture;
	}

    public function setType($arg)
	{
		$this -> type = $arg;
	}

	public function getType()
	{
		return $this -> type;
	}

    public function setDescription($arg)
	{
		$this -> description = $arg;
	}

	public function getDescription()
	{
		return $this -> description;
	}

    public function setLink($arg)
	{
		$this -> link = $arg;
	}

	public function getLink()
	{
		return $this -> link;
	}

    public function setBegin_date($arg)
	{
		$this -> begin_date = $arg;
	}

	public function getBegin_date()
	{
		return $this -> begin_date;
	}

    public function setEnd_date($arg)
	{
		$this -> end_date = $arg;
	}

	public function getEnd_date()
	{
		return $this -> end_date;
	}

    public function setActive($arg)
	{
		$this -> active = $arg;
	}

	public function getActive()
	{
		return $this -> active;
	}

}
