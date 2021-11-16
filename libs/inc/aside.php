<div class="col-md-4 upcoming-holder">
            <div class="card">
                <div class="card-body upcoming">
                    <div class="float-start"></div>
                    <div class="float-end show-mob d-flex">
                        <div class="my-auto upc">
                            <i class="fas fa-angle-down"></i>
                        </div>
                    </div>
                    <h5>Events/Admission</h5>
                    <hr>
                    <ul class="hide-mob upcoming-toggler" >
                        <?php if($getData->isNews()) : ?>
                            <?php $getData->getAllNews(3); ?>
                            <?php else : ?>
                                Nothing found
                        <?php endif; ?>
                        <li><a  href="#">Institute of Education 2020/2021 admission</a></li> 
                        <li><a  href="#">Admission Into The Pre-Degree Programme For The 2020/2021 Session</a></li>
                        <li><a  href="#">Admission into The New Diploma Courses For Centre For Continuing Education Programmes For 2020/2021 Session</a></li>
                        <li><a  href="#">Admission into Intensive Degree Programme For The 2020/2021 Session</a></li>
                        <li><a  href="#">Check JUPEB Admission</a></li>
                    </ul>
                </div>
            </div>
        </div>