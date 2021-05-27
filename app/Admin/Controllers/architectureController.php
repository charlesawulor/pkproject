<?php

namespace App\Admin\Controllers;

use App\architecture;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class architectureController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'architecture';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new architecture());

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
        $show = new Show(architecture::findOrFail($id));

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
        $form = new Form(new architecture());

        $form->text('course_title', __('Course title'));
        $form->text('about_course', __('About course'));
        $form->image('image', __('Image'));

        return $form;
    }
}
