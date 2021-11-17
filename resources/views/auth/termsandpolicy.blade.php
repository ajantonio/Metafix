@extends('layouts.app')

@section('content')

<div class="container-md mt-4">
    <h1>Privacy Policy</h1>
    <p>The descriptions here will state which personal information is gathered, how it is used, and how it is protected.
        The personal information that we gather are only for the sake of effectively providing you the service that the system provides.
        We have other reason why we need your personal information for the service of our system. But for now, these are the personal information that
        we need from you:
    <ul>
        <li>Full Name</li>
        <li>Email</li>
        <li>Orthopedic License #</li>
        <li>Contact Number</li>
    </ul>
    <b>Full name</b> is needed to identify the name of the orthopedic doctor for the orthopedic technician and administrator. The aforementioned needers of the full name needs to
    know how they should address the user based on their name. They also need to identify the name of the orderer in case this orthopedic doctor ordered an orthopedic Implant
    using the system.

    <div class="mt-3"><b>Email</b> is used to send an email to the user if their user account under evaluation is accepted or rejected to be registered in our database as one of the
        users.
    </div>

    <div class="mt-3">
        <b>Orthopedic license #</b> is one of the factors needed to let us know that you are a legitimate orthopedic doctor or not.
    </div>

    <div class="mt-3">
        <b>Contact number</b> is used only for the sake of communicating with you. We have different reasons why we need to communicate with you.
        First is if your account is under evaluation, we will contact you through the phone number you entered in our registration page and ask several questions to verify if you are a legitimate orthopedic
        doctor or not (yes, orthopedic license # is not enough to verify your legitimacy as an orthopedic doctor). Second is in case we accepted your account in our system
        and you decided to order an orthopedic implant using our system, the orthopedic technician assigned to deliver the orthopedic implants you ordered needs a way to
        communicate with you in case the orthopedic technician can't find you in the agreed hospital address destination.
    </div>

    <div class="mt-3">
        As for how we protect your data, rest assured that we do not plan to share your data with a third-party group nor wanted to do it in the first place.
        We also encrypted sensitive information such as your password and the reference id that is automatically generated on your quotation. Password is needed
        as one of the credentials when logging in to our system. Reference id is our way of uniquely identifying each quotation. These two are sensitive information needed
        to use our service, thus we will protect it for the sake of you and your order. Everything discussed in each previous paragraphs about how we use each of your
        personal information are the only reason why we need these data. We do not have the intention to do something malicious with the personal data that you shared to us.
        It's only for the sake of effectively providing the service that you need from our system, Metafix.
    </div>

    <div class="mt-3">
        If you are not willing to share these personal information
        that we collect from you, you won't be able to register an account in our system, hence not
        being able to use the service of our system.
    </div>
    </p>

    <h1 class="mt-5">Terms of Service</h1>
    <p>The terms of service only applies to users who have a registered account in our database. Users who orders an orthopedic implant from us should only use it for the
        purpose of integrating it with the body parts of a human body to reassemble the damaged body parts. These implants are only designed for this way, thus we expect
        you to only use it for this purpose. The usage of these implants should only occur during your orthopedic surgery. As for choosing the hospital city and its address on
        the checkout page, you should choose based only on where your orthopedic surgery will take place. Please do not enter the hospital city and address where your
        orthopedic surgery will not take place.
    </p>
</div>

@endsection