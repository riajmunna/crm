<?php

namespace App\Providers;

use App\Models\User;
use App\Models\UserSession;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\Actions\Jetstream\DeleteUser;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
//        Custom Code
        $user = User::where('email', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {

            $user->update([
                'user_login' => Carbon::now()->toDateTimeString(),
            ]);

//            $userSession = new UserSession();
//            $userSession->user_id = $user->id;
//            $userSession->user_login = Carbon::now()->toDateTimeString();
//            $userSession->save();
            $userSession = new UserSession();
            $userSession->insert([
                'user_id' => $user->id,
                'user_login' => Carbon::now()->toDateTimeString(),
            ]);
        }
//        / Custom Code


        $this->configurePermissions();

        Jetstream::deleteUsersUsing(DeleteUser::class);
    }

    /**
     * Configure the permissions that are available within the application.
     *
     * @return void
     */
    protected function configurePermissions()
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::permissions([
            'create',
            'read',
            'update',
            'delete',
        ]);
    }
}
