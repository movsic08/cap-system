<?php

namespace App\Http\Controllers;

use App\Models\BaptismalSchedule;
use App\Models\BlessingSchedule;
use App\Models\BurialSchedule;
use App\Models\ConfirmationSchedule;
use App\Models\Gallery;
use App\Models\WeddingSchedules;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $faqs = [
            [
                "question" => "Can I get my baptismal certificate in another church?",
                "answer" => "No, because churches do not exchange information or have a centralized database, you would need to obtain the Baptismal Certificate from the church where it was done.",
            ],
            [
                "question" => "How much is the fee for requesting a certificate?",
                "answer" => "One Hundred Pesos",
            ],
            [
                "question" => "How do I request a burial mass?",
                "answer" => "You can make an appointment by calling our local parish office.",
            ],
            [
                "question" => "Is there a reservation fee for an event?",
                "answer" => "Yes, but you will be paying it at the Parish Office.",
            ],
            [
                "question" => "How far in advance should I book my event?",
                "answer" => "It is recommended to book your event one month before your desired that to secure your preferred date. You can also contact the parish church or message them.",
            ],
            [
                "question" => "What type of events can be held on the St. Joseph Cathedral Parish?",
                "answer" => "The St. Joseph Cathedral Parish holds an event, such as baptisms, weddings, confirmations, and other related events in church. And community events and gatherings may be considered.",
            ],
            [
                "question" => "How do I request to schedule an event at our parish or church? ",
                "answer" => "To have a schedule event, you may contact our email address st.josephcathedralparish@gmail.com or visit our website for an event scheduling request form.",
            ],
            [
                "question" => "What is the process for canceling or rescheduling an event that has already been scheduled?",
                "answer" => "To cancel or reschedule an event, we have a cancel button where you can cancel your schedule. Also, to notify the staff members that you have cancelled your schedule.",
            ],
            [
                "question" => "How can I access the parish calendar to see the available dates and events that have already been scheduled? ",
                "answer" => "Our parish calendar is available on our website where you can see the available dates and events.",
            ],
            [
                "question" => "How will clients know if the appointment is scheduled?",
                "answer" => "Once a client schedules an appointment, they will land on a booking confirmation page that provides all the details of the booking, they will also receive email after the staff member approves their appointment.",
            ],
            [
                "question" => "Can a client get to see other booking details or information?",
                "answer" => "No, the online booking system should protect and respect client’s privacy. Once the client has booked a time, they will only be able to access your appointment page. They won't be able to see other clients’ booking information or details.",
            ],
            [
                "question" => "What is the next step after booking an event?",
                "answer" => "The admin or staff members will review your application for them to approve, reject or reschedule your applications.",
            ],
        ];

        return view('landingpage.index', compact('faqs'));
    }

    public function scheduleEvent()
    {
        return view('landingpage.schedule-event');
    }

    public function baptism()
    {
        $events = [];

        $appointments = BaptismalSchedule::where('approve', 1)->get();

        foreach ($appointments as $appointment) {
            $events[] = [
                'title' => 'Baptism' . ' ('.$appointment->first_name.')',
                'date' => $appointment->desired_date,
                'time' => $appointment->desired_time,
            ];
        }

        return view('landingpage.schedule-events.baptism.schedule-form', compact('events'));
    }

    public function wedding()
    {
        $events = [];

        $appointments = WeddingSchedules::where('approve', 1)->get();

        foreach ($appointments as $appointment) {
            $events[] = [
                'title' => 'Wedding' . ' ('.$appointment->grooms_name.')',
                'date' => $appointment->desired_date,
                'time' => $appointment->desired_time,
            ];
        }

        return view('landingpage.schedule-events.wedding.schedule-form', compact('events'));
    }

    public function burial()
    {
        $events = [];

        $appointments = BurialSchedule::where('approve', 1)->get();

        foreach ($appointments as $appointment) {
            $events[] = [
                'title' => 'Burial' . ' ('.$appointment->deceased_name.')',
                'start' => $appointment->desired_start_date_time,
                'end' => $appointment->desired_end_date_time,
            ];
        }

        return view('landingpage.schedule-events.burial.schedule-form', compact('events'));
    }

    public function blessing()
    {
        $events = [];

        $appointments = BlessingSchedule::where('approve', 1)->get();

        foreach ($appointments as $appointment) {
            $events[] = [
                'title' => 'Blessing' . ' ('.$appointment->first_name.')',
                'start' => $appointment->desired_start_date_time,
                'end' => $appointment->desired_end_date_time,
            ];
        }

        return view('landingpage.schedule-events.blessing.schedule-form', compact('events'));
    }

    public function confirmation()
    {
        $events = [];

        $appointments = ConfirmationSchedule::where('approve', 1)->get();

        foreach ($appointments as $appointment) {
            $events[] = [
                'title' => 'Confirmation' . ' ('.$appointment->first_name.')',
                'start' => $appointment->desired_start_date_time,
                'end' => $appointment->desired_end_date_time,
            ];
        }

        return view('landingpage.schedule-events.confirmation.schedule-form', compact('events'));
    }

    public function about()
    {
        return view('landingpage.about.index');
    }

    public function requestCertificate()
    {
        return view('landingpage.request-certificate.index');
    }

    public function gallery()
    {
        $images = Gallery::all();
        return view('landingpage.gallery.index', compact('images'));
    }

    public function schedules() {
        return view('landingpage.schedules.index');
    }
}
