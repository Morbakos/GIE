<?php

namespace App\Repositories;

use App\Tuto;

class TutoRepository extends ResourceRepository
{

    public function __construct(Tuto $tuto)
	{
		$this->model = $tuto;
	}

}