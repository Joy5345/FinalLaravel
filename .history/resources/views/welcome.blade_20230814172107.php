<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>USTP CONeXT</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <style>
    .mybg {
      background-color: #044556;
    }
    .text-color {
      color: #aeb2b3;
    }
    .fa-solid {
      font-size: 48px;
      display: block;
      margin: 0 auto;
      margin-bottom: 15px;
    }
    .img-fluid {
      max-width: 90%;
    }
    .pl-50 {
      padding-left: 50px;
    }
    .mr-20 {
      margin-right: 20px;
    }
    @media (max-width: 767.98px) {
      .hide-on-sm {
        display: none;
      }
      .admin-card {
        margin-bottom: 15px;
      }
      .mb-sm-4 {
        margin-bottom: 1.5rem;
      }
    }
  </style>

  <body>
    <!--NAVBAR-->

    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top mybg">
      <div class="container">
        <a class="navbar-brand text-light" href="#">USTP CONeXT</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="menubar">
          <span class="navbar-toggler"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link text-color">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-color">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-color">Administrators</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--SUBSCRIPTION-->

    <section class="bg-light">
      <div class="container">
        <div class="row pt-4 pb-3">
          <div class="col-sm-6 mt-5">
            <h2 class="text-dark fw-bold mb-3 text-center text-sm-start">Register to be a Legit TRAILBLAZER</h2>
          </div>
          <div class="col mt-5">
              <button
                class="btn btn-outline-secondary bg-primary text-light  p-2"
                data-bs-toggle="modal"
                data-bs-target="#Connect">JOIN NOW!</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--ADMINISTRATORS-->

    <section class="bg-primary" id="administrators">
      <div class="container mt-5">
           <div class="row pb-5">
          <div class="col-sm-12 text-left text-light">
            <h1>RECENT TRAILBLAZER</h1>
          </div>
        </div>
          <div class="row">
            <div class="col-md-3 mb-4 mb-md-3 mb-sm-3">
              <div class="card text-center mb-3 bg-light" style="height: 100%;">
                  <div class="card-body">
                      <img src="images/rose.jpg" alt="" class="rounded-circle img-fluid" style="max-width: 100px;">
                      <h2>Rose</h2>
                      <p class="card-text text-dark pt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque hic consequatur temporibus cum unde vero commodi, aspernatur facere ratione iusto?</p>
                      <i class="fa-brands fa-twitter"></i>
                      <i class="fa-brands fa-facebook"></i>
                      <i class="fa-brands fa-instagram"></i>
                      <i class="fa-brands fa-linkedin"></i>
                  </div>
              </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-3 mb-sm-3">
              <div class="card text-center mb-3 bg-light" style="height: 100%;">
                  <div class="card-body">
                      <img src="images/jennie.jpg" alt="" class="rounded-circle img-fluid" style="max-width: 100px;">
                      <h2>Jennie</h2>
                      <p class="card-text text-dark pt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque hic consequatur temporibus cum unde vero commodi, aspernatur facere ratione iusto?</p>
                      <i class="fa-brands fa-twitter"></i>
                      <i class="fa-brands fa-facebook"></i>
                      <i class="fa-brands fa-instagram"></i>
                      <i class="fa-brands fa-linkedin"></i>
                  </div>
              </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-3 mb-sm-3">
              <div class="card text-center mb-3 bg-light" style="height: 100%;">
                  <div class="card-body">
                      <img src="images/lisa.jpg" alt="" class="rounded-circle img-fluid" style="max-width: 100px;">
                      <h2>Lisa</h2>
                      <p class="card-text text-dark pt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque hic consequatur temporibus cum unde vero commodi, aspernatur facere ratione iusto?</p>
                      <i class="fa-brands fa-twitter"></i>
                      <i class="fa-brands fa-facebook"></i>
                      <i class="fa-brands fa-instagram"></i>
                      <i class="fa-brands fa-linkedin"></i>
                  </div>
              </div>
            </div>
            <div class="col-md-3 mb-4 mb-md-3 mb-sm-3">
              <div class="card text-center mb-3 bg-light" style="height: 100%;">
                  <div class="card-body">
                      <img src="images/jisoo.jpg" alt="" class="rounded-circle img-fluid" style="max-width: 100px;">
                      <h2>Jisoo</h2>
                      <p class="card-text text-dark pt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque hic consequatur temporibus cum unde vero commodi, aspernatur facere ratione iusto?</p>
                      <i class="fa-brands fa-twitter"></i>
                      <i class="fa-brands fa-facebook"></i>
                      <i class="fa-brands fa-instagram"></i>
                      <i class="fa-brands fa-linkedin"></i>
                  </div>
              </div>
            </div>
          </div>
        </div>
          </div>
      </div>
      <div class="pb-5"></div>
    </section>

    <!--MODAL-->
    <form id="registrationForm" action="{{ route('register') }}" method="POST" enctype="multipart/form-data" onsubmit="return handleSubmit();">
    @csrf
      <div
        class="modal fade"
        id="Connect"
        tabindex="-1"
        aria-labelledby="ConnectModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="ConnectModalLabel">
            Registration Form to be a Legit TRAILBLAZER</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="Name" class="form-label">Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="Name"
                    name="Name"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    required
                  />
                </div>
                <div class="mb-3">
                    <label for="Name" class="form-label">Describe Yourself</label>
                    <input
                      type="text"
                      class="form-control"
                      id="Describe"
                      name="Describe"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary text-left">Save Student</button>
            </div>
          </div>
        </div>
      </div>
    </form>

    <!--FOOTER-->

    <footer class="mybg py-5">
      <div class="container text-light text-center">
         <small class="text-white-50">Copyright &copy; 2023</small>
      </div>
  </footer>
    <script>
        function handleSubmit() {
            event.preventDefault();

            const form = document.getElementById('registrationForm');
            const formData = new FormData(form);

            fetch("{{ route('register') }}", {
                method: "POST",
                body: formData,
                headers: {
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                }
            })
            .then(response => response.json())
            .then(data => {
                // Log the response for debugging
                console.log(data);
                // Update card content dynamically (replace this with your logic)
            })
            .catch(error => console.error("Error:", error));

            return false;
        }
        </script>


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"></script>
  </body>
</html>
