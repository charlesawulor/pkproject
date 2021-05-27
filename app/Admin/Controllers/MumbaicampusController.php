<?php

namespace App\Admin\Controllers;

use App\mumbaicampus;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MumbaicampusController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'mumbaicampus';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new mumbaicampus());

        $grid->column('id', __('Id'));
        $grid->column('image', __('Image'));
        $grid->column('title', __('Campus Name'));
        $grid->column('about', __('About Campus'));
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
        $show = new Show(mumbaicampus::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('title', __('Campus Name'));
        $show->field('about', __('About Campus'));
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
        $form = new Form(new mumbaicampus());

        
        $form->image('image', __('Image'));
        $form->text('title', __('Campus Name'));
        $form->textarea('about', __('About Campus'));

        return $form;
    }
}
