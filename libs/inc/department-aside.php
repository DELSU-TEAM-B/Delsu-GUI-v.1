<?php if(isset($_GET['faculty'])){
    $faculty = $_GET['faculty'];
}?>
<div class="col-md-3 notifications">
                <div class="card">
                    <div class="card-header sticky-top">
                        <h5>Departments</h5>
                    </div>
                    <div class="card-body">
                        <div class="accordion" id="accordionExample">
                            <?php if($faculty == 'Agriculture') : ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="hOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Agriculture
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="hOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="nav flex-column">
                                            <li class="nav-item"><a href="" class="nav-link">Agric Economics and Extension</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Animal Science & Fisheries</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Agronomy, Wildlife & Forestry</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php elseif($faculty == 'Arts') : ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="hTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Arts
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="hTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="nav flex-column">
                                            <li class="nav-item"><a href="" class="nav-link">English & Literary Studies</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Fine & Applied Arts</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">History and International Studies</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Languages and Linguistics</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Music</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Religious Studies/Philosophy</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Theatre Arts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php elseif($faculty == 'Basic Medical Sciences') : ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="hThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Basic Medical Sciences
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="hThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="nav flex-column">
                                            <li class="nav-item"><a href="" class="nav-link">Anatomy & Cell Biology</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Medical Biochemistry & Genetics</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Nursing Science</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Pharmacology and Therapeutics</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Physiology</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php elseif($faculty == 'Clinical Sciences') : ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="hd4">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                        Clinical Sciences
                                    </button>
                                </h2>
                                <div id="collapse4" class="accordion-collapse collapse show" aria-labelledby="hd4" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="nav flex-column">
                                            <li class="nav-item"><a href="" class="nav-link">Family Medicine</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Medicine</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Anesthesia</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Chemical Pathology</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Community Medicine</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Hematology and Blood Transfusion</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Mental Health/Psychiatry</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Morbid Anatomy</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Obstetrics and Gynecology</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Pediatrics and Children Health</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Radiology</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Surgery</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Medical Microbiology</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php elseif($faculty == 'Education') : ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="hd5">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                        Education
                                    </button>
                                </h2>
                                <div id="collapse5" class="accordion-collapse collapse show" aria-labelledby="hd5" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="nav flex-column">
                                            <li class="nav-item"><a href="" class="nav-link">Vocational Education</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Science Education</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Business Education</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Health Education</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Social Science Education</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Institute of Education</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Guidance and Counselling</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Human Kinetics, Recreation and Sports Science Education</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Library and Information Science</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Educational Management & Foundations</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Technical Education</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php elseif($faculty == 'Engineering') : ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="hd6">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                        Engineering
                                    </button>
                                </h2>
                                <div id="collapse6" class="accordion-collapse collapse show" aria-labelledby="hd6" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="nav flex-column">
                                            <li class="nav-item"><a href="" class="nav-link">Chemical/Petroleum Engineering</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Civil and Environmental Engineering</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Electrical Engineering</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Mechanical Engineering</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php elseif($faculty == 'Law') : ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="hd7">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                        Law
                                    </button>
                                </h2>
                                <div id="collapse7" class="accordion-collapse collapse show" aria-labelledby="hd7" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="nav flex-column">
                                            <li class="nav-item"><a href="" class="nav-link">Commercial and Property Law</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Jurisprudence and International Law</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Private Law</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Public Law</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php elseif($faculty == 'Management Sciences') : ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="hd8">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                        Management Sciences
                                    </button>
                                </h2>
                                <div id="collapse8" class="accordion-collapse collapse show" aria-labelledby="hd8" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="nav flex-column">
                                            <li class="nav-item"><a href="" class="nav-link">Accounting/Banking & Finance</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Business Administration & Marketing</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php elseif($faculty == 'Pharmacy') : ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="hd9">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                        Pharmacy
                                    </button>
                                </h2>
                                <div id="collapse9" class="accordion-collapse collapse show" aria-labelledby="hd9" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="nav flex-column">
                                            <li class="nav-item"><a href="" class="nav-link">Pharmaceutical Microbiology & Biotech</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Pharmaceutical Chemistry</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Pharmacology & Toxicology</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Clinical Pharmacy & Pharmacy Administration</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Pharmacognosy & Traditional Medicine</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Pharmaceutics & Industrial Pharmacy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php elseif($faculty == 'Science') : ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="hd10">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                        Science
                                    </button>
                                </h2>
                                <div id="collapse10" class="accordion-collapse collapse show" aria-labelledby="hd10" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="nav flex-column">
                                            <li class="nav-item"><a href="" class="nav-link">Animal and Environmental Biology</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Biochemistry</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Botany</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Chemistry</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Computer Science</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Geology</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Mathematics</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Microbiology</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Physics</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Science Laboratory Technology</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php elseif($faculty == 'Social Sciences') : ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="hd11">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                        Social Sciences
                                    </button>
                                </h2>
                                <div id="collapse11" class="accordion-collapse collapse show" aria-labelledby="hd11" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul class="nav flex-column">
                                            <li class="nav-item"><a href="" class="nav-link">Accounting & Finance</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Business Administration</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Economics</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Geog & Reg Planning</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Mass Communication</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Political Science</a></li>
                                            <li class="nav-item"><a href="" class="nav-link">Sociology & Psychology</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php else : ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>