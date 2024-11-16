<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




Route::middleware('auth:sanctum')->group(function () {
    // This route will be accessible only by authenticated users via Sanctum
    Route::get('/user', function (Request $request) {
        return $request->user();
    });



    Route::apiResource('posts', \App\Http\Controllers\Api\PostController::class);

// API routes for attendances
    Route::apiResource('attendances', \App\Http\Controllers\Api\AttendanceController::class);
// API routes for children
    Route::apiResource('children', \App\Http\Controllers\Api\ChildController::class);
// API routes for events
    Route::apiResource('events', \App\Http\Controllers\Api\EventController::class);
// API routes for failed-jobs
    Route::apiResource('failed-jobs', \App\Http\Controllers\Api\FailedJobController::class);
// API routes for families
    Route::apiResource('families', \App\Http\Controllers\Api\FamilyController::class);
// API routes for family-links
    Route::apiResource('family-links', \App\Http\Controllers\Api\FamilyLinkController::class);
// API routes for jobs
    Route::apiResource('jobs', \App\Http\Controllers\Api\JobController::class);
// API routes for migrations
    Route::apiResource('migrations', \App\Http\Controllers\Api\MigrationController::class);
// API routes for password-reset-tokens
    Route::apiResource('password-reset-tokens', \App\Http\Controllers\Api\PasswordResetTokenController::class);
// API routes for personal-access-tokens
    Route::apiResource('personal-access-tokens', \App\Http\Controllers\Api\PersonalAccessTokenController::class);
// API routes for post-tags
    Route::apiResource('post-tags', \App\Http\Controllers\Api\PostTagController::class);
// API routes for posts
    Route::apiResource('posts', \App\Http\Controllers\Api\PostController::class);
// API routes for school-family-enrollments
    Route::apiResource('school-family-enrollments', \App\Http\Controllers\Api\SchoolFamilyEnrollmentController::class);
// API routes for schools
    Route::apiResource('schools', \App\Http\Controllers\Api\SchoolController::class);
// API routes for tags
    Route::apiResource('tags', \App\Http\Controllers\Api\TagController::class);
// API routes for users
    Route::apiResource('users', \App\Http\Controllers\Api\UserController::class);
    Route::apiResource('location-countries', \App\Http\Controllers\Api\LocationCountryController::class);
    Route::apiResource('location-states', \App\Http\Controllers\Api\LocationStateController::class);
    Route::apiResource('location-substates', \App\Http\Controllers\Api\LocationSubstateController::class);
    Route::apiResource('location-towns', \App\Http\Controllers\Api\LocationTownController::class);
    Route::apiResource('location-suburbs', \App\Http\Controllers\Api\LocationSuburbController::class);
    Route::apiResource('private-events', \App\Http\Controllers\Api\PrivateEventController::class);




});




// API routes for attendances
Route::get('attendances', [\App\Http\Controllers\Api\AttendanceController::class, 'index'])->name('attendances.index');
Route::get('attendances/{attendance}', [\App\Http\Controllers\Api\AttendanceController::class, 'show'])->name('attendances.show');

// API routes for children
Route::get('children', [\App\Http\Controllers\Api\ChildController::class, 'index'])->name('children.index');
Route::get('children/{child}', [\App\Http\Controllers\Api\ChildController::class, 'show'])->name('children.show');

// API routes for events
Route::get('events', [\App\Http\Controllers\Api\EventController::class, 'index'])->name('events.index');
Route::get('events/{event}', [\App\Http\Controllers\Api\EventController::class, 'show'])->name('events.show');

// API routes for failed-jobs
Route::get('failed-jobs', [\App\Http\Controllers\Api\FailedJobController::class, 'index'])->name('failed-jobs.index');
Route::get('failed-jobs/{failed_job}', [\App\Http\Controllers\Api\FailedJobController::class, 'show'])->name('failed-jobs.show');

// API routes for families
Route::get('families', [\App\Http\Controllers\Api\FamilyController::class, 'index'])->name('families.index');
Route::get('families/{family}', [\App\Http\Controllers\Api\FamilyController::class, 'show'])->name('families.show');
Route::apiResource('families', \App\Http\Controllers\Api\FamilyController::class);

// API routes for family-links
Route::get('family-links', [\App\Http\Controllers\Api\FamilyLinkController::class, 'index'])->name('family-links.index');
Route::get('family-links/{family_link}', [\App\Http\Controllers\Api\FamilyLinkController::class, 'show'])->name('family-links.show');

// API routes for jobs
Route::get('jobs', [\App\Http\Controllers\Api\JobController::class, 'index'])->name('jobs.index');
Route::get('jobs/{job}', [\App\Http\Controllers\Api\JobController::class, 'show'])->name('jobs.show');

// API routes for migrations
Route::get('migrations', [\App\Http\Controllers\Api\MigrationController::class, 'index'])->name('migrations.index');
Route::get('migrations/{migration}', [\App\Http\Controllers\Api\MigrationController::class, 'show'])->name('migrations.show');

// API routes for password-reset-tokens
Route::get('password-reset-tokens', [\App\Http\Controllers\Api\PasswordResetTokenController::class, 'index'])->name('password-reset-tokens.index');
Route::get('password-reset-tokens/{password_reset_token}', [\App\Http\Controllers\Api\PasswordResetTokenController::class, 'show'])->name('password-reset-tokens.show');

// API routes for personal-access-tokens
Route::get('personal-access-tokens', [\App\Http\Controllers\Api\PersonalAccessTokenController::class, 'index'])->name('personal-access-tokens.index');
Route::get('personal-access-tokens/{personal_access_token}', [\App\Http\Controllers\Api\PersonalAccessTokenController::class, 'show'])->name('personal-access-tokens.show');

// API routes for post-tags
Route::get('post-tags', [\App\Http\Controllers\Api\PostTagController::class, 'index'])->name('post-tags.index');
Route::get('post-tags/{post_tag}', [\App\Http\Controllers\Api\PostTagController::class, 'show'])->name('post-tags.show');

// API routes for posts
Route::get('posts', [\App\Http\Controllers\Api\PostController::class, 'index'])->name('posts.index');
Route::get('posts/{post}', [\App\Http\Controllers\Api\PostController::class, 'show'])->name('posts.show');

// API routes for school-family-enrollments
Route::get('school-family-enrollments', [\App\Http\Controllers\Api\SchoolFamilyEnrollmentController::class, 'index'])->name('school-family-enrollments.index');
Route::get('school-family-enrollments/{school_family_enrollment}', [\App\Http\Controllers\Api\SchoolFamilyEnrollmentController::class, 'show'])->name('school-family-enrollments.show');

// API routes for schools
Route::get('schools', [\App\Http\Controllers\Api\SchoolController::class, 'index'])->name('schools.index');
Route::get('schools/{school}', [\App\Http\Controllers\Api\SchoolController::class, 'show'])->name('schools.show');
Route::apiResource('schools', \App\Http\Controllers\Api\SchoolController::class);

// API routes for tags
Route::get('tags', [\App\Http\Controllers\Api\TagController::class, 'index'])->name('tags.index');
Route::get('tags/{tag}', [\App\Http\Controllers\Api\TagController::class, 'show'])->name('tags.show');

// API routes for users
Route::get('users', [\App\Http\Controllers\Api\UserController::class, 'index'])->name('users.index');
Route::get('users/{user}', [\App\Http\Controllers\Api\UserController::class, 'show'])->name('users.show');

Route::get('location-countries', [\App\Http\Controllers\Api\LocationCountryController::class, 'index'])->name('location-countries.index');
Route::get('location-countries/{location_country}', [\App\Http\Controllers\Api\LocationCountryController::class, 'show'])->name('location-countries.show');

Route::get('location-states', [\App\Http\Controllers\Api\LocationStateController::class, 'index'])->name('location-states.index');
Route::get('location-states/{location_state}', [\App\Http\Controllers\Api\LocationStateController::class, 'show'])->name('location-states.show');

Route::get('location-substates', [\App\Http\Controllers\Api\LocationSubstateController::class, 'index'])->name('location-substates.index');
Route::get('location-substates/{location_substate}', [\App\Http\Controllers\Api\LocationSubstateController::class, 'show'])->name('location-substates.show');

Route::get('location-towns', [\App\Http\Controllers\Api\LocationTownController::class, 'index'])->name('location-towns.index');
Route::get('location-towns/{location_town}', [\App\Http\Controllers\Api\LocationTownController::class, 'show'])->name('location-towns.show');

Route::get('location-suburbs', [\App\Http\Controllers\Api\LocationSuburbController::class, 'index'])->name('location-suburbs.index');
Route::get('location-suburbs/{location_suburb}', [\App\Http\Controllers\Api\LocationSuburbController::class, 'show'])->name('location-suburbs.show');

Route::get('private-events', [\App\Http\Controllers\Api\PrivateEventController::class, 'index'])->name('private-events.index');
Route::get('private-events/{private_event}', [\App\Http\Controllers\Api\PrivateEventController::class, 'show'])->name('private-events.show');
