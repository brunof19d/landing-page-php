<?php

use App\Controller\MakeLogin;
use App\Controller\Users\PersistUsers;
use App\View\Admin\AdminHome;
use App\View\Admin\Contact\Contact;
use App\View\Admin\Testimonial\TableTestimonial;
use App\View\Admin\Testimonial\TestimonialAdd;
use App\View\Admin\Testimonial\TestimonialEdit;
use App\View\Admin\Users\TableUsers;
use App\View\Admin\Users\UserAdd;
use App\View\Admin\Users\UserEdit;
use App\View\Home;
use App\View\Login;


return [

    '/home' => Home::class,
    '/login' => Login::class,
    '/make-login' => MakeLogin::class,

    /* ADMIN SECTION */

    // Home
    '/admin' => AdminHome::class,

    // Admin users
    '/admin/users' => TableUsers::class,
    '/admin/user-edit' => UserEdit::class,
    '/admin/user-add' => UserAdd::class,
    '/save-user' => PersistUsers::class,

    // Contact Admin
    '/admin/contact' => Contact::class,

    // Testimonial Admin
    '/admin/testimonial' => TableTestimonial::class,
    '/admin/testimonial-add' => TestimonialAdd::class,
    '/admin/testimonial-edit' => TestimonialEdit::class



];