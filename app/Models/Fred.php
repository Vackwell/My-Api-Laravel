<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fred extends Model
{
    use HasFactory;
    protected $fillable = [
        'ID',
        'Commande',
        'Entry_type',
        'Visibility',
        'Categories',
        'Family_Name',
        'Honorific_Prefix',
        'First_Name',
        'Middle_Name',
        'Last_Name',
        'Honorific_Suffix',
        'Title',
        'Organization',
        'Department',
        'Contact_First_Name',
        'Contact_Last_Name',
        'Cabinet Address_One',
        'Cabinet Address_Two',
        'Cabinet_Address_Three',
        'Cabinet_Address_Four',
        'Cabinet_Address_District',
        'Cabinet_Address_County',
        'Cabinet_Address_City',
        'Cabinet_Address_State',
        'Cabinet_Address_Zipcode',
        'Cabinet_Address_Latitude',
        'Cabinet_Address_Longitude',
        'Cabinet_Address_Visibility',
        'Phone_Number',
        'Phone_Visibility',
        'Phone_Pro_Number',
        'Phone_Pro_Visibility',
        'Email_Pro_Address',
        'Email_Pro_Visibility',
        'Social_Url',
        'Social_Visibility',
        'Im_Uid',
        'Im_Visibility',
        'Links_Url',
        'Links_Title',
        'Links_Visibility',
        'Dates_Date',
        'Dates_Visibility',
        'Biography',
        'Notes',
        'Photo_URL',
        'Logo_URL',
    ];

}