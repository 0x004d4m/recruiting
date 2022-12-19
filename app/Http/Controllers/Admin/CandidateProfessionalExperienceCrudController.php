<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CandidateProfessionalExperienceRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class CandidateProfessionalExperienceCrudController extends CrudController
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
        $this->crud->setModel('App\Models\CandidateProfessionalExperience');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/candidate-professional-experience');
        $this->crud->setEntityNameStrings('professional experience', 'professional experiences');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn(['name' => 'job_title','type' => 'text']);
        $this->crud->addColumn(['name' => 'full_legal_name_of_employer','type' => 'text']);
        $this->crud->addColumn(['name' => 'phone_number','type' => 'phone']);
        $this->crud->addColumn(['name' => 'immediate_supervisor','type' => 'text']);
        $this->crud->addColumn(['name' => 'immediate_supervisor_phone_number','type' => 'phone']);
        $this->crud->addColumn(['name' => 'immediate_supervisor_email','type' => 'email']);
        $this->crud->addColumn(['name' => 'how_many_employees_did_you_supervise','type' => 'text']);
        $this->crud->addColumn(['name' => 'physical_address_of_employer','type' => 'text']);
        $this->crud->addColumn(['name' => 'city_state_country','type' => 'text']);
        $this->crud->addColumn(['name' => 'postal_code','type' => 'text']);
        $this->crud->addColumn(['name' => 'employer_official_website','type' => 'link']);
        $this->crud->addColumn(['name' => 'duties_and_responsibilities','type' => 'text']);
        $this->crud->addColumn(['name' => 'achievements','type' => 'text']);
        $this->crud->addColumn(['name' => 'recommendation_letter1','type' => 'link']);
        $this->crud->addColumn(['name' => 'recommendation_letter2','type' => 'link']);
        $this->crud->addColumn(['name' => 'recommendation_letter3','type' => 'link']);
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
        $this->crud->addColumn(['name' => 'job_title','type' => 'text']);
        $this->crud->addColumn(['name' => 'full_legal_name_of_employer','type' => 'text']);
        $this->crud->addColumn(['name' => 'phone_number','type' => 'phone']);
        $this->crud->addColumn(['name' => 'immediate_supervisor','type' => 'text']);
        $this->crud->addColumn(['name' => 'immediate_supervisor_phone_number','type' => 'phone']);
        $this->crud->addColumn(['name' => 'immediate_supervisor_email','type' => 'email']);
        $this->crud->addColumn(['name' => 'how_many_employees_did_you_supervise','type' => 'text']);
        $this->crud->addColumn(['name' => 'physical_address_of_employer','type' => 'text']);
        $this->crud->addColumn(['name' => 'city_state_country','type' => 'text']);
        $this->crud->addColumn(['name' => 'postal_code','type' => 'text']);
        $this->crud->addColumn(['name' => 'employer_official_website','type' => 'link']);
        $this->crud->addColumn(['name' => 'duties_and_responsibilities','type' => 'text']);
        $this->crud->addColumn(['name' => 'achievements','type' => 'text']);
        $this->crud->addColumn(['name' => 'recommendation_letter1','type' => 'link']);
        $this->crud->addColumn(['name' => 'recommendation_letter2','type' => 'link']);
        $this->crud->addColumn(['name' => 'recommendation_letter3','type' => 'link']);
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
        $this->crud->setValidation(CandidateProfessionalExperienceRequest::class);

        $this->crud->addField(['name' => 'job_title','type' => 'text']);
        $this->crud->addField(['name' => 'full_legal_name_of_employer','type' => 'text']);
        $this->crud->addField(['name' => 'phone_number','type' => 'text']);
        $this->crud->addField(['name' => 'immediate_supervisor','type' => 'text']);
        $this->crud->addField(['name' => 'immediate_supervisor_phone_number','type' => 'text']);
        $this->crud->addField(['name' => 'immediate_supervisor_email','type' => 'text']);
        $this->crud->addField(['name' => 'how_many_employees_did_you_supervise','type' => 'text']);
        $this->crud->addField(['name' => 'physical_address_of_employer','type' => 'text']);
        $this->crud->addField(['name' => 'city_state_country','type' => 'text']);
        $this->crud->addField(['name' => 'postal_code','type' => 'text']);
        $this->crud->addField(['name' => 'employer_official_website','type' => 'text']);
        $this->crud->addField(['name' => 'duties_and_responsibilities','type' => 'textarea']);
        $this->crud->addField(['name' => 'achievements','type' => 'textarea']);
        $this->crud->addField([
            'name'      => 'recommendation_letter1',
            'type'      => 'upload',
            'upload'    => true,
        ],);
        $this->crud->addField([
            'name'      => 'recommendation_letter2',
            'type'      => 'upload',
            'upload'    => true,
        ],);
        $this->crud->addField([
            'name'      => 'recommendation_letter3',
            'type'      => 'upload',
            'upload'    => true,
        ],);

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
