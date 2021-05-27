<?php

namespace App\Admin\Controllers;

use App\whyclinicalresearch;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class whyclinicalresearchController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'whyclinicalresearch';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new whyclinicalresearch());

        $grid->column('id', __('Id'));
        $grid->column('why_clinical', __('Why clinical'));
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
        $show = new Show(whyclinicalresearch::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('why_clinical', __('Why clinical'));
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
        $form = new Form(new whyclinicalresearch());

        $form->text('why_clinical', __('Why Clinical Research'));

        return $form;
    }
}
