<?php

namespace App\Admin\Controllers;

use App\pgdeligibilityaviationmanagement;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class pgdeligibilityaviationmanagementController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'pgdeligibilityaviationmanagement';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new pgdeligibilityaviationmanagement());

        $grid->column('id', __('Id'));
        $grid->column('eligibility', __('Eligibility'));
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
        $show = new Show(pgdeligibilityaviationmanagement::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('eligibility', __('Eligibility'));
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
        $form = new Form(new pgdeligibilityaviationmanagement());

        $form->text('eligibility', __('Eligibility'));

        return $form;
    }
}
