<?php

namespace App\Repositories;

use App\Mission;

class MissionRepository extends ResourceRepository
{

    public function __construct(Mission $mission)
	{
		$this->model = $mission;
	}

}