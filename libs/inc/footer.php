    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="row justify-content-center">
                        <div class="col-md-6 mb-3">
                            <h5 class="">Quick links</h5>
                            <hr class="hrr">
                            <ul class="nav flex-column">
                                <li class="nav-item"><a class="nav-link" href="https://dlms.delsu.edu.ng/">DELSU Learning Management</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Faculties</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Open Distance Learning</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Continuing Education</a></li>
                                <li class="nav-item"><a class="nav-link" href="academiccal.aspx">Academic Calender</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 mb-3">
                            <h5 class="">Contact us</h5>
                            <hr class="hrr">
                            <address>P.M.B. 1, Abraka Delta State, Nigeria</address>
                            <address>registrar@delsu.edu.ng</address>
                            <address>+2348134123751</address>
                            <address>
                                <ul class="nav">
                                    <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li class="nav-item"><a class="nav-link" href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </address>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63509.55489051626!2d6.090979700062051!3d5.806547022815981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104173bc1e826e8d%3A0x21c3328283881547!2sDelta%20State%20University%20Main%20Campus!5e0!3m2!1sen!2sng!4v1629293708858!5m2!1sen!2sng" class="map-delsu" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <p class="text-center">© Copyrights 2019 Powered by DELSU ICT</p>
        </div>
    </div>
    <script src="libs/js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- <script src="libs/js/wow.min.js"></script> -->
    <script src="libs/js/wow.min.js"></script>
    <script src="libs/js/owl.carousel.min.js"></script>
    
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script> -->
    <script>
        $(document).ready(function(){
            $('.menu-tog').click(function(){
                $('#nav-mr').toggle('fast');
                $("i", this).toggleClass("fa-sliders-h fa-times");
            });
            
            if ($(window).width() < 790) {
                $("#nav-mr").addClass("flex-column");
                $(".nmn").removeClass("container-fluid");
                $(".drp").removeClass("dropdown-menu");
                $(".bannerr").removeClass("container");
                $(".pr-s").toggleClass("order-last");
                $(".pl-s").toggleClass("order-first");

                $('.dropdown').click(function(){
                    $(this).find("ul").css({"position":"relative", "margin-top":"-30px"});
                });
                
                // $("#nav-m").addClass("hide-mob");
                $(document).on("click", ".mobile-toggle", function(event){
                    event.preventDefault();
                    $(this).closest('.mobile-toggle').next('.drp').toggle();
                }); 
            }
        });
    </script>
</body>
</html>