<section id="book-a-table" class="book-a-table">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Reservation</h2>
        <p>Book a Table</p>
      </div>

      <form action="/front" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
        @csrf
        <div class="row">
          <div class="col-lg-4 col-md-6 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
            @error('name')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" >
            @error('email')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
            <input type="number" class="form-control" name="phone" id="phone" placeholder="Your Phone" >
            @error('phone')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="text" name="date" class="form-control" id="date" placeholder="Date" >
            @error('date')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="text" class="form-control" name="time" id="time" placeholder="Time" >
            @error('time')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
          </div>
          <div class="col-lg-4 col-md-6 form-group mt-3">
            <input type="number" class="form-control" name="of_people" id="people" placeholder="# of people" >
            @error('of_people')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
          </div>
        </div>
        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
          @error('message')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
        </div>
       
        <div class="text-center"><button type="submit">Book a Table</button></div>
      </form>

    </div>
  </section>