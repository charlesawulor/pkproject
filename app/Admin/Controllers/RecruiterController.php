<?php

namespace App\Admin\Controllers;

use App\recruiter;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class RecruiterController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'recruiter';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new recruiter());

        $grid->column('id', __('Id'));
        $grid->column('image', __('Image'));
        $grid->column('image1', __('Image1'));
        $grid->column('image2', __('Image2'));
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
        $show = new Show(recruiter::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('image1', __('Image1'));
        $show->field('image2', __('Image2'));
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
        $form = new Form(new recruiter());

        $form->image('image', __('Image'));
        $form->image('image1', __('Image1'));
        $form->image('image2', __('Image2'));

        return $form;
    }
}
