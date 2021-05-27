<?php

namespace App\Admin\Controllers;

use App\whyhealthcarehospitalmanagement;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class whyhealthcarehospitalmanagementController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'whyhealthcarehospitalmanagement';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new whyhealthcarehospitalmanagement());

        $grid->column('id', __('Id'));
        $grid->column('why_healthcarehospital', __('Why healthcarehospital'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(whyhealthcarehospitalmanagement::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('why_healthcarehospital', __('Why healthcarehospital'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new whyhealthcarehospitalmanagement());

        $form->text('why_healthcarehospital', __('Why healthcarehospital'));

        return $form;
    }
}
