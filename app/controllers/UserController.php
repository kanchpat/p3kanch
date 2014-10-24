<?php
class UserController extends BaseController
{

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */
    //This function is used to receive the input from the User screen
    //  Validates that an input is entered and it is numeric using Validator in Laravel
    //  If an Error exists it is redirected to the screen with Errors
    //  if not, Package Faker is used to create the dummy results
    //  The results are then sent back to the screen for viewing
    public function showUser()
    {
        $noOfUsers = Input::get('UserEntry');
        $rules     = array(
            'UserEntry' => 'required|numeric'
        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails())
            return Redirect::to('/user')->withErrors($validator);
        else {
            $dataReturn = '';
            for ($i = 1; $i <= $noOfUsers; $i++) {
                $faker      = faker::create();
                $dataReturn = $dataReturn . $faker->name() . "<br>";
                $address    = Input::get('address');
                if ($address == 1)
                    $dataReturn = $dataReturn . $faker->address() . "<br>";
                $profile = Input::get('Profile');
                if ($profile == 1)
                    $dataReturn = $dataReturn . $faker->text() . "<br>";
                $dataReturn = $dataReturn . "<br>";
            }
            return View::make('/user')->with('dataReturn', $dataReturn);
        }
    }

    // This function is to show the paragraphs based on the number of paragraphs user requested
    //  Validates that an input is entered and it is numeric using Validator in Laravel
    //  If an Error exists it is redirected to the screen with Errors
    //  if not, Package Lorem Ipsum Generator is used to create the dummy results
    //  The results are then sent back to the screen for viewing

    public function showParagraph()
    {
        $noOfParagraphs = Input::get('NoOfParagraphs');
        $rules          = array(
            'NoOfParagraphs' => 'required|numeric'
        );
        $validator      = Validator::make(Input::all(), $rules);
        if ($validator->fails())
            return Redirect::to('/para')->withErrors($validator);

        $generator  = new lorem();
        $paragraphs = $generator->getParagraphs($noOfParagraphs);
        $paragraphs = implode('<p>', $paragraphs);
        return View::make('/para')->with('paragraphs', $paragraphs);
    }

}