z<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFredTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('freds', function (Blueprint $table) {
            $table->integer('ID');
            $table->integer('Commande')->nullable();
            $table->string('Entry_type',100)->nullable();
            $table->string('Visibility',100)->nullable();
            $table->string('Categories',200)->nullable();
            $table->string('Family_Name',100)->nullable();
            $table->string('Honorific_Prefix',100)->nullable();
            $table->string('First_Name',100)->nullable();
            $table->string('Middle_Name',100)->nullable();
            $table->string('Last_Name',100)->nullable();
            $table->string('Honorific_Suffix',100)->nullable();
            $table->string('Title',100)->nullable();
            $table->string('Organization',100)->nullable();
            $table->string('Department',100)->nullable();
            $table->string('Contact_First_Name',100)->nullable();
            $table->string('Contact_Last_Name',100)->nullable();
            $table->string('Cabinet Address_One',100)->nullable();
            $table->string('Cabinet Address_Two',100)->nullable();
            $table->string('Cabinet_Address_Three',100)->nullable();
            $table->string('Cabinet_Address_Four',100)->nullable();
            $table->string('Cabinet_Address_District',100)->nullable();
            $table->string('Cabinet_Address_County',100)->nullable();
            $table->string('Cabinet_Address_City',100)->nullable();
            $table->string('Cabinet_Address_State',100)->nullable();
            $table->string('Cabinet_Address_Zipcode',100)->nullable();
            $table->float('Cabinet_Address_Latitude')->nullable();
            $table->float('Cabinet_Address_Longitude')->nullable();
            $table->string('Cabinet_Address_Visibility',100)->nullable();
            $table->string('Phone_Number',100)->nullable();
            $table->string('Phone_Visibility',100)->nullable();
            $table->string('Phone_Pro_Number',100)->nullable();
            $table->string('Phone_Pro_Visibility',100)->nullable();
            $table->string('Email_Pro_Address',100)->nullable();
            $table->string('Email_Pro_Visibility',100)->nullable();
            $table->string('Social_Url',200)->nullable();
            $table->string('Social_Visibility',200)->nullable();
            $table->string('Im_Uid',200)->nullable();
            $table->string('Im_Visibility',200)->nullable();
            $table->string('Links_Url',200)->nullable();
            $table->string('Links_Title',200)->nullable();
            $table->string('Links_Visibility',200)->nullable();
            $table->string('Dates_Date',100)->nullable();
            $table->string('Dates_Visibility',100)->nullable();
            $table->string('Biography',300)->nullable();
            $table->string('Notes',300)->nullable();
            $table->string('Photo_URL',200)->nullable();
            $table->string('Logo_URL',200)->nullable();
            $table->timestamps();
        });
        
        // $json = Storage::get('csvjson.json');
        // $data = json_decode($json, true);

        // foreach ($data as $personne) {
        //     DB::table('praticiens')->insert([
        //         'Commande' => $personne['Order'],
        //         'Entry_type' => $personne['Entry Type'],
        //         'Visibility' => $personne['Visibility'],
        //         'Categories' => $personne['Categories'],
        //         'Family_Name' => $personne['Family Name'], 
        //         'Honorific_Prefix' => $personne['Honorific Prefix'], 
        //         'First_Name' => $personne['First Name'], 
        //         'Middle_Name' => $personne['Middle Name'], 
        //         'Last_Name' => $personne['Last Name'], 
        //         'Honorific_Suffix' => $personne['Honorific Suffix'], 
        //         'Title' => $personne['Title'], 
        //         'Organization' => $personne['Organization'], 
        //         'Department' => $personne['Department'], 
        //         'Contact_First_Name' => $personne['Contact First Name'], 
        //         'Contact_Last_Name' => $personne['Contact Last Name'], 
        //         'Cabinet_Address_One' => $personne['Cabinet Address | Line One'], 
        //         'Cabinet_Address_Two' => $personne['Cabinet Address | Line Two'],  // j'ai une erreur ici jsp pk
        //         'Cabinet_Address_Three' => $personne['Cabinet Address | Line Three'], 
        //         'Cabinet_Address_Four' => $personne['Cabinet Address | Line Four'], 
        //         'Cabinet_Address_District' => $personne['Cabinet Address | District'], 
        //         'Cabinet_Address_County' => $personne['Cabinet Address | County'], 
        //         'Cabinet_Address_City' => $personne['Cabinet Address | City'], 
        //         'Cabinet_Address_State' => $personne['Cabinet Address | State'], 
        //         'Cabinet_Address_Zipcode' => $personne['Cabinet Address | Zipcode'], 
        //         'Cabinet_Address_Country' => $personne['Cabinet Address | Country'], 
        //         'Cabinet_Address_Latitude' => $personne['Cabinet Address | Latitude'], 
        //         'Cabinet_Address_Longitude' => $personne['Cabinet Address | Longitude'], 
        //         'Cabinet_Address_Visibility' => $personne['Cabinet Address | Visibility'], 
        //         'Phone_Number' => $personne['Phone | Téléphone mobile | Number'], 
        //         'Phone_Visibility' => $personne['Phone | Téléphone mobile | Visibility'], 
        //         'Phone_Pro_Number' => $personne['Phone | Téléphone professionnel | Number'], 
        //         'Phone_Pro_Visibility' => $personne['Phone | Téléphone professionnel | Visibility'], 
        //         'Email_Pro_Address' => $personne['Email | Courriel professionnel | Address'], 
        //         'Email_Pro_Visibility' => $personne['Email | Courriel professionnel | Visibility'], 
        //         'Social_Url' => $personne['Social Url'], 
        //         'Socia_Visibility' => $personne['Social Visibility'], 
        //         'Im_Uid' => $personne['Im Uid'], 
        //         'Im_Visibility' => $personne['Im Visibility'], 
        //         'Links_Url' => $personne['Links Url'], 
        //         'Links_Title' => $personne['Links Title'], 
        //         'Links_Visibility' => $personne['Links Visibility'], 
        //         'Dates_Date' => $personne['Dates Date'], 
        //         'Dates_Visibility' => $personne['Dates Visibility'], 
        //         'Biography' => $personne['Biography'], 
        //         'Notes' => $personne['Notes'], 
        //         'Photo_URL' => $personne['Photo URL'], 
        //         'Logo_URL' => $personne['Logo URL']
        //     ]);
        // }
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('freds');
    }
};

?>