<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Backend extends Controller
{
    /*
        Backend Menü Items
        * * * * * * * * * * *
        - my Profile
          - Basic Credentials and Data
          - Mail setup, propably get the Avatar out of gravatar.
          - Logs

        - My Business
          - List all my Businesses
          - Create new Business Location
            - Title / Name, small description
            - Google Maps Location, street, post code, city
            - Connection Data, phone, tel,


        - My Service
          - List all avaible Services
          - Edit all Services sep.
          - Create new Services
            - Title, Description, Price, active

        - My Calendar
          - See registered applications
          - grand / revoke a termin, send user a notification
          - set dailys application limit for registrations


    */

    public function myProfile(Request $r){
        $s = $r->session()->all();

        return view('layouts.pages.myProfile', ['magic'=>$s]);
    }


    /*
        Services over all..,
    */
    public function myService(){
        return view('layouts.pages.myService');
    }

    /*
        Handle your Calendars.
    */
    public function myCalendar(){
        echo "Calendar";
    }

    /*
        List all Business Locations and stuff
    */
    public function myBusiness(){
        echo "Business";
    }

    /*
        Define Method for Location Magic.
    */
    public function myLocation(){
        echo "Locations overall... ";
    }

}
