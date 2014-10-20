<?php
class UserController extends BaseController {

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

    public function showUser()
    {
        $noOfUsers=Input::get('query');
        $rules=array(
            'query'    => 'required',
        );
        $validator = Validator::make(Input::all(),$rules);
        if($validator->fails())
            return Redirect::to('/user')->withErrors($validator);
        else
        {
            $dataReturn='';
            for($i=1;$i<=$noOfUsers;$i++)
            {
                $faker=faker::create();
                $dataReturn=$dataReturn.$faker->name()."<br>";
                $address=Input::get('address');
                if ($address == 1)
                    $dataReturn=$dataReturn.$faker->address()."<br>";
                $profile=Input::get('Profile');
                if ($profile == 1)
                    $dataReturn=$dataReturn.$faker->text()."<br>";
            }
            return View::make('/user')->with('dataReturn',$dataReturn);
        }
    }

    public function showParagraph()
    {
        $noOfParagraphs=Input::get('query');
        $rules=array(
            'query'    => 'required',
        );
        $validator = Validator::make(Input::all(),$rules);
        if($validator->fails())
            return Redirect::to('/para')->withErrors($validator);

        $generator = new lorem();
        $paragraphs = $generator->getParagraphs($noOfParagraphs);
        $paragraphs = implode('<p>', $paragraphs);
        return View::make('/para')->with('paragraphs',$paragraphs);
    }

}