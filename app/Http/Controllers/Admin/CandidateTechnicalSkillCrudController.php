<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CandidateTechnicalSkillRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class CandidateTechnicalSkillCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        if (!backpack_user()->can('View Candidates'))
        {
            abort(403, 'Access denied');
        }

        if (!backpack_user()->can('Manage Candidates'))
        {
            $this->crud->denyAccess(['create','delete','update']);
        }
        $this->crud->setModel('App\Models\CandidateTechnicalSkill');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/candidate-technical-skill');
        $this->crud->setEntityNameStrings('technical skill', 'technical skills');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn(['name' => 'skill','type' => 'text']);
        $this->crud->addColumn([
            'label' => "Candidate",
            'type' => "select",
            'name' => 'candidate_id',
            'entity' => 'candidate',
            'attribute' => "full_name",
            'model' => 'App\Models\Candidate'
        ]);
        $this->crud->addColumn(['name' => 'created_at','type' => 'text']);
        $this->crud->addColumn(['name' => 'updated_at','type' => 'text']);
        $this->crud->addColumn(['name' => 'deleted_at','type' => 'text']);
    }

    protected function setupShowOperation()
    {
        $this->crud->addColumn(['name' => 'skill','type' => 'text']);
        $this->crud->addColumn([
            'label' => "Candidate",
            'type' => "select",
            'name' => 'candidate_id',
            'entity' => 'candidate',
            'attribute' => "full_name",
            'model' => 'App\Models\Candidate'
        ]);
        $this->crud->addColumn(['name' => 'created_at','type' => 'text']);
        $this->crud->addColumn(['name' => 'updated_at','type' => 'text']);
        $this->crud->addColumn(['name' => 'deleted_at','type' => 'text']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(CandidateTechnicalSkillRequest::class);

        $this->crud->addField(['name' => 'skill','type' => 'text',]);

        $this->crud->addField([
            'label' => "Candidate",
            'type' => "relationship",
            'name' => 'candidate_id',
            'entity' => 'candidate',
            'attribute' => "full_name",
            'model' => 'App\Models\Candidate'
        ]);

    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
