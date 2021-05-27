<?php

namespace App\Admin\Controllers;

use App\clinicalresearch;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class clinicalresearchController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'clinicalresearch';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new clinicalresearch());

        $grid->column('id', __('Id'));
        $grid->column('course_title', __('Course title'));
        $grid->column('about_course', __('About course'));
        $grid->column('image', __('Image'));
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
        $show = new Show(clinicalresearch::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('course_title', __('Course title'));
        $show->field('about_course', __('About course'));
        $show->field('image', __('Image'));
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
        $form = new Form(new clinicalresearch());

        $form->text('course_title', __('Course title'));
        $form->textarea('about_course', __('About Clinical Research'));
        $form->image('image', __('Image'));

        return $form;
    }
}
