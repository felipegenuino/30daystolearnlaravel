 
    $ php artisan tinker 
    App\Models\Job::create(['title'=>'Director', 'salary'=>'$ 50,000']);



    php artisan make:model Post -m -f
    php artisan make:model Employer -m -f
    
    App\Models\User::factory()->create();
    App\Models\User::factory(10)->create();
    App\Models\Job::factory(10)->create();


``
composer require barryvdh/laravel-debugbar --dev
```
