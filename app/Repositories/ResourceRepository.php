<?php

namespace App\Repositories;

abstract class ResourceRepository
{

    protected $model;

    public function getPaginate($n)
	{
		return $this->model->paginate($n);
	}

	public function store(array $inputs)
	{
		return $this->model->create($inputs);
	}

	public function getById($id)
	{

        //dd($this->model->findOrFail($id));
		return $this->model->findOrFail($id);
	}

	public function update($id, array $inputs)
	{
		//dd($this->getById($id));
		$this->getById($id)->update($inputs);
	}

	public function destroy($id)
	{
		$this->getById($id)->delete();
	}

}