<?php

namespace App\Admin\Controllers;

use App\pgdcampuspharmamktmgt;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class pgdcampuspharmamktmgtController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'pgdcampuspharmamktmgt';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new pgdcampuspharmamktmgt());

        $grid->column('id', __('Id'));
        $grid->column('image', __('Image'));
        $grid->column('campus_name', __('Campus name'));
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
        $show = new Show(pgdcampuspharmamktmgt::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('image', __('Image'));
        $show->field('campus_name', __('Campus name'));
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
        $form = new Form(new pgdcampuspharmamktmgt());

        $form->image('image', __('Image'));
        $form->text('campus_name', __('Campus name'));

        return $form;
    }
}
