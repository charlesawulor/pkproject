<?php

namespace App\Admin\Controllers;

use App\whyicriclinicalresearch;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class whyicriclinicalresearchController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'whyicriclinicalresearch';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new whyicriclinicalresearch());

        $grid->column('id', __('Id'));
        $grid->column('why_icri_clinical', __('Why icri clinical'));
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
        $show = new Show(whyicriclinicalresearch::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('why_icri_clinical', __('Why icri clinical'));
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
        $form = new Form(new whyicriclinicalresearch());

        $form->text('why_icri_clinical', __('Why Clinical Research At ICRI'));

        return $form;
    }
}
