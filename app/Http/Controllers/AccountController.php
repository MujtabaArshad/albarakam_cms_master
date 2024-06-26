<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function viewAllAccounts()
    {
        return view('website/personal/the-accounts/view-all-account');
    }

    public function currentAccount()
    {
        return view('website/personal/the-accounts.current-account');
    }
    public function SavingAccountwithprofit()
    {
        return view('website/personal/the-accounts.saving-account-with-profit');
    }
    public function SavingAccount()
    {
        return view('website/personal/the-accounts.saving-account');
    }
    public function albaraka_distinguish()
    {
        return view('website/personal/the-accounts.albaraka-distinguish-account');
    } 
    public function Saving_Account_withprofile()
    {
        return view('website/personal/the-accounts.saving-account-with-profile');
    } 
   
}
