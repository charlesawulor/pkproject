<?php

namespace App\Admin\Controllers;

use App\industryspeaktestimonial;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class IndustryspeaktestimonialController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'industryspeaktestimonial';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new industryspeaktestimonial());

        $grid->column('id', __('Id'));
        $grid->column('image', __('Image'));
        $grid->column('message', __('Message'));
        $grid->column('name', __('Name'));
        $grid->column('course', __('Course'));
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
        $show = new Show(industryspeaktestimonial::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('message', __('Message'));
        $show->field('name', __('Name'));
        $show->field('course', __('Course'));
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
        $form = new Form(new industryspeaktestimonial());

        $form->image('image', __('Image'));
        $form->text('message', __('Message'));
        $form->text('name', __('Name'));
        $form->text('course', __('Course'));

        return $form;
    }
}
