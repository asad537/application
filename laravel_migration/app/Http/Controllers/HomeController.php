<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteSetting;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\Blog;
use App\Models\HomeSetting;
use App\Models\StaticPage;
use App\Models\ServicePage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    protected $site_settings;

    public function __construct()
    {
        $this->site_settings = SiteSetting::find(1);
    }

    public function index()
    {
        $data["site"] = $this->site_settings;
        $data["banners"] = Slider::where('status', 1)->limit(100)->get();
        $data["testimonials"] = Testimonial::where('display', 1)->limit(3)->get();
        $data['recent_blogs'] = Blog::where('display', '1')->orderBy('date', 'DESC')->limit(6)->get();
        $data['home'] = HomeSetting::first();

        $data["meta_title"] = $data['site']->meta_title;
        $data["meta_keywords"] = $data['site']->meta_keywords;
        $data["meta_descr"] = $data['site']->meta_descr;

        return view('home', $data);
    }

    public function blog(Request $request)
    {
        $query = Blog::where('display', '1');

        if ($request->has('types') && is_array($request->types)) {
            $query->whereIn('type', $request->types);
        }

        $blogs = $query->orderBy('id', 'DESC')->paginate(3);

        $data['data'] = $blogs;
        $data['recent_blogs'] = Blog::where('display', '1')->orderBy('date', 'DESC')->limit(6)->get();
        $data["site"] = $this->site_settings;
        
        $data['meta_title'] = 'Blog: Latest News of AmdSol';
        $data['meta_keywords'] = 'Blog: Latest News of AmdSol';
        $data['meta_descr'] = 'We as AMDSol are considered one of the most prestigious medical billing companies in the city. With our new reserves and strategies, we offer the best of all EHR, 24/7 patient live support with 32 specialties';

        return view('blogs', $data);
    }

    public function blog_post($seokey)
    {
        $blog = Blog::where('seokey', $seokey)->firstOrFail();
        
        $data['data'] = $blog;
        $data['recent_blogs'] = Blog::where('display', '1')->orderBy('date', 'DESC')->limit(6)->get();
        $data['site'] = $this->site_settings;

        $data['meta_title'] = $blog->meta_title . ' | FCP Medical';
        $data['meta_keywords'] = $blog->meta_keywords;
        $data['meta_descr'] = $blog->meta_description;

        return view('blog_post', $data);
    }

    public function check_page($seokey)
    {
        $static_page = StaticPage::where('seokey', $seokey)->first();
        if ($static_page) {
            return $this->view_static_page(request(), $static_page);
        }

        $service = ServicePage::where('seokey', $seokey)->first();
        if ($service) {
            return $this->services_page(request(), $seokey);
        }

        abort(404);
    }

    protected function view_static_page(Request $request, $page_data)
    {
        if ($request->isMethod('post')) {
            $this->submit_registration_form($request->all());
            return redirect()->back()->with('success', 'Your message is successfully sent. We will get back to you very soon!');
        }

        $data['data'] = $page_data;
        $data['meta_title'] = $page_data->meta_title;
        $data['meta_keywords'] = $page_data->meta_keywords;
        $data['meta_descr'] = $page_data->meta_description;
        $data["site"] = $this->site_settings;

        return view('static_page', $data);
    }

    public function services_page(Request $request, $seokey)
    {
        $service = ServicePage::where('seokey', $seokey)->firstOrFail();
        
        if ($request->isMethod('post')) {
            $this->submit_registration_form($request->all());
            return redirect()->back()->with('success', 'Your message is successfully sent. We will get back to you very soon!');
        }

        $data['data'] = $service;
        $data['meta_title'] = $service->meta_title;
        $data['meta_keywords'] = $service->meta_keywords;
        $data['meta_descr'] = $service->meta_description;
        $data["site"] = $this->site_settings;

        return view('services_page', $data);
    }

    public function content_page($seokey)
    {
        $seokey = str_replace(".php", "", $seokey);
        $page = StaticPage::where('seokey', $seokey)->firstOrFail();

        $data["data"] = $page;
        $data["meta_title"] = $page->meta_title;
        $data["meta_keywords"] = $page->meta_keywords;
        $data["meta_descr"] = $page->meta_description;
        $data["site"] = $this->site_settings;

        return view('static_page', $data);
    }

    public function sitemap()
    {
        $blogs = Blog::where('display', '1')->get();
        $services = ServicePage::where('display', '1')->get();
        $static = StaticPage::all();

        return response()->view('sitemap', compact('blogs', 'services', 'static'))->header('Content-Type', 'text/xml');
    }

    public function contact(Request $request)
    {
        if ($request->isMethod('post')) {
            // Implement contact form logic here
            // In CI it was: submit_contact_form($form);
            $this->submit_contact_form($request->all());
            return redirect('contact-us.php')->with('green_msg', 'We Have Received Your Message Will Respond You Soon.');
        }

        $data["meta_title"] = "Contact Us | AMD SOL";
        $data["meta_keywords"] = "Contact Us | AMD SOL";
        $data["meta_descr"] = "Contact Us | AMD SOL";
        $data["site"] = $this->site_settings;

        return view('contact', $data);
    }

    protected function submit_contact_form($form)
    {
        // Simple port of the helper function
        $name = $form['name'] ?? '';
        $email = $form['email'] ?? '';
        $subject = $form['subject'] ?? '';
        $phone = $form['phone'] ?? '';
        $comments = $form['comments'] ?? '';

        $messageText = "$name From Contact Us <br><br>Name  : $name<br>Phone : $phone<br>Subject : $subject<br>Email : $email<br>Message : $comments";
        
        Mail::html($messageText, function ($message) use ($name, $email) {
            $message->to('info@amdsol.com')
                    ->subject("Contact Us From $name - AMD SOL")
                    ->from($email, $name);
        });
    }

    protected function submit_registration_form($form)
    {
        $name = $form['name'] ?? '';
        $email = $form['email'] ?? '';
        $phone = $form['phone'] ?? '';
        $company = $form['company'] ?? '';
        $comments = $form['message'] ?? '';

        $messageText = "<h4>Name: <b>$name</b></h4><br>" .
                       "<h4>Phone: <b>$phone</b></h4><br>" .
                       "<h4>Email: <b>$email</b></h4><br>" .
                       "<h4>Company: <b>$company</b></h4><br>" .
                       "<p>Message: $comments</p>";
        
        Mail::html($messageText, function ($message) use ($name, $email) {
            $message->to('info@amdsol.com')
                    ->subject("New Registration/Message from $name - AMD SOL")
                    ->from($email, $name);
        });
    }
}
