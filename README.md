<h4>Mail Notifications In Laravel</h4>
1) Create a Controller and Set Route for that controller<br/>
2) Create Notification via-- <br/>
<code>
     php artisan make:notification WelcomeNotification 
</code>
<br/>
3) use Notification Facades and WelcomeNotification in the controller and see in **App\Notifications\WelcomeNotification**-- <br/>
<code>
        use App\Notifications\WelcomeNotification;
        use Illuminate\Support\Facades\Notification;
</code>
<br/>
4) and also put following into the controller-- <br/>
<code>
    Notification::send($user, new WelcomeNotification($post));
</code>
<br/>
5) In the WelcomeNotification-->
<br/>
<code>
       public $post;

    /**
     * Create a new notification instance.
     */
    public function __construct($post)
    {
        $this->post = $post;
    }
</code>
<br/>
6) Use https://mailtrap.io/ SMTP for sending mails<br/>
7) For Queue now create table via following command--<br/>
<code>
    php artisan queue:table
</code>
<br/>
8) Implements the WelcomeNotification class-- <br/>
<code>
    class WelcomeNotification extends Notification implements ShouldQueue
</code>
<br/>
9) For run queue use the following command--> <br/>
<code>
    php artisan queue:listen
</code>
