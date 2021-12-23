@extends('web.layouts.main')
@section('content')


<div class="terms_condition">
    <div class="container">
        <h1 class="title cn clr_blk">{{ $content_167->name }}</h1>

        <?= html_entity_decode($content_167->details) ?>

        {{-- <p class="para clr_blk">
            The Webho, Inc. insures smooth transitions with all clients and it is mandatory that all transactions are documented and archived. To assure customers of legitimate and quality work on their projects, The Webho offers Money Back
            guarantee and other return policies. However, all return policy at The Webho are subject to the following clauses and can be changed with prior confirmation with clients. <br />

            <br />

            <strong>(a) </strong>MoneyBack Guarantee is valid till 30days of order placement, provided that other terms are applied. <br />

            <br />

            <strong>(b)</strong> In result of unsatisfactory designs, you can claim your return via three modes i)Toll Free # {{ $setting['phone'] }} ii)Live Chat iii)Email us on any official ID <br />

            <br />

            <strong>(c)</strong> If you are not satisfied with the initial Responses provided by The Webho, Inc, there is no return if your project moves to round two of logo alterations. You may request a return by completing the Return
            Request form, which will be provided to you upon request. Upon timely receipt of the request, The Webho, Inc will return the total payment made by you, less a service and processing fee of 10% on package amount. <br />

            <br />

            <strong>(d)</strong> There are no returns for any rush service charges. 24 hour design fees and 24 hour rush changes are non-returnable. <br />

            <br />

            <strong>(e)</strong> In case of return approval, client will get his amount credited back within next 6-7 Business Days. <br />

            <br />

            <strong>(f)</strong> We won't entertain or return any orders if the client stays non-responsive for 45 Days but client can send us an email to hold the project if there is some personal issue. Also if the client is
            non-responsive for more than 60 Days then the client has to pay an extra caution fee i.e. $150 for re-initiating the project. <br />

            <br />

            <strong>(g)</strong> Incase if client wants to forfeit the website portion of the package after 30days, return won't be applicable; though we can hold the project in such case and the client can come later and get the project
            started again <br />

            <br />

            <strong>(h)</strong> Furthermore, customer shall forfeit the right to the return outlined above if customer request additional revisions (1 or more design changes regardless of the complexity) or modifications to any of the
            initial concepts. You shall also forfeit the right to a return if you do not respond in a timely manner to a status notification from The Webho, Inc. <br />

            <br />

            <strong>(i)</strong> Should you receive a return, you agree that your acceptance of the return shall constitute your sole and exclusive remedy with respect to related Responses. Additionally, you acknowledge that you will have
            no right (express or implied) to use any Response or other work product, content, or media, nor will you have any ownership interest in or to the same. <br />

            <br />

            <strong>(j)</strong> In case of finalizing one part of the order the customer won't be eligible for a return for the rest of the remaining package.
        </p> --}}

    </div>
</div>
@endsection
@section('css')
<style type="text/css">
</style>
@endsection
@section('js')
@endsection
