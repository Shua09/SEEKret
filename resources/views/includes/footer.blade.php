<footer>

    {{-- <script src="{{ asset('assets/js/footer.js') }}"></script> --}}
    

    <style>
        footer{
            align-content: center;
            padding-top: 1%;
            padding-bottom: 0.5%;

            /* position: relative; */

            background-color: #023E73;
            color: white;
            font-family: Yrsa;
            height: fit-content;

            /* display: block; */
        }

   
        /* LEFT SECTION */
        #leftsection{
            text-align: start;
            line-height: 40px;
        }

        /* CENTER SECTION */
        #centersection{
            text-align: center;
            user-select: none;
        }
        #adulogo{
            width: 320px;
            height: auto;
            margin: auto;
        }
        #shlogo{
            width: 300px;
            height: auto;
            margin: auto;
        }
        #copyright{
            color: white;
            font-family: Yrsa;
            font-weight: 400;
            font-size: 1.1em;
        }

        /* RIGHT SECTION */
        #rightsection{
            text-align: end;
            user-select: none;
            align-content: center;
            line-height: 40px;
        }
        .nav .nav-item .nav-link{
            color: white;
            font-family: Yrsa;
            font-weight: 600;
            font-size: 1.2em;
        }

        svg{
            color: #FFFFFF;
        }
    </style>

    <div class="container-xxl-fluid" id="footer">
        <div class="container">
            {{-- <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top"> --}}
            <footer class="row row-cols-1 row-cols-sm-1 row-cols-md-3">

                {{-- <div class="col mb-3">

                </div> --}}

            {{-- LEFT SECTION --}}
                <div class="col-sm-6 py-3" id="leftsection">
                    <h5>Location</h5>
                        <h6 class="text-body-primary" style="padding-left: 3%;"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                            </svg>
                            &nbsp;2nd Floor St. Therese Building
                        </h6>
                    <h5>Hours</h5>
                        <h6 class="text-body-primary" style="padding-left: 3%;"> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"></path>
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z"></path>
                            </svg>
                            &nbsp;8am - 6pm
                        </h6>
                    <h5>Contact Us</h5>
                        <h6 class="text-body-primary" style="padding-left: 3%;"> 
                            <a>
                                {{-- EMAIL ICON --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16" data-bs-toggle="modal" data-bs-target="#guidanceEmail">
                                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                                </svg>

                                <!-- Modal -->
                                <div class="modal fade" id="guidanceEmail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="color:#000000;">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Adamson University's Guidance Office Email</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body justify-content-center py-4" style="text-align: center; ">
                                                <h5>
                                                    guidance@adamson.edu.ph
                                                </h5>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary" id="mailRedirect" onclick="openEmail()" data-bs-dismiss="modal">Send an Email?</button>
                                                {{-- <button type="button" class="btn btn-primary"  data-bs-target="#MODAL2" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-whatever="@mdo">Send an Email?</button> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                        const modal = document.querySelector("#guidanceEmail");
                                        const button = document.querySelector("#mailRedirect");

                                        button.addEventListener("click", openEmail);
                                            function openEmail() {
                                                window.open('mailto:guidance@adamson.edu.ph?subject=subject&body=body');                                       
                                        }
                                    </script>
                                </div>
                                
                                {{-- EMAIL --}}
                                {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#MODAL2" data-bs-whatever="@mdo">Open modal for @mdo</button> --}}
        
                                {{-- EMAIL MODAL --}}
                                {{-- <div class="modal fade" id="MODAL2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="color:#000000;">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                        <form>
                                          <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                                            <input type="text" class="form-control" id="recipient-name">
                                          </div>
                                          <div class="mb-3">
                                            <label for="message-text" class="col-form-label">Message:</label>
                                            <textarea class="form-control" id="message-text"></textarea>
                                          </div>
                                        </form>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary">Send Email</button>
                                      </div>
                                    </div>
                                  </div>
                                </div> --}}

                            </a>
                            &nbsp;|&nbsp;
                            <a>
                                {{-- TELEPHONE ICON    --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16" data-bs-toggle="modal" data-bs-target="#guidanceNumber">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                </svg>

                                <!-- Modal -->
                                <div class="modal fade" id="guidanceNumber" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel" style="color:#000000;">Adamson University's Guidance Office Email</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body justify-content-center py-4" style="text-align: center; ">
                                            <h5 style="color:#000000;">
                                                Telephone:(02)524-2011
                                                <br>
                                                Local 207
                                            </h5>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                
                            </a>
                        </h6>
                </div>

            {{-- CENTER SECTION --}}
                <div class="col-sm-6 justify-content-center" id="centersection">
                    <a href="https://www.adamson.edu.ph/2018/" class="d-flex align-items-center mb-3">
                        {{-- <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg> --}}
                        <img class="image" id="adulogo" src="{{ asset('assets/images/adulogo.png') }}" alt="Adamson University Logo">
                    </a>
                    <a href="/home" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                        {{-- <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg> --}}
                        <img class="image" id="shlogo" src="{{ asset('assets/images/logo-white.png') }}" alt="SEEKret Help Logo">
                    </a>
                    <p class="text-body-primary" id="copyright">© Adamson University Guidance 2023</p>
                </div>

            {{-- RIGHT SECTION --}}
                <div class="col-sm-8" id="rightsection">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="/IncompletePage" class="nav-link py-2">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="/IncompletePage" class="nav-link py-2">Privacy Policy</a></li>
                        <li class="nav-item mb-3"><a href="/IncompletePage" class="nav-link py-2">Terms and Conditions</a></li>
                    </ul>
                </div>

            </footer>
        </div>
    </div>

</footer>