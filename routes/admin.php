<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AffiliateQuestionController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BlogSectionController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ChatController;
use App\Http\Controllers\Admin\DocsPageController;
use App\Http\Controllers\Admin\DocsSectionController;
use App\Http\Controllers\Admin\EarningController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LibraryCategoryController;
use App\Http\Controllers\Admin\LibraryController;
use App\Http\Controllers\Admin\LibraryFeatureController;
use App\Http\Controllers\Admin\LibrarySettingController;
use App\Http\Controllers\Admin\LibraryUseController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\Admin\ResourceController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\StrategyController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\UserController;
use App\Models\DocsSection;
use Illuminate\Support\Facades\Route;



Route::group(['middleware' => 'auth:admin'], function () {

    Route::get('/dashboard', [HomeController::class , 'home'])->name('home');
    Route::get('settings', [SettingController::class, 'edit'])->name('settings.edit');
    Route::post('settings', [SettingController::class, 'update'])->name('settings.update');

     //////////////////////////// strategies ///////////////////////////////////
     Route::get('strategies/data', [StrategyController::class, 'datatable'])->name('strategies.data')->can('strategies-view');
     Route::get('strategies/form', [StrategyController::class, 'create'])->name('strategies.create')->can('strategies-store');
     Route::get('strategies/update_status', [StrategyController::class, 'updateStatus'])->name('strategies.status')->can('strategies-status');
     Route::get('strategies', [StrategyController::class, 'index'])->name('strategies.index')->can('strategies-view');
     Route::post('strategies', [StrategyController::class, 'store'])->name('strategies.store')->can('strategies-store');
     Route::delete('strategies/{strategy}', [StrategyController::class, 'destroy'])->name('strategies.delete')->can('strategies-delete');

    //////////////////////////// plans ///////////////////////////////////
    Route::get('plans/data', [PlanController::class, 'datatable'])->name('plans.data')->can('plans-view');
    Route::get('plans/form', [PlanController::class, 'create'])->name('plans.create')->can('plans-store');
    Route::get('plans/update_status', [PlanController::class, 'updateStatus'])->name('plans.status')->can('plans-status');
    Route::get('plans', [PlanController::class, 'index'])->name('plans.index')->can('plans-view');
    Route::post('plans', [PlanController::class, 'store'])->name('plans.store')->can('plans-store');
    Route::delete('plans/{plan}', [PlanController::class, 'destroy'])->name('plans.delete')->can('plans-delete');
         //////////////////////////// admins ///////////////////////////////////
    Route::get('admins/data', [AdminController::class, 'datatable'])->name('admins.data')->can('admins-view');
    Route::get('admins/form', [AdminController::class, 'form'])->name('admins.form')->can('admins-store');
    Route::get('admins/update_status', [AdminController::class, 'updateStatus'])->name('admins.status')->can('admins-status');
    Route::get('admins', [AdminController::class, 'index'])->name('admins.index')->can('admins-view');
    Route::post('admins', [AdminController::class, 'store'])->name('admins.store')->can('admins-store');
    Route::delete('admins/{admin}', [AdminController::class, 'destroy'])->name('admins.delete')->can('admins-delete');

    //////////////////////////// users ///////////////////////////////////
    Route::get('users/data', [UserController::class, 'datatable'])->name('users.data')->can('users-view');
    Route::get('users/form', [UserController::class, 'form'])->name('users.form')->can('users-store');
    Route::get('users/update_status', [UserController::class, 'updateStatus'])->name('users.status')->can('users-status');
    Route::get('users', [UserController::class, 'index'])->name('users.index')->can('users-view');
    Route::post('users', [UserController::class, 'store'])->name('users.store')->can('users-store');
    Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.delete')->can('users-delete');

     //////////////////////////// questions ///////////////////////////////////
    Route::get('questions/data', [QuestionController::class, 'datatable'])->name('questions.data')->can('questions-view');
    Route::get('questions/update_status', [QuestionController::class, 'updateStatus'])->name('questions.status')->can('questions-status');
    Route::get('questions', [QuestionController::class, 'index'])->name('questions.index')->can('questions-view');
    Route::get('questions/create', [QuestionController::class, 'create'])->name('questions.create')->can('questions-store');
    Route::post('questions', [QuestionController::class, 'store'])->name('questions.store')->can('questions-store');
    Route::delete('questions/{question}', [QuestionController::class, 'destroy'])->name('questions.delete')->can('questions-delete');

    //////////////////////////// affiliate questions ///////////////////////////////////
    Route::get('affiliate_questions/data', [AffiliateQuestionController::class, 'datatable'])->name('affiliate_question.data')->can('questions-view');
    Route::get('affiliate_questions/update_status', [AffiliateQuestionController::class, 'updateStatus'])->name('affiliate_question.status')->can('questions-status');
    Route::get('affiliate_questions', [AffiliateQuestionController::class, 'index'])->name('affiliate_question.index')->can('questions-view');
    Route::get('affiliate_questions/create', [AffiliateQuestionController::class, 'create'])->name('affiliate_question.create')->can('questions-store');
    Route::post('affiliate_questions', [AffiliateQuestionController::class, 'store'])->name('affiliate_question.store')->can('questions-store');
    Route::delete('affiliate_questions/{affiliate_question}', [AffiliateQuestionController::class, 'destroy'])->name('affiliate_question.delete')->can('questions-delete');
    //////////////////////////// testimonials ///////////////////////////////////
    Route::get('testimonials/data', [TestimonialController::class, 'datatable'])->name('testimonials.data')->can('testimonials-view');
    Route::get('testimonials/form', [TestimonialController::class, 'create'])->name('testimonials.create')->can('testimonials-store');
    Route::get('testimonials/update_status', [TestimonialController::class, 'updateStatus'])->name('testimonials.status')->can('testimonials-status');
    Route::get('testimonials', [TestimonialController::class, 'index'])->name('testimonials.index')->can('testimonials-view');
    Route::post('testimonials', [TestimonialController::class, 'store'])->name('testimonials.store')->can('testimonials-store');
    Route::delete('testimonials/{testimonial}', [TestimonialController::class, 'destroy'])->name('testimonials.delete')->can('testimonials-delete');
    //////////////////////////// sliders ///////////////////////////////////
    Route::get('sliders/data', [SliderController::class, 'datatable'])->name('sliders.data')->can('sliders-view');
    Route::get('sliders/form', [SliderController::class, 'create'])->name('sliders.create')->can('sliders-store');
    Route::get('sliders/update_status', [SliderController::class, 'updateStatus'])->name('sliders.status')->can('sliders-store');
    Route::get('sliders', [SliderController::class, 'index'])->name('sliders.index')->can('sliders-view');
    Route::post('sliders', [SliderController::class, 'store'])->name('sliders.store')->can('sliders-store');
    Route::delete('sliders/{slider}', [SliderController::class, 'destroy'])->name('sliders.delete')->can('sliders-delete');

        //////////////////////////// Docs page ///////////////////////////////////
        Route::get('docs-pages/data', [DocsPageController::class, 'datatable'])->name('docs-pages.data')->can('docs-pages-view');
        Route::get('docs-pages/form', [DocsPageController::class, 'create'])->name('docs-pages.create')->can('docs-pages-store');
        Route::get('docs-pages/update_status', [DocsPageController::class, 'updateStatus'])->name('docs-pages.status')->can('docs-pages-store');
        Route::get('docs-pages', [DocsPageController::class, 'index'])->name('docs-pages.index')->can('docs-pages-view');
        Route::post('docs-pages', [DocsPageController::class, 'store'])->name('docs-pages.store')->can('docs-pages-store');
        Route::delete('docs-pages/{docs_page}', [DocsPageController::class, 'destroy'])->name('docs-pages.delete')->can('docs-pages-delete');

        //////////////////////////// Docs Section ///////////////////////////////////
        Route::get('docs-sections/data', [DocsSectionController::class, 'datatable'])->name('docs-sections.data')->can('docs-sections-view');
        Route::get('docs-sections/form', [DocsSectionController::class, 'create'])->name('docs-sections.create')->can('docs-sections-store');
        Route::get('docs-sections/update_status', [DocsSectionController::class, 'updateStatus'])->name('docs-sections.status')->can('docs-sections-store');
        Route::get('docs-sections', [DocsSectionController::class, 'index'])->name('docs-sections.index')->can('docs-sections-view');
        Route::post('docs-sections', [DocsSectionController::class, 'store'])->name('docs-sections.store')->can('docs-sections-store');
        Route::delete('docs-sections/{docs_section}', [DocsSectionController::class, 'destroy'])->name('docs-sections.delete')->can('docs-sections-delete');

        //////////////////////////// categories ///////////////////////////////////
    Route::get('categories/data', [CategoryController::class, 'datatable'])->name('categories.data')->can('categories-view');
    Route::get('categories/form', [CategoryController::class, 'create'])->name('categories.create')->can('categories-store');
    Route::get('categories/update_status', [CategoryController::class, 'updateStatus'])->name('categories.status')->can('categories-store');
    Route::get('categories', [CategoryController::class, 'index'])->name('categories.index')->can('categories-view');
    Route::post('categories', [CategoryController::class, 'store'])->name('categories.store')->can('categories-store');
    Route::delete('categories/{category}', [CategoryController::class, 'destroy'])->name('categories.delete')->can('categories-delete');



     //////////////////////////// blogs ///////////////////////////////////
     Route::get('blogs/data', [BlogController::class, 'datatable'])->name('blogs.data')->can('blogs-view');
     Route::get('blogs/form', [BlogController::class, 'create'])->name('blogs.create')->can('blogs-store');
     Route::get('blogs/update_status', [BlogController::class, 'updateStatus'])->name('blogs.status')->can('blogs-store');
     Route::get('blogs', [BlogController::class, 'index'])->name('blogs.index')->can('blogs-view');
     Route::post('blogs', [BlogController::class, 'store'])->name('blogs.store')->can('blogs-store');
     Route::delete('blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.delete')->can('blogs-delete');

      //////////////////////////// blog sections ///////////////////////////////////
      Route::get('blog-sections/data', [BlogSectionController::class, 'datatable'])->name('blog-sections.data')->can('blog-sections-view');
      Route::get('blog-sections/form', [BlogSectionController::class, 'create'])->name('blog-sections.create')->can('blog-sections-store');
      Route::get('blog-sections/update_status', [BlogSectionController::class, 'updateStatus'])->name('blog-sections.status')->can('blog-sections-store');
      Route::get('blog-sections', [BlogSectionController::class, 'index'])->name('blog-sections.index')->can('blog-sections-view');
      Route::post('blog-sections', [BlogSectionController::class, 'store'])->name('blog-sections.store')->can('blog-sections-store');
      Route::delete('blog-sections/{blog_section}', [BlogSectionController::class, 'destroy'])->name('blog-sections.delete')->can('blog-sections-delete');

      //////////////////////////// roles sections ///////////////////////////////////

      Route::get('roles', [RoleController::class, 'index'])->name('roles.index')->can('roles-view');
      Route::get('roles/data', [RoleController::class, 'datatable'])->name('roles.data')->can('roles-view');;
      Route::post('roles', [RoleController::class, 'process'])->name('roles.process')->can('roles-store');
      Route::get('roles/form', [RoleController::class, 'form'])->name('roles.form')->can('roles-store');
      Route::delete('roles/{role}', [RoleController::class, 'destroy'])->name('roles.destroy')->can('roles-delete');;

        //////////////////////////// permissions sections ///////////////////////////////////
      Route::get('permissions', [PermissionController::class, 'index'])->name('permissions.index');
      Route::get('permissions/data', [PermissionController::class, 'datatable'])->name('permissions.data');
      Route::post('permissions', [PermissionController::class, 'process'])->name('permissions.process');
      Route::get('permissions/form', [PermissionController::class, 'form'])->name('permissions.form');
      Route::delete('permissions/{permission}', [PermissionController::class, 'destroy'])->name('permissions.destroy');

      //////////////////////////// payments sections ///////////////////////////////////
      Route::get('payments', [PaymentController::class, 'index'])->name('payments.index');
      Route::get('payments/data', [PaymentController::class, 'datatable'])->name('payments.data');
      Route::post('payments', [PaymentController::class, 'process'])->name('payments.process');
      Route::get('payments/form', [PaymentController::class, 'form'])->name('payments.form');
      Route::delete('payments/{payment}', [PaymentController::class, 'destroy'])->name('payments.destroy');


      //////////////////////////// Earnings sections ///////////////////////////////////
      Route::get('earnings', [EarningController::class, 'index'])->name('earnings.index');
      Route::get('earnings/data', [EarningController::class, 'datatable'])->name('earnings.data');
      Route::post('earnings', [EarningController::class, 'process'])->name('earnings.process');
      Route::get('earnings/form', [EarningController::class, 'form'])->name('earnings.form');
      Route::delete('earnings/{earning}', [EarningController::class, 'destroy'])->name('earnings.destroy');
    //////////////////////////// resources ///////////////////////////////////
    Route::delete('/resources/{resource}', [ResourceController::class, 'destroy']);
    /////////////////////////// chats /////////////////////////////////////
    Route::get('/chat/{userId?}', [ChatController::class, 'adminChatView'])->name('chat');
    Route::get('/chat/messages/{userId}', [ChatController::class, 'getMessages'])->name('chat.messages');


});



         //////////////////////////// auth ///////////////////////////////////

    Route::post('/chat/send', [ChatController::class, 'adminSendMessage'])->name('chat.send');
    Route::get('login', [AuthController::class, 'index'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('post_login');
    Route::post('/admin/logout', [HomeController::class, 'logout'])->name('logout');
    // Route::get('logout', [AuthController::class, 'logout'])->name('logout');
