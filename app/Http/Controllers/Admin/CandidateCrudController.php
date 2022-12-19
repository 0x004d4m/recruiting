<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CandidateRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;

class CandidateCrudController extends CrudController
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
        $this->crud->setModel('App\Models\Candidate');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/candidate');
        $this->crud->setEntityNameStrings('candidate', 'candidates');
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn(['name' => 'first_name','type' => 'text',]);
        $this->crud->addColumn(['name' => 'middel_initial','type' => 'text']);
        $this->crud->addColumn(['name' => 'last_name','type' => 'text']);
        $this->crud->addColumn(['name' => 'occupation','type' => 'text']);
        $this->crud->addColumn(['name' => 'mobile1','type' => 'phone']);
        $this->crud->addColumn(['name' => 'mobile2','type' => 'phone']);
        $this->crud->addColumn(['name' => 'email1','type' => 'email']);
        $this->crud->addColumn(['name' => 'email2','type' => 'email']);
        $this->crud->addColumn(['name' => 'personal_website','type' => 'link']);
        $this->crud->addColumn(['name' => 'linkedin_profile','type' => 'link']);
        $this->crud->addColumn(['name' => 'resume','type' => 'link']);
        $this->crud->addColumn(['name' => 'created_at','type' => 'text']);
        $this->crud->addColumn(['name' => 'updated_at','type' => 'text']);
        $this->crud->addColumn(['name' => 'deleted_at','type' => 'text']);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(CandidateRequest::class);

        $this->crud->addField(['name' => 'first_name','type' => 'text',]);
        $this->crud->addField(['name' => 'middel_initial','type' => 'text']);
        $this->crud->addField(['name' => 'last_name','type' => 'text']);
        $this->crud->addField(['name' => 'occupation','type' => 'text']);
        $this->crud->addField(['name' => 'mobile1','type' => 'text']);
        $this->crud->addField(['name' => 'mobile2','type' => 'text']);
        $this->crud->addField(['name' => 'email1','type' => 'text']);
        $this->crud->addField(['name' => 'email2','type' => 'text']);
        $this->crud->addField(['name' => 'personal_website','type' => 'text']);
        $this->crud->addField(['name' => 'linkedin_profile','type' => 'text']);
        $this->crud->addField([
            'name'      => 'resume',
            'type'      => 'upload',
            'upload'    => true,
        ],);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    protected function setupShowOperation()
    {
        $this->crud->addColumn(['name' => 'first_name','type' => 'text',]);
        $this->crud->addColumn(['name' => 'middel_initial','type' => 'text']);
        $this->crud->addColumn(['name' => 'last_name','type' => 'text']);
        $this->crud->addColumn(['name' => 'occupation','type' => 'text']);
        $this->crud->addColumn(['name' => 'mobile1','type' => 'phone']);
        $this->crud->addColumn(['name' => 'mobile2','type' => 'phone']);
        $this->crud->addColumn(['name' => 'email1','type' => 'email']);
        $this->crud->addColumn(['name' => 'email2','type' => 'email']);
        $this->crud->addColumn(['name' => 'personal_website','type' => 'link']);
        $this->crud->addColumn(['name' => 'linkedin_profile','type' => 'link']);
        $this->crud->addColumn(['name' => 'resume','type' => 'link']);
        $this->crud->addColumn(['name' => 'created_at','type' => 'text']);
        $this->crud->addColumn(['name' => 'updated_at','type' => 'text']);
        $this->crud->addColumn(['name' => 'deleted_at','type' => 'text']);
    }
}
