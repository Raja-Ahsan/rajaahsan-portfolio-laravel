<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactFormMail;

class WebController extends Controller
{
    /**
     * Display the index page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Display the web design page.
     *
     * @return \Illuminate\View\View
     */
    public function webDesign()
    {
        return view('webdesign');
    }

    /**
     * Display the UI/UX Designer page.
     *
     * @return \Illuminate\View\View
     */
    public function uiUxDesigner()
    {
        return view('ui-ux-designer');
    }

    /**
     * Display the Terms of Use page.
     *
     * @return \Illuminate\View\View
     */
    public function termsOfUse()
    {
        return view('terms-of-use');
    }

    /**
     * Display the Reality Check Guide project detail page.
     *
     * @return \Illuminate\View\View
     */
    public function realityCheckGuide()
    {
        return view('project.reality-check-guide');
    }

    /**
     * Display the Rent The Stuff project detail page.
     *
     * @return \Illuminate\View\View
     */
    public function rentTheStuff()
    {
        return view('project.rent-the-stuff');
    }

    /**
     * Display the Storie Vault project detail page.
     *
     * @return \Illuminate\View\View
     */
    public function storieVault()
    {
        return view('project.storie-vault');
    }

    /**
     * Display the Pro Contractors Hub project detail page.
     *
     * @return \Illuminate\View\View
     */
    public function proContractorsHub()
    {
        return view('project.pro-contractors-hub');
    }

    /**
     * Display the Cakeit project detail page.
     *
     * @return \Illuminate\View\View
     */
    public function cakeit()
    {
        return view('project.cakeit');
    }

    /**
     * Display the Liming Around The World project detail page.
     *
     * @return \Illuminate\View\View
     */
    public function limingAroundTheWorld()
    {
        return view('project.liming-around-the-world');
    }

    /**
     * Display the One Off Autos project detail page.
     *
     * @return \Illuminate\View\View
     */
    public function oneOffAutos()
    {
        return view('project.one-off-autos');
    }

    /**
     * Handle contact form submission
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function sendContactEmail(Request $request)
    {
        try {
            // Get form data - handle both JSON and form data
            // If JSON is sent, get it from the request body
            if ($request->isJson()) {
                $data = $request->json()->all();
            } else {
                $data = $request->all();
            }
            
            // Extract form fields from Webflow format or regular format
            // Webflow sends data in a 'fields' object, otherwise it's in the root
            $fields = isset($data['fields']) ? $data['fields'] : $data;

            // Extract form fields
            $formFields = [
                'name' => trim($fields['Nom-3'] ?? $fields['name'] ?? ''),
                'company' => trim($fields['Entreprise-2'] ?? $fields['company'] ?? ''),
                'email' => trim($fields['Email-2'] ?? $fields['email'] ?? ''),
                'phone' => trim($fields['T-l-phone-2'] ?? $fields['phone'] ?? ''),
                'message' => trim($fields['Message-2'] ?? $fields['message'] ?? ''),
                'besoin' => trim($fields['Besoin'] ?? $fields['need'] ?? ''),
                'deadline' => trim($fields['Deadline'] ?? $fields['When'] ?? ''),
                'budget' => trim($fields['Budget'] ?? $fields['budget'] ?? ''),
                'discovered' => trim($fields['D-couvert-par'] ?? $fields['discovered'] ?? ''),
            ];

            // Validation rules
            $rules = [
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|max:255',
            ];

            // Custom validation messages
            $messages = [
                'name.required' => 'Name is required',
                'email.required' => 'Email is required',
                'email.email' => 'Invalid email format',
                'phone.required' => 'Phone number is required',
            ];

            // Validate
            $validator = Validator::make($formFields, $rules, $messages);

            if ($validator->fails()) {
                return response()->json([
                    'code' => 400,
                    'message' => implode(', ', $validator->errors()->all()),
                    'success' => false
                ], 400);
            }

            // Get recipient email from environment
            $recipientEmail = env('MAIL_TO_ADDRESS', env('MAIL_FROM_ADDRESS'));

            // Send email
            Mail::to($recipientEmail)->send(new ContactFormMail($formFields));

            // Log successful submission
            Log::info('Contact form submitted successfully', [
                'name' => $formFields['name'],
                'email' => $formFields['email'],
                'phone' => $formFields['phone']
            ]);

            return response()->json([
                'code' => 200,
                'message' => 'Email sent successfully',
                'success' => true
            ]);

        } catch (\Exception $e) {
            // Log the error
            Log::error('Contact form error', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'code' => 500,
                'message' => 'Failed to send email',
                'success' => false,
                'error_details' => config('app.debug') ? $e->getMessage() : null
            ], 500);
        }
    }
}
