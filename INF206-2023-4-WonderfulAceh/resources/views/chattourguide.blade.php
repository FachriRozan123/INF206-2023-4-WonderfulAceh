@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Tempat</title>
    <!-- Bootstrap CDN Links -->

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
    />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Tailwind CSS CDN Links -->

    <link
      href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/348c676099.js"
      crossorigin="anonymous"
    ></script>
   </head>
  <body>
 <main class="w-screen h-screen p-5" style="background-color: #234741">
    
        <div class="container py-5">
      
          <div class="row d-flex justify-content-center">
            <r class="col-md-8 col-lg-6 col-xl-4">
      
              <div class="card" style="background-color: #D9D9D9;">
                <div class="card-header d-flex justify-content-between align-items-center p-3">
                    <h5 class="mb-0">Chat Tour Guide</h5>
                    <button type="button" class="btn" style="background-color: #949494;" ><img src="img/logout3.png" alt=""></button>
                </div>
                
                <div class="card-body" data-mdb-perfect-scrollbar="true" style="position: relative; height: 400px">
      
                  <div class="d-flex justify-content-between">
                    <p class="small mb-1">Timona Siera</p>
                    <p class="small mb-1 text-muted">23 Jan 2:00 pm</p>
                  </div>
                  <div class="d-flex flex-row justify-content-start">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava5-bg.webp"
                      alt="avatar 1" style="width: 45px; height: 100%;">
                    <div>
                      <p class="small p-2 ms-3 mb-3 rounded-3" style="background-color: #f5f6f7;">For what reason
                        would it
                        be advisable for me to think about business content?</p>
                    </div>
                  </div>
      
                  <div class="d-flex justify-content-between">
                    <p class="small mb-1 text-muted">23 Jan 2:05 pm</p>
                    <p class="small mb-1">Johny Bullock</p>
                  </div>
                  <div class="d-flex flex-row justify-content-end mb-4 pt-1">
                    <div>
                      <p class="small p-2 me-3 mb-3 text-white rounded-3 bg-warning">Thank you for your believe in
                        our
                        supports</p>
                    </div>
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava6-bg.webp"
                      alt="avatar 1" style="width: 45px; height: 100%;">
                  </div>
      
                  <div class="d-flex justify-content-between">
                    <p class="small mb-1">Timona Siera</p>
                    <p class="small mb-1 text-muted">23 Jan 5:37 pm</p>
                  </div>
                  <div class="d-flex flex-row justify-content-start">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava5-bg.webp"
                      alt="avatar 1" style="width: 45px; height: 100%;">
                    <div>
                      <p class="small p-2 ms-3 mb-3 rounded-3" style="background-color: #f5f6f7;">Lorem ipsum dolor
                        sit amet
                        consectetur adipisicing elit similique quae consequatur</p>
                    </div>
                  </div>
                </div>
            </div>
            <br> 
            <div class="input-group mb-0">
                <input type="text" class="form-control" placeholder="Type message"
                  aria-label="Recipient's username" aria-describedby="button-addon2"
                  style="background-color: #949494;" />
                  <button class="btn btn-warning" type="button" id="button-addon2" style="padding-top: .55rem; background-color: #949494;">
                  <img src="img/left-arrow2.png" alt="send">
                </button>
              </div>
                
            </div>
          </div>
      
        </div>
        <div>
          
        </div>
      </section>
    
    </main>
    
    <footer class="bg-white text-center bottom-full">
      <p>Copyright 2023 &copy; WonderfulAceh</p>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
@endsection