<?php

namespace App\Providers;
use App\Student, App\Course, App\Department;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        // $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
        //     // $event->menu->add(trans('menu.pages'));

        //     // $items = Student::all()->map(function (Student $student) {
        //     //     return [
        //     //         'text' => $student['first_name'],
        //     //         'url' => route('students.index')
        //     //     ];
        //     // });

        //     $items[] = [
        //         'text'  => 'Students',
        //         'icon' => 'users',
        //         'url' => route('students.index'),
        //         'label' => Student::count()
        //     ];

        //     $items[] = [
        //         'text'  => 'Courses',
        //         'icon' => 'book',
        //         'url' => route('courses.index'),
        //         'label' => Course::count()
        //     ];

        //     $items[] = [
        //         'text'  => 'Departments',
        //         'icon' => 'building',
        //         'url' => route('departments.index'),
        //         'label' => Department::count()
        //     ];

        //     $event->menu->add(...$items);
        // });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
