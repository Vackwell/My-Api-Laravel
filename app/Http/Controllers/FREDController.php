<?php

namespace App\Http\Controllers;

use App\Models\Fred;
use Illuminate\Http\Request;

class FREDController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $data = json_decode(file_get_contents(public_path('csvjson.json')), true);
        foreach ($data as $entry) {
            Fred::create([
                'ID' => $entry['id'],
                'Commande' => $entry['Order'],
                'Entry_type' => $entry['Entry Type'],
                'Visibility' => $entry['Visibility'],
                'Categories' => $entry['Categories'],
                'Family_Name' => $entry['Family Name'],
                'Honorific_Prefix' => $entry['Honorific Prefix'],
                'First_Name' => $entry['FirstName'],
                'Middle_Name' => $entry['Middle Name'],
                'Last_Name' => $entry['LastName'],
                'Honorific_Suffix' => $entry['Honorific Suffix'],
                'Title' => $entry['Title'],
                'Organization' => $entry['Organization'],
                'Department' => $entry['Department'],
                'Contact_First_Name' => $entry['Contact FirstName'],
                'Contact_Last_Name' => $entry['Contact LastName'],
                'Cabinet_Address_One' => $entry['CabinetAddressLineOne'],
                'Cabinet_Address_Two' => $entry['Cabinet Address | Line Two'],
                'Cabinet_Address_Three' => $entry['Cabinet Address | Line Three'],
                'Cabinet_Address_Four' => $entry['Cabinet Address | Line Four'],
                'Cabinet_Address_District' => $entry['Cabinet Address | District'],
                'Cabinet_Address_County' => $entry['Cabinet Address | County'],
                'Cabinet_Address_City' => $entry['CabinetAddressCity'],
                'Cabinet_Address_State' => $entry['Cabinet Address | State'],
                'Cabinet_Address_Zipcode' => $entry['CabinetAddressZipcode'],
                'Cabinet_Address_Country' => $entry['CabinetAddressCountry'],
                'Cabinet_Address_Latitude' => $entry['CabinetAddressLatitude'],
                'Cabinet_Address_Longitude' => $entry['CabinetAddressLongitude'],
                'Cabinet_Address_Visibility' => $entry['Cabinet Address | Visibility'],
                'Phone_Number' => $entry['PhoneNumber'],
                'Phone_Visibility' => $entry['Phone | Téléphone mobile | Visibility'],
                'Phone_Pro_Number' => $entry['Phone | Téléphone professionnel | Number'],
                'Phone_Pro_Visibility' => $entry['Phone | Téléphone professionnel | Visibility'],
                'Email_Pro_Address' => $entry['EmailAddress'],
                'Email_Pro_Visibility' => $entry['Email | Courriel professionnel | Visibility'],
                'Social_Url' => $entry['Social Url'],
                'Social_Visibility' => $entry['Social Visibility'],
                'Im_Uid' => $entry['Im Uid'],
                'Im_Visibility' => $entry['Im Visibility'],
                'Links_Url' => $entry['Links Url'],
                'Links_Title' => $entry['Links Title'],
                'Links_Visibility' => $entry['Links Visibility'],
                'Dates_Date' => $entry['Dates Date'],
                'Dates_Visibility' => $entry['Dates Visibility'],
                'Biography' => $entry['Biography'],
                'Notes' => $entry['Notes'],
                'Photo_URL' => $entry['PhotoURL'],
                'Logo_URL' => $entry['Logo URL'],
            ]);
        }
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $blog = Fred::create();
        return [
            "status" => 1,
            "data" => $blog
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fred  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Fred $blog)
    {
        return [
            "status" => 1,
            "data" =>$blog
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fred  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Fred $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fred  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fred $blog)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $blog->update($request->all());

        return [
            "status" => 1,
            "data" => $blog,
            "msg" => "Fred updated successfully"
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fred  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fred $blog)
    {
        $blog->delete();
        return [
            "status" => 1,
            "data" => $blog,
            "msg" => "Fred deleted successfully"
        ];
    }
}