<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use app\Models\User;

class AccountController extends Controller
{

    public function index(Request $request): View
    {
        return view('account.index');
    }


    public function settings(Request $request){

        if($request->method () == 'POST'){
            $name = $request->get('name');
            $email = $request->get('email');
            $phone = $request->get('phone');

            $user = Auth::user();
            $user->name = $name;
            $user->email = $email;
            $user->phone = $phone;
            $user->save();


        }

        return view('account.settings');
    }
    
    public function changePassword(Request $request)
    {

        // Validate the request data
        $validator = Validator::make($request->all(), [
            'user.user_password' => 'required|string|min:8',
            'user.user_password_new' => 'required|string|min:8|confirmed',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Get the currently authenticated user
        $user = Auth::user();
    
        // Check if the current password matches
        if (!Hash::check($request->input('user.user_password'), $user->password)) {
            return redirect()->back()->with('error', 'Current password is incorrect.');
        }
    
        // Update the user's password
        $user->password = Hash::make($request->input('user.user_password_new'));
        $user->save();
    
        return redirect()->back()->with('success', 'Password changed successfully.');
    }

    public function updateUserAvatar(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $profilePicture = $request->file('avatar');

        $filename = time() . '_' . $profilePicture->getClientOriginalName();

        $profilePicture->storeAs('/images/avatar', $filename, ['disk' => 'public']);

        $user = auth()->user();
        $user->avatar = '/storage/images/avatar/' . $filename;
        $user->save();

        return redirect('/account');
    }

    

    public function privacy(Request $request){
        return view('account.privacy');
    }

    public function setVisibility(Request $request){

        $user_id = $request->get('user_id');
        $visibility = $request->get('visibility');

        $user = User::findOrFail($user_id);
        $user->visibility = $visibility;
        $user->save();

        return redirect()->back()->with('success','Successfully changed profile visibility');

    }

    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
