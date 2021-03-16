<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints(); // For Forgen Key Checks Disable
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key')->unique()->default(1);
            $table->longtext('value')->default("olashValue");
            $table->string('sitename');                       // Txt For Site name
            $table->string('logo')->nullable();               //365*81 logo
            $table->string('bannerimage')->nullable();              //1920*815 365*81 banner bannersliderimage
            $table->longtext('bannerredtxt1')->nullable();              // First Text For Banner
            $table->longtext('bannerbluetxt')->nullable();           // Span for Text slider
            $table->longtext('firsttitletxt')->nullable();              // Second text for Text first rectangle
            $table->longtext('firstdesctxt')->nullable();              // Paragraph text for Text desc
            $table->longtext('secondtitletxt')->nullable();              // Second text for Text first rectangle
            $table->longtext('seconddesctxt')->nullable();              // Paragraph text for Text desc
            $table->longtext('thirdtitletxt')->nullable();              // Second text for Text first rectangle
            $table->longtext('thirddesctxt')->nullable();              // Paragraph text for Text desc
            // ABOUT
            $table->string('banneraboutimage')->nullable();              // Image for about us 555*493
            $table->longtext('aboutbluetxt')->nullable();                 // red txt in about us area
            $table->longtext('aboutblacktxt1')->nullable();                     // first Paragraph Text for Testimonials
            $table->longtext('aboutblacktxt2')->nullable();                // Second Paragraph Text for Testimonials
            $table->longtext('testcentertxt2')->nullable();               // Footer center text under yellow Text for Testimonials
            // Contact us
            $table->string('bannercontactimage')->nullable();              // Image for contact us 1920*551
            $table->longtext('contactheadertxt')->nullable();                 // header txt in contact us area
            $table->longtext('contactparatxt')->nullable();                 // Paragraph txt in contact us area
            $table->longtext('contactdesctxt')->nullable();                 // desc txt in contact us area
            $table->longtext('contactsqaure1txt')->nullable();                 // first square txt in contact
            $table->longtext('contactsqauretxt2')->nullable();                 // Second square txt in contact
            $table->longtext('contactsqauretxt3')->nullable();                 // Third square txt in contact
            $table->longtext('contactsqauretxt4')->nullable();                 // Fourth square txt in contact
            // our team (details in about us)
            $table->longtext('teamspantxt')->nullable();                 // text span for team span
            $table->string('team1img')->nullable();                    // Image  for first person in team
            $table->string('team2img')->nullable();                    // Image  for Second person in team
            $table->string('team3img')->nullable();                    // Image  for Third person in team
            $table->string('team4img')->nullable();                    // Image  for Fourth person in team
            $table->string('team1name')->nullable();                 // Name for first person in our team
            $table->string('team2name')->nullable();                 // Name for Second person in our team
            $table->string('team3name')->nullable();                 // Name for Third person in our team
            $table->string('team4name')->nullable();                 // Name for Fourth person in our team
            $table->string('team1role')->nullable();                 // Role for first Person in our team
            $table->string('team2role')->nullable();                 // Role for Second Person in our team
            $table->string('team3role')->nullable();                 // Role for Third Person in our team
            $table->string('team4role')->nullable();                 // Role for Fourth Person in our team
            $table->string('team1fb')->nullable();                   // Facebook  for first person in team
            $table->string('team2fb')->nullable();                   // Facebook  for Second person in team
            $table->string('team3fb')->nullable();                   // Facebook  for Third person in team
            $table->string('team4fb')->nullable();                   // Facebook  for Fourth person in team
            $table->string('team1tw')->nullable();                   // Twitter  for first person in team
            $table->string('team2tw')->nullable();                   // Twitter  for Second person in team
            $table->string('team3tw')->nullable();                   // Twitter  for Third person in team
            $table->string('team4tw')->nullable();                   // Twitter  for Fourth person in team
            $table->string('team1in')->nullable();                   // Insta  for first person in team
            $table->string('team2in')->nullable();                   // Insta  for Second person in team
            $table->string('team3in')->nullable();                   // Insta  for Third person in team
            $table->string('team4in')->nullable();                   // Insta  for Fourth person in team
            // Testimonials شهادات العملاء
            $table->string('client1')->nullable();                   // Testimonial for Client1
            $table->longtext('clientdesc1')->nullable();                   // Desc for Testimonial of Client1
            $table->string('client2')->nullable();                   // Testimonial for Client2
            $table->longtext('clientdesc2')->nullable();                   // Desc for Testimonial of Client2
            $table->string('client3')->nullable();                   // Testimonial for Client3
            $table->longtext('clientdesc3')->nullable();                   // Desc for Testimonial of Client3
            $table->string('client4')->nullable();                   // Testimonial for Client4
            $table->longtext('clientdesc4')->nullable();                   // Desc for Testimonial of Client4
            // Events
            $table->string('event1img')->nullable();                    // Image  for first event 115*92
            $table->string('event2img')->nullable();                    // Image  for first event 115*92
            $table->string('event3img')->nullable();                    // Image  for first event 115*92
            $table->string('event4img')->nullable();                    // Image  for first event 115*92
            $table->string('event5img')->nullable();                    // Image  for first event 115*92
            $table->string('event6img')->nullable();                    // Image  for first event 115*92
            $table->string('event7img')->nullable();                    // Image  for first event 115*92
            //Footer
            $table->longtext('street')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->longtext('opendays')->nullable();                 // txt for open days
            $table->longtext('vacation1')->nullable();               // Txt For vacation1
            $table->longtext('vacation2')->nullable();               // Txt For vacation2

            $table->string('facebook')->nullable();               // Txt For facebook
            $table->string('twitter')->nullable();                // Txt For twitter
            $table->string('youtube')->nullable();               // Txt For youtube
            $table->string('insta')->nullable();                 // Txt For insta
            //CONTACT Page
            $table->string('contactpageimg')->nullable();
            $table->string('contactpagetxtblue')->nullable();
            $table->string('contactpagetxtred')->nullable();
            $table->longtext('contactpagetxtdesc')->nullable();
            //CONTACT2 Page
            $table->string('contact2pageimg')->nullable();
            $table->string('contact2pagetxtblue')->nullable();
            $table->string('contact2pagetxtred')->nullable();
            $table->longtext('contact2pagetxtdesc')->nullable();
            // blogs
            $table->string('blogpageimg')->nullable();
            $table->string('blogpagetxtblue')->nullable();
            $table->longtext('blogpagetxtdesc')->nullable();


            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints(); // For Forgen Key Checks Enable
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
