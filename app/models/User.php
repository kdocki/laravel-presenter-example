<?php

class User extends Eloquent implements Robbo\Presenter\PresentableInterface 
{
	protected $guarded = array();

	public function getPresenter()
	{
		return new UserPresenter($this);
	}
}
