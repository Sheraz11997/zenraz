<?php


namespace App\Transformers;

use League\Fractal\Manager;
use League\Fractal\Resource\Collection;

class ProjectTransformer extends TransformerAbstract
{

public function transform(Project $project)
{
return [
    'id' => (int) $project->id
];
}
}
