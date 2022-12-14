@extends('Frontend.master')
@section('content')
<div style="margin:70px";>

<section class="section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="section-title">Contact Us</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-7 mb-4 mb-lg-0">
            <form action="{{route('contact.store')}}"method="post">
              @csrf
                <input type="text"  class="form-control mb-3" id="name" name="name" placeholder="Your Name">
            <input type="email" class="form-control mb-3" id="mail" name="email" placeholder="Your Email">
            <input type="text" class="form-control mb-3" id="subject" name="subject" placeholder="Subject">
            <textarea name="message" id="message" class="form-control mb-3" placeholder="Your Message"></textarea>
            <button type="submit" value="send" class="btn btn-primary">SEND MESSAGE</button>
          </form>
        </div>

      </div>
    </div>
  </section>
  </div>
@endsection