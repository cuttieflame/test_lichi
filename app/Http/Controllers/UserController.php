<?php

namespace App\Http\Controllers;

use App\Contracts\UserInterface;
use App\DataTransferObjects\UserData;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Services\User\UserServiceInterface;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Spatie\DataTransferObject\Exceptions\UnknownProperties;


/**
 *
 */
class UserController extends Controller implements UserInterface
{
    /**
     * @param UserServiceInterface $userService
     */
    private UserServiceInterface $userService;

    /**
     * @param UserServiceInterface $userService
     * @return void
     */
    public function __constructor(UserServiceInterface $userService) {
        $this->userService = $userService;
    }

    /**
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        return view('users.index');
    }

    /**
     * @param UserRequest $request
     * @return RedirectResponse
     * @throws UnknownProperties
     */
    public function create(UserRequest $request): RedirectResponse
    {
        $validatedData = UserData::fromRequest($request);
        if($request->password == $request->confirm_password) {
            User::select(['id', 'name', 'email'])->take(3)->get()->each(function ($elem) use ($validatedData) {
                if ($elem->email == $validatedData->email) {
                    $this->userService->storageTxtUploadUserInformation("public/$validatedData->email.txt",$this->userService->makeUserArrayForTextUpload((array)$validatedData));
                }
            });
        }
        return redirect()->back()->with(['status'=>'create']);
    }

}
