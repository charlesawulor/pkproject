<?php

namespace App\Admin\Controllers;

use App\bankwltmgt;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class bankwltmgtController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'bankwltmgt';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new bankwltmgt());

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
        $show = new Show(bankwltmgt::findOrFail($id));

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
        $form = new Form(new bankwltmgt());

        $form->text('course_title', __('Course title'));
        $form->text('about_course', __('About course'));
        $form->image('image', __('Image'));

        return $form;
    }
}
