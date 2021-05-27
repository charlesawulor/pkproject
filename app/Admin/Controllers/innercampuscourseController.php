<?php

namespace App\Admin\Controllers;

use App\innercampuscourse;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class innercampuscourseController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'innercampuscourse';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new innercampuscourse());

        $grid->column('id', __('Id'));
        $grid->column('campus_name', __('Campus name'));
        $grid->column('course_name', __('Course name'));
        $grid->column('degree_title', __('Degree title'));
        $grid->column('what_offer', __('What offer'));
        $grid->column('first_image', __('First image'));
        $grid->column('second_image', __('Second image'));
        $grid->column('benefit', __('Benefit'));
        $grid->column('faculty_name', __('Faculty name'));
        $grid->column('faculty_details', __('Faculty details'));
        $grid->column('faculty_name2', __('Faculty name2'));
        $grid->column('faculty_details2', __('Faculty details2'));
        $grid->column('faculty_name3', __('Faculty name3'));
        $grid->column('faculty_details3', __('Faculty details3'));
        $grid->column('faculty_name4', __('Faculty name4'));
        $grid->column('faculty_details4', __('Faculty details4'));
        $grid->column('icri_location', __(' icri location'));
        $grid->column('why_icri_campus', __('Why icri campus'));
        $grid->column('about_icri', __('About icri'));
        $grid->column('hiring_partner', __('Hiring partner'));
        $grid->column('hiring_partner2', __('Hiring partner2'));
        $grid->column('hiring_partner3', __('Hiring partner3'));
        $grid->column('hiring_partner4', __('Hiring partner4'));
        $grid->column('hiring_partner5', __('Hiring partner5'));
        $grid->column('hiring_partner6', __('Hiring partner6'));
        $grid->column('hiring_partner7', __('Hiring partner7'));
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
        $show = new Show(innercampuscourse::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('campus_name', __('Campus name'));
        $show->field('course_name', __('Course name'));
        $show->field('degree_title', __('Degree title'));
        $show->field('what_offer', __('What offer'));
        $show->field('first_image', __('First image'));
        $show->field('second_image', __('Second image'));
        $show->field('benefit', __('Benefit'));
        $show->field('faculty_name', __('Faculty name'));
        $show->field('faculty_details', __('Faculty details'));
        $show->field('faculty_name2', __('Faculty name2'));
        $show->field('faculty_details2', __('Faculty details2'));
        $show->field('faculty_name3', __('Faculty name3'));
        $show->field('faculty_details3', __('Faculty details3'));
        $show->field('faculty_name4', __('Faculty name4'));
        $show->field('faculty_details4', __('Faculty details4'));
        $show->field('icri_location', __(' icri location'));
        $show->field('why_icri_campus', __('Why icri campus'));
        $show->field('about_icri', __('About icri'));
        $show->field('hiring_partner', __('Hiring partner'));
        $show->field('hiring_partner2', __('Hiring partner2'));
        $show->field('hiring_partner3', __('Hiring partner3'));
        $show->field('hiring_partner4', __('Hiring partner4'));
        $show->field('hiring_partner5', __('Hiring partner5'));
        $show->field('hiring_partner6', __('Hiring partner6'));
        $show->field('hiring_partner7', __('Hiring partner7'));
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
        $form = new Form(new innercampuscourse());

        $form->text('campus_name', __('Campus name'));
        $form->text('course_name', __('Course name'));
        $form->text('degree_title', __('Degree title'));
        $form->textarea('what_offer', __('What offer'));
        $form->image('first_image', __('First image'));
        $form->image('second_image', __('Second image'));
        $form->textarea('benefit', __('Benefit'));
        $form->text('faculty_name', __('Faculty name'));
        $form->textarea('faculty_details', __('Faculty details'));
        $form->text('faculty_name2', __('Faculty name2'));
        $form->textarea('faculty_details2', __('Faculty details2'));
        $form->text('faculty_name3', __('Faculty name3'));
        $form->textarea('faculty_details3', __('Faculty details3'));
        $form->text('faculty_name4', __('Faculty name4'));
        $form->textarea('faculty_details4', __('Faculty details4'));
        $form->textarea('icri_location', __('icri location'));
        $form->textarea('why_icri_campus', __('Why icri campus'));
        $form->textarea('about_icri', __('About icri'));
        $form->image('hiring_partner', __('Hiring partner'));
        $form->image('hiring_partner2', __('Hiring partner2'));
        $form->image('hiring_partner3', __('Hiring partner3'));
        $form->image('hiring_partner4', __('Hiring partner4'));
        $form->image('hiring_partner5', __('Hiring partner5'));
        $form->image('hiring_partner6', __('Hiring partner6'));
        $form->image('hiring_partner7', __('Hiring partner7'));

        return $form;
    }
}
