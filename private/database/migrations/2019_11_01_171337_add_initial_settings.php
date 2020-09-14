<?php

use Illuminate\Database\Migrations\Migration;

class AddInitialSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        setting()->set('title_tr', 'Gener');
        setting()->set('meta_description_tr', 'Gener');

        setting()->set('title_en', 'Gener');
        setting()->set('meta_description_en', 'Gener');

        setting()->set('email', 'info@gener.com.tr');
        setting()->set('phone-1', '+90 322 394 47 25/26'); 
        setting()->set('phone', '+90 530 604 96 96');
        setting()->set('address', "HACI SABANCI ORG. SAN. BÖL.\n23 NİSAN CAD. NO: 8 SARICAM/ADANA");

        setting()->set('social_facebook', 'https://www.facebook.com/genertarimsalmakina/?fref=ts');
        setting()->set('social_instagram', 'https://www.instagram.com/generfrostguard/');

        setting()->set('map_url', 'https://www.google.com/maps/place/Adana+Hac%C4%B1+Sabanc%C4%B1+Organize+Sanayi+B%C3%B6lgesi+B%C3%B6lge+M%C3%BCd%C3%BCrl%C3%BC%C4%9F%C3%BC/@36.9741484,35.590666,17z/data=!3m1!4b1!4m5!3m4!1s0x1528be6278ac6815:0x7e3acd68c0d0c99a!8m2!3d36.9741484!4d35.5928547');

        setting()->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
