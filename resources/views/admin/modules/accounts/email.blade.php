<div class="row">
    <div class="col-md-12">

        @if($user->status_id == 2)
        <p>Hello, <b>Mr. {{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }}</b>.
            We are delighted to tell you that we accepted and registered your account in our system. Hence, you may now order an orthopedic implant with our system.
            Thank you and have a good day :D.
        </p>
        @else($user->status_id == 3)
        <p>Hello, <b>Mr. {{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }}</b>.
            We are sad to inform you that your account did not pass the evaluation because there is not enough evidence that you are a licensed orthopedic doctor.
            Our system only registers users who are licensed orthopedic doctors to prevent non-orthopedic doctor misuse our orthopedic implant.
            Thank you for taking the time to register an account with us. We hope to have business with you in the future.
        </p>
        @endif


    </div>
</div>