<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DreamRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class DreamCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class DreamCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Dream');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/dream');
        $this->crud->setEntityNameStrings('dream', 'dreams');
        $this->crud->enableDetailsRow();
    }

    protected function setupListOperation()
    {
        $this->crud->addColumn('title');
        $this->crud->addColumn([
                'name' => 'created_at',
                'label' => 'Created At',
                'type' => 'date',
            ]);
        $this->crud->addColumn([
            'label' => 'tasks left',
            'type' => 'array_count',
            'name' => 'tasks',
            'entity' => 'tasks',
        ]);
        $this->crud->addColumn('status');
        $this->crud->addColumn([
            'label' => 'Category',
            'type' => 'select',
            'name' => 'category_id',
            'entity' => 'category',
            'attribute' => 'name',
        ]);
    }

    protected function setupCreateOperation()
    {
        $this->crud->setValidation(DreamRequest::class);

        // TODO: remove setFromDb() and manually define Fields
        $this->crud->addField([
            'name' => 'title',
            'label' => 'Title',
            'type' => 'text',
            'placeholder' => 'Your title here',
        ]);
        $this->crud->addField([
            'label' => 'Category',
            'type' => 'select2',
            'name' => 'category_id',
            'entity' => 'category',
            'attribute' => 'name',
        ]);
        $this->crud->addField([
            'label' => 'Tasks',
            'type' => 'select2_multiple',
            'name' => 'tasks', // the method that defines the relationship in your Model
            'entity' => 'tasks', // the method that defines the relationship in your Model
            'attribute' => 'title', // foreign key attribute that is shown to user
            'pivot' => true, // on create&update, do you need to add/delete pivot table entries?
        ]);
        $this->crud->addField([
            'name' => 'status',
            'label' => 'Status',
            'type' => 'enum',
        ]);

        $this->crud->addField([
            'name'  => 'user_id', 
            'type'  => 'hidden', 
            'value' => \Auth::guard('backpack')->id(),
        ]);
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
