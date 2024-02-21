@extends('layout.app')
@section('title', 'contact')
@push('header_script')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"> --}}


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
@endpush
@section('contant')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2>Contact Us</h2>
      <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit
        quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact">
    <div data-aos="fade-up">
      <iframe style="border:0; width: 100%; height: 350px;"
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
        frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="container" data-aos="fade-up">

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@example.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>+1 5589 55488 55</p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="" method="post" class="php-email-form">
            @csrf
            <div class="row">

              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" >
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="gmail" class="form-control" name="email" id="email" placeholder="Your Email" >
              </div>
            </div>
            <div class="form-group mt-3">
                {{-- <input type="text" class="form-control datepicker" id="date-input" placeholder="mm/dd/yyyy"> --}}
             <input type="text" class="form-control" name="subject" id="subject" placeholder="subject">
              </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" id="massege" rows="5" placeholder="Message" ></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit" id="butsave">Send Message</button></div>
          </form>

        </div>
      </div>
    </div>
  </section><!-- End Contact Section -->
</main><!-- End #main -->
@endsection
@push('footer_script')

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>

  $('.datepicker').datepicker({
    autoclose: true, 
    todayHighlight: true, 
    format: 'mm/dd/yyyy' 
  });

  $(document).ready(function() {
   
   $('#butsave').on('click', function() {
     var name = $('#name').val();
     var email = $('#email').val();
     var subject = $('#subject').val();
     var massge = $('#massege').val();
    
         $.ajax({
             url: "{{route('contact/store')}}",
             type: "POST",
             data: {
                 name: name,
                 email: email,
                 subject: subject,
                 city: city
             },
             success: function(res){
                 console.log(res);  
             }
            });
          }); 
        });        
</script>

@endpush