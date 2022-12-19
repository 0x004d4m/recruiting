<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CandidateAcademicAchievementRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class CandidateAcademicAchievementCrudController extends CrudController
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
        $this->crud->setModel('App\Models\CandidateAcademicAchievement');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/candidate-academic-achievement');
        $this->crud->setEntityNameStrings('academic achievement', 'academic achievements');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn(['name' => 'institution_name','type' => 'text']);
        $this->crud->addColumn(['name' => 'college_faculty','type' => 'text']);
        $this->crud->addColumn(['name' => 'city_state_country','type' => 'text']);
        $this->crud->addColumn(['name' => 'degree','type' => 'text']);
        $this->crud->addColumn(['name' => 'major','type' => 'text']);
        $this->crud->addColumn(['name' => 'minor','type' => 'text']);
        $this->crud->addColumn(['name' => 'start_date','type' => 'text']);
        $this->crud->addColumn(['name' => 'end_date','type' => 'text']);
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
        $this->crud->addColumn(['name' => 'institution_name','type' => 'text']);
        $this->crud->addColumn(['name' => 'college_faculty','type' => 'text']);
        $this->crud->addColumn(['name' => 'city_state_country','type' => 'text']);
        $this->crud->addColumn(['name' => 'degree','type' => 'text']);
        $this->crud->addColumn(['name' => 'major','type' => 'text']);
        $this->crud->addColumn(['name' => 'minor','type' => 'text']);
        $this->crud->addColumn(['name' => 'start_date','type' => 'text']);
        $this->crud->addColumn(['name' => 'end_date','type' => 'text']);
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
        $this->crud->setValidation(CandidateAcademicAchievementRequest::class);

        $this->crud->addField(['name' => 'institution_name','type' => 'text',]);
        $this->crud->addField(['name' => 'college_faculty','type' => 'text',]);
        $this->crud->addField(['name' => 'city_state_country','type' => 'text',]);
        $this->crud->addField(['name' => 'degree','type' => 'text',]);
        $this->crud->addField(['name' => 'major','type' => 'text',]);
        $this->crud->addField(['name' => 'minor','type' => 'text',]);
        $this->crud->addField(['name' => 'start_date','type' => 'date',]);
        $this->crud->addField(['name' => 'end_date','type' => 'date',]);

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
