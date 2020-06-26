<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-27">
    <div class="container br-outbest">
        <div class="row row-top">
            <div class="col-6 col-md-6 mr-outbest">
                <h2>
                    <span>Our</span>
                    Best Services
                </h2>
            </div>
            <div class="col-6 col-md-6 mr-move">
                <a href="#">MORE SERVICES <i class="fa fa-caret-right" aria-hidden="true"></i></a>
            </div>
        </div>
        <div class="contai-benner">
            <div class="row row-center">
                <div class="col-md-4 row-bg border-row">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/planning.PNG" alt="planning" class="img-fluid">
                        </div>
                        <div class="col-md-9">
                            <h4>Texture Painting</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, voluptas! Explicabo
                                vitae
                                perferendis</p>
                            <input type="button" value="READ MORE" class="edit-in">
                        </div>
                    </div>

                </div>
                <div class="col-md-4 row-bg border-row">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/flootring.PNG" alt="planning" class="img-fluid">
                        </div>
                        <div class="col-md-9">
                            <h4>Wooden Flooring</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, voluptas! Explicabo
                                vitae
                                perferendis</p>
                            <input type="button" value="READ MORE" class="edit-in">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 row-bg">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/curtains.PNG" alt="planning" class="img-fluid">
                        </div>
                        <div class="col-md-9">
                            <h4>Interior Curtains</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, voluptas! Explicabo
                                vitae
                                perferendis</p>
                            <input type="button" value="READ MORE" class="edit-in">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-botton">
                <div class="col-md-4 row-bg border-row">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/work.PNG" alt="planning" class="img-fluid">
                        </div>
                        <div class="col-md-9">
                            <h4>Title & Marble Work</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, voluptas! Explicabo
                                vitae
                                perferendis</p>
                            <input type="button" value="READ MORE" class="edit-in">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 row-bg border-row">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/fur-work.PNG" alt="planning" class="img-fluid">
                        </div>
                        <div class="col-md-9">
                            <h4>Furniture Work</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, voluptas! Explicabo
                                vitae
                                perferendis</p>
                            <input type="button" value="READ MORE" class="edit-in">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 row-bg">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="images/ligh-work.PNG" alt="planning" class="img-fluid">
                        </div>
                        <div class="col-md-9">
                            <h4>Lighting Works</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, voluptas! Explicabo
                                vitae
                                perferendis</p>
                            <input type="button" value="READ MORE" class="edit-in">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>