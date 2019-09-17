@extends('layouts.main')

@section('title', 'Review Resume')

@section('extra-styles')
    <link rel="stylesheet" href="css/Lcss.css">
    <link rel="stylesheet" href="css/dashboard.css">
@endsection

@section('content')
    <main>
        <section class=" redaktor_section">
            <div class="row red_row">
                <div class="col-sm-12 col-lg-9 red_left_side">
                    <div class="red_red">
                        <a href="#"><p>Resume name:<span> Resume 8</span></p><img src="img/pencil-edit-button.png" alt=""></a>
                    </div>
                    <div class="red_head">
                        <h2>Heading</h2>
                    </div>
                    <ul id="sortable">


                        <li class="red_item ui-state-default">

                            <h5>Additional Information</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <div class="red_tools ">
                                <div class="tool1">
                                    <img src="img/pencil-edit-button.png" alt="">
                                </div>
                                <div class="tool2">
                                    <img src="img/move-option.png" alt="">
                                </div>
                                <div class="tool3">
                                    <img src="img/rubbish-bin-delete-button.png" alt="">
                                </div>
                            </div>
                            <hr>

                        </li>
                        <li class="red_item ui-state-default">

                            <h5>Skils</h5>
                            <div class="card-body card_li">
                                <ul>
                                    <li><p>Skill 1</p></li>
                                    <li><p>Skill 2</p></li>
                                    <li><p>Skill 3</p></li>
                                    <li><p>Skill 4</p></li>
                                    <li><p>Skill 5</p></li>
                                    <li><p>Skill 6</p></li>
                                    <li><p>Skill 7</p></li>
                                    <li><p>Skill 8</p></li>
                                </ul>

                            </div>
                            <div class="red_tools">
                                <div class="tool1">
                                    <img src="img/pencil-edit-button.png" alt="">
                                </div>
                                <div class="tool2">
                                    <img src="img/move-option.png" alt="">
                                </div>
                                <div class="tool3">
                                    <img src="img/rubbish-bin-delete-button.png" alt="">
                                </div>
                            </div>
                            <hr>
                        </li>
                        <li class="red_item ui-state-default">
                            <h5>Experience</h5>
                            <div class="exp_group">
                                <span>UI/UX design</span>
                                <span>Web projects</span>
                                <span>2019 - Current</span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                            <div class="red_tools">
                                <div class="tool1">
                                    <img src="img/pencil-edit-button.png" alt="">
                                </div>
                                <div class="tool2">
                                    <img src="img/move-option.png" alt="">
                                </div>
                                <div class="tool3">
                                    <img src="img/rubbish-bin-delete-button.png" alt="">
                                </div>
                            </div>
                            <hr>
                        </li>
                        <li class="red_item  ui-state-default">
                            <h5>Education and Training</h5>
                            <div class="exp_group">
                                <span>High School Diploma</span>
                                <span>2008</span>
                            </div>
                            <p>N 80 School / New York</p>
                            <div class="red_tools">
                                <div class="tool1">
                                    <img src="img/pencil-edit-button.png" alt="">
                                </div>
                                <div class="tool2">
                                    <img src="img/move-option.png" alt="">
                                </div>
                                <div class="tool3">
                                    <img src="img/rubbish-bin-delete-button.png" alt="">
                                </div>
                            </div>
                            <hr>
                        </li>
                        <li class="red_item  ui-state-default" >

                            <h5>Websites, Portfolios, Profiles</h5>
                            <div class="card-body card_li">
                                <ul>
                                    <li><p>link 1</p></li>
                                    <li><p>link 2</p></li>
                                    <li><p>link 3</p></li>
                                    <li><p>link 4</p></li>

                                </ul>

                            </div>
                            <div class="red_tools">
                                <div class="tool1">
                                    <img src="img/pencil-edit-button.png" alt="">
                                </div>
                                <div class="tool2">
                                    <img src="img/move-option.png" alt="">
                                </div>
                                <div class="tool3">
                                    <img src="img/rubbish-bin-delete-button.png" alt="">
                                </div>
                            </div>
                        </li>
                    </ul>




                </div>
                <div class="col-sm-12 col-lg-2 red_right_side">
                    <div class="red_save"> <a href="#"><button class="btn ">Save & Continue</button></a></div>
                    <ul id="accordion" class="accordion">

                        <li>
                            <div class="link">
                                <div class="red_red">
                                    <div><p>Template:<span> Modern 8</span></p></div>
                                    <div class="img"><i class="fas fa-chevron-down"></i></div>

                                </div>
                            </div>
                            <ul class="submenu">
                                <li>
                                    <img src="img/small_02.jpg" alt="">
                                </li>
                                <li>
                                    <img src="img/small_03.jpg" alt="">
                                </li>
                                <li>
                                    <img src="img/small_6.jpg" alt="">
                                </li>
                                <li>
                                    <img src="img/small_02.jpg" alt="">
                                </li>

                            </ul>
                        </li>
                        <li>
                            <div class="link">
                                <div class="red_red">
                                    <div><p>Formatting</p></div>
                                    <div class="img"><i class="fas fa-chevron-down"></i></div>

                                </div>
                            </div>
                            <ul class="submenu submenu2">
                                <li>
                                    <select class="browser-default custom-select">
                                        <option selected>Font style։ Arial</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </li>
                                <li>
                                    <div class="range-slider">
                                        <label for="amoun">Font size։ <span class="range-value" id="range-value"></span></label>
                                        <input class="input-range" id="input-range" id="amoun" type="range" value="10px" min="1px" max="40px">
                                    </div>
                                </li>
                                <li>
                                    <div class="range-slider">
                                        <label for="amoun1">Heading size։ <span class="range-value" id="range-value1"></span></label>
                                        <input class="input-range" id="input-range1" id="amoun1" type="range" value="10px" min="1px" max="40px">
                                    </div>
                                </li>
                                <li>
                                    <div class="range-slider">
                                        <label for="amoun2">Section spacing: <span class="range-value" id="range-value2"></span></label>
                                        <input class="input-range" id="input-range2" id="amoun2" type="range" value="10px" min="1px" max="40px">
                                    </div>
                                </li>
                                <li>
                                    <div class="range-slider">
                                        <label for="amoun3">Paragraph spacing։ <span class="range-value" id="range-value3"></span></label>
                                        <input class="input-range" id="input-range3" id="amoun3" type="range" value="10px" min="1px" max="40px">
                                    </div>
                                </li>
                                <li>
                                    <div class="range-slider">
                                        <label for="amoun4">Line spacing։ <span class="range-value" id="range-value4"></span></label>
                                        <input class="input-range" id="input-range4" id="amoun4" type="range" value="10px" min="1px" max="40px">
                                    </div>
                                </li>
                                <li>
                                    <div class="range-slider">
                                        <label for="amoun5">Top & Bottom margin։ <span class="range-value" id="range-value5"></span></label>
                                        <input class="input-range" id="input-range5" id="amoun5" type="range" value="10px" min="1px" max="40px">
                                    </div>
                                </li>
                                <li>
                                    <div class="range-slider">
                                        <label for="amoun6">Side margin։ <span class="range-value" id="range-value6"></span></label>
                                        <input class="input-range" id="input-range6" id="amoun6" type="range" value="10px" min="1px" max="40px">
                                    </div>
                                </li>
                                <li>
                                    <div class="range-slider">
                                        <label for="amoun7">Paragraph indent։ <span class="range-value" id="range-value7"></span></label>
                                        <input class="input-range" id="input-range7" id="amoun7" type="range" value="10px" min="1px" max="40px">
                                    </div>
                                </li>
                                <li>
                                    <div class="range-slider">
                                        <label for="amoun8">Line weight։ <span class="range-value" id="range-value8"></span></label>
                                        <input class="input-range" id="input-range8" id="amoun8" type="range" value="10px" min="1px" max="40px">
                                    </div>
                                </li>


                            </ul>
                        </li>
                    </ul>
                    <div class="red_tools2">
                        <div class="red_tools2_tool">
                            <h5>Downloads formats</h5>

                            <ul>
                                <li>
                                    <input type="radio" id="a1" name="a">
                                    <label for="a1">PDF</label>
                                </li>
                                <li>
                                    <input type="radio" id="a2" name="a">
                                    <label for="a2">Word</label>
                                </li>
                                <li>
                                    <input type="radio" id="a3" name="a">
                                    <label for="a3">ASCII</label>
                                </li>
                            </ul>
                            <button class="btn btn_tool"><a href="download.html"><i class="fas fa-download"></i>Download</a></button>
                        </div>
                        <div class="red_tools2_tool">
                            <h5>Resume Sections</h5>

                            <ul>
                                <li>
                                    <a href="#">Heading</a>
                                </li>
                                <li>
                                    <a href="#">Additional Information</a>
                                </li>
                                <li>
                                    <a href="#">Skills</a>
                                </li>
                                <li>
                                    <a href="#">Experience</a>
                                </li>

                            </ul>
                            <button class="btn btn_tool"><i class="fas fa-plus"></i>Add a section</button>

                        </div>

                    </div>
                </div>

            </div>

        </section>

    </main>
@endsection