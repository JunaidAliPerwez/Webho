@extends('web.layouts.main')
@section('content')

<div class="terms_condition">
    <div class="container">
        <h1 class="title cn clr_blk">{{ $content_166->name }}</h1>

        <?= html_entity_decode($content_166->details) ?>

        {{-- <h2 class="title clr_blk">What information do we gather?</h2>
        <p class="para clr_blk">
            This privacy plan is set to explain our policies regarding customer`s personal data that is collected for our use. When you place a query online, you will only need to give some basic information to us by filling out a simple
            query form so that we could contact you to discuss the need. You will only need to enter your name, e-mail address, phone number or country.
        </p>
        <h2 class="title clr_blk">Do we disclose any information to outside parties?</h2>
        <p class="para clr_blk">
            We do not sell, trade, or otherwise transfer to outside parties your personally identifiable information. This does not include our subsidiaries and trusted third parties who assist us in operating our website, conducting our
            business, or servicing you, so long as those parties agree to keep this information confidential. However, non-personally identifiable visitor information may be provided to other parties for marketing, advertising, or other
            uses.
        </p>
        <h2 class="title clr_blk">How do we protect your information?</h2>
        <p class="para clr_blk">
            The Webho.com uses a secure server for the purpose of securing your private information. All your private/credit information sends out via Secure Socket Layer (SSL) technology that is used to keep the information confidential
            when you place your order online.
        </p>
        <h2 class="title clr_blk">What do we use your information for?</h2>
        <p class="para clr_blk">
            We use the personal data for handling orders. The Webho and its members use your personal data and other personally non-identifiable information that will help us in handling your orders properly and to better respond to your
            complexity. Furthermore, your information may be used for the following ways: <br />
            To improve our website features (by the feedbacks we receive from you)<br />
            To keep you updated with our latest offers and happening<br />
            To improve our customer services
        </p>
        <h2 class="title clr_blk">The General Data Protection Regulation Imply</h2>

        <p class="para clr_blk">
            We do not transfer data to other parties that gives out your personally identifiable information. An individual's data that you will give will be kept confidential and you will have complete know of it. This does not include our
            subsidiaries and trusted third parties who assist us in operating our website, conducting our business, or servicing you, so long as those parties agree to keep this information confidential.
        </p>

        <h2 class="title clr_blk">Consent</h2>

        <p class="para clr_blk">
            By consenting to this privacy notice you are giving us permission to process your personal data specifically for the purpose identified. Consent is required for The Webho to process both types of personal data, but it must be
            explicity given. Where we are asking for your sensitive personal data we will always tell you why and how the information will be used. You may withdraw consent at any time by Call or Via Email as per the standard Withdrawal of
            Consent Procedure [ GDPR DOC 2.7A]
        </p>
        <p class="para clr_blk" style="font-weight: bold;">"If a project is on hold for more than 2 weeks from the client's end the project will be archived and there will be a reactivation fee to re-initiate the project."</p> --}}

    </div>
</div>

@endsection
@section('css')
<style type="text/css">
</style>
@endsection
@section('js')
@endsection
