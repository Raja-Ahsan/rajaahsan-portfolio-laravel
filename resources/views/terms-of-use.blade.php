@extends('layouts.master')

@section('title', 'Terms of Use - ' . config('app.name'))

@section('description', 'Terms of Use for Raja Ahsan Portfolio Website. Read our terms and conditions for using our website and services.')

@section('content')
<main class="main">
  <section class="section" style="background-image: url('{{ asset('website/img/banner-terms.png') }}')">
    <div class="container flex-center" style="padding-top: 8em; padding-bottom: 4em;">
      <h1 class="project__title" style="color: #000; font-size: 3.5em; margin-bottom: 0.5em;">Terms of Use</h1>
      <div class="project__role" style="color: #666; font-size: 1em;">Last Updated: {{ date('F j, Y') }}</div>
    </div>
  </section>

  <section class="section" style="padding-top: 2em; padding-bottom: 4em;">
    <div class="container" style="max-width: 900px;">
      <div style="color: #333; line-height: 1.8; font-size: 1.1em;">
        
        <div style="margin-bottom: 2.5em;">
          <h2 style="color: #000; font-size: 1.8em; margin-bottom: 1em; font-weight: 600;">1. Introduction</h2>
          <p style="margin-bottom: 1em;">
            Welcome to Raja Ahsan's Portfolio Website ("we," "our," or "us"). These Terms of Use ("Terms") govern your access to and use of our website located at {{ config('app.url') }} (the "Website"). By accessing or using our Website, you agree to be bound by these Terms. If you disagree with any part of these Terms, you may not access the Website.
          </p>
        </div>

        <div style="margin-bottom: 2.5em;">
          <h2 style="color: #000; font-size: 1.8em; margin-bottom: 1em; font-weight: 600;">2. Acceptance of Terms</h2>
          <p style="margin-bottom: 1em;">
            By accessing and using this Website, you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.
          </p>
        </div>

        <div style="margin-bottom: 2.5em;">
          <h2 style="color: #000; font-size: 1.8em; margin-bottom: 1em; font-weight: 600;">3. Use License</h2>
          <p style="margin-bottom: 1em;">
            Permission is granted to temporarily view the materials on Raja Ahsan's Portfolio Website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:
          </p>
          <ul style="margin-left: 2em; margin-bottom: 1em;">
            <li style="margin-bottom: 0.5em;">Modify or copy the materials</li>
            <li style="margin-bottom: 0.5em;">Use the materials for any commercial purpose, or for any public display (commercial or non-commercial)</li>
            <li style="margin-bottom: 0.5em;">Attempt to decompile or reverse engineer any software contained on the Website</li>
            <li style="margin-bottom: 0.5em;">Remove any copyright or other proprietary notations from the materials</li>
            <li style="margin-bottom: 0.5em;">Transfer the materials to another person or "mirror" the materials on any other server</li>
          </ul>
          <p style="margin-bottom: 1em;">
            This license shall automatically terminate if you violate any of these restrictions and may be terminated by us at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.
          </p>
        </div>

        <div style="margin-bottom: 2.5em;">
          <h2 style="color: #000; font-size: 1.8em; margin-bottom: 1em; font-weight: 600;">4. Intellectual Property</h2>
          <p style="margin-bottom: 1em;">
            All content, features, and functionality on this Website, including but not limited to text, graphics, logos, images, audio clips, digital downloads, and software, are the property of Raja Ahsan or its content suppliers and are protected by international copyright, trademark, patent, trade secret, and other intellectual property or proprietary rights laws.
          </p>
        </div>

        <div style="margin-bottom: 2.5em;">
          <h2 style="color: #000; font-size: 1.8em; margin-bottom: 1em; font-weight: 600;">5. Contact Information</h2>
          <p style="margin-bottom: 1em;">
            If you submit contact information through our contact form, you agree that:
          </p>
          <ul style="margin-left: 2em; margin-bottom: 1em;">
            <li style="margin-bottom: 0.5em;">You will provide accurate and complete information</li>
            <li style="margin-bottom: 0.5em;">You are authorized to provide such information</li>
            <li style="margin-bottom: 0.5em;">We may use your contact information to respond to your inquiry</li>
            <li style="margin-bottom: 0.5em;">We will handle your information in accordance with our Privacy Policy</li>
          </ul>
        </div>

        <div style="margin-bottom: 2.5em;">
          <h2 style="color: #000; font-size: 1.8em; margin-bottom: 1em; font-weight: 600;">6. Disclaimer</h2>
          <p style="margin-bottom: 1em;">
            The materials on Raja Ahsan's Portfolio Website are provided on an 'as is' basis. Raja Ahsan makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.
          </p>
          <p style="margin-bottom: 1em;">
            Further, Raja Ahsan does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its Website or otherwise relating to such materials or on any sites linked to this site.
          </p>
        </div>

        <div style="margin-bottom: 2.5em;">
          <h2 style="color: #000; font-size: 1.8em; margin-bottom: 1em; font-weight: 600;">7. Limitations</h2>
          <p style="margin-bottom: 1em;">
            In no event shall Raja Ahsan or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on Raja Ahsan's Portfolio Website, even if Raja Ahsan or a Raja Ahsan authorized representative has been notified orally or in writing of the possibility of such damage.
          </p>
        </div>

        <div style="margin-bottom: 2.5em;">
          <h2 style="color: #000; font-size: 1.8em; margin-bottom: 1em; font-weight: 600;">8. Links to Other Websites</h2>
          <p style="margin-bottom: 1em;">
            Our Website may contain links to third-party websites or services that are not owned or controlled by us. We have no control over, and assume no responsibility for, the content, privacy policies, or practices of any third-party websites or services. We strongly advise you to read the terms and conditions and privacy policies of any third-party websites or services that you visit.
          </p>
        </div>

        <div style="margin-bottom: 2.5em;">
          <h2 style="color: #000; font-size: 1.8em; margin-bottom: 1em; font-weight: 600;">9. Prohibited Uses</h2>
          <p style="margin-bottom: 1em;">
            You agree not to use the Website:
          </p>
          <ul style="margin-left: 2em; margin-bottom: 1em;">
            <li style="margin-bottom: 0.5em;">In any way that violates any applicable national or international law or regulation</li>
            <li style="margin-bottom: 0.5em;">To transmit, or procure the sending of, any advertising or promotional material without our prior written consent</li>
            <li style="margin-bottom: 0.5em;">To impersonate or attempt to impersonate the company, a company employee, another user, or any other person or entity</li>
            <li style="margin-bottom: 0.5em;">In any way that infringes upon the rights of others, or in any way is illegal, threatening, fraudulent, or harmful</li>
            <li style="margin-bottom: 0.5em;">To engage in any automated use of the system, such as using scripts to send comments or messages</li>
          </ul>
        </div>

        <div style="margin-bottom: 2.5em;">
          <h2 style="color: #000; font-size: 1.8em; margin-bottom: 1em; font-weight: 600;">10. Changes to Terms</h2>
          <p style="margin-bottom: 1em;">
            We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material, we will try to provide at least 30 days notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.
          </p>
          <p style="margin-bottom: 1em;">
            By continuing to access or use our Website after those revisions become effective, you agree to be bound by the revised terms.
          </p>
        </div>

        <div style="margin-bottom: 2.5em;">
          <h2 style="color: #000; font-size: 1.8em; margin-bottom: 1em; font-weight: 600;">11. Governing Law</h2>
          <p style="margin-bottom: 1em;">
            These Terms shall be governed and construed in accordance with the laws of Pakistan, without regard to its conflict of law provisions. Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights.
          </p>
        </div>

        <div style="margin-bottom: 2.5em;">
          <h2 style="color: #000; font-size: 1.8em; margin-bottom: 1em; font-weight: 600;">12. Contact Us</h2>
          <p style="margin-bottom: 1em;">
            If you have any questions about these Terms of Use, please contact us:
          </p>
          <p style="margin-bottom: 1em;">
            <strong>Email:</strong> <a href="mailto:hellorajaahsan@gmail.com" style="color: #fda228; text-decoration: none;">hellorajaahsan@gmail.com</a><br>
            <strong>Website:</strong> <a href="{{ url('/') }}" style="color: #fda228; text-decoration: none;">{{ config('app.url') }}</a>
          </p>
        </div>

      </div>
    </div>
  </section>
</main>
@endsection

