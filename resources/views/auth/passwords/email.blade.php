@extends('Front2.extend')
@section('content')
<body >

<div class="uk-grid-collapse" data-uk-grid>
  <div class="uk-width-1-2@m uk-padding-large uk-flex uk-flex-middle uk-flex-center" data-uk-height-viewport>
    <div class="uk-width-3-4@s">
      <div class="uk-text-center uk-margin-bottom">
        <a class="uk-logo uk-text-primary uk-text-bold" href="index-2.html">TransZ</a>
      </div>
      <div class="uk-text-center uk-margin-medium-bottom">
        <h1 class="uk-letter-spacing-small">Reset Password</h1>
      </div>
    
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
      <form method="POST" action="{{ route('password.email') }}">@csrf
        <div class="uk-width-1-1 uk-margin">
          <label class="uk-form-label" for="email">Email</label>
          <input id="email" class="uk-input uk-form-large" type="email" name="email" placeholder="tom@company.com">
        </div>
        @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
        @enderror
       
       
        <div class="uk-width-1-1 uk-text-center">
          <button class="uk-button uk-button-primary uk-button-large">Submit</button>
        </div>
      </form>
    </div>
  </div>
  <div class="uk-width-1-2@m uk-padding-large uk-flex uk-flex-middle uk-flex-center uk-light
    uk-background-cover uk-background-norepeat uk-background-blend-overlay uk-overlay-blend" 
    style="background-image: url(https://source.unsplash.com/2FPjlAyMQTA/680x1000);" data-uk-height-viewport>
    <div>
      <div class="uk-text-center">
        <h2 class="uk-h1 uk-letter-spacing-small">Back to Sign in</h2>
      </div>
      <div class="uk-margin-top uk-margin-medium-bottom uk-text-center">
        <p>Enter your personal details and join the transcription community</p>
      </div>
      <div class="uk-width-1-1 uk-text-center">
        <a href="/login" class="uk-button uk-button-primary uk-button-large">Sign in</a>
      </div>
    </div>
  </div>
</div>

</body>


<!-- sign-in.html  19 Nov 2019 03:39:43 GMT -->
</html>









