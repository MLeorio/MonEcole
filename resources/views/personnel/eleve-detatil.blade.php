@extends('base')

@section('title')
Eleve ~ {{ $eleve->prenom }} {{ $eleve->nom }}
@endsection

@section('menu')
@include('personnel.nav-pers')
@endsection


@php
$dt = explode('-', $eleve->birthday);
$age = date('Y') - $dt[0];

@endphp


@section('content')
<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="profile-info-inner">
                    <div class="profile-img">
                        @if ($eleve->genre == 'Masculin')
                        <img src="{{ asset('base/img/hom.png') }}" alt="" />
                        @else
                        <img src="{{ asset('base/img/fem.png') }}" alt="" />
                        @endif
                    </div>
                    <div class="profile-details-hr" style="background-image: radial-gradient(circle closest-corner at center,
                            yellow, white, Aqua);
                            border-radius: 10px 10px;">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr">
                                    <p> <strong>Nom</strong> <br /> <strong class="ident">{{ $eleve->nom }}</strong>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                    <p><strong>Pr&eacute;nom(s)</strong><br /><strong class="ident">{{ $eleve->prenom }}</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr">
                                    <p><strong>&Acirc;ge</strong><br /><strong class="ident"> {{$age}}
                                            ans</strong>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                    <p><strong>Adresse</strong><br /><strong class="ident">
                                            {{ $eleve->adresse }}</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="address-hr">
                                    <p><strong>Nationalit&eacute;</strong><br /><strong class="ident">{{ $eleve->nationalite }}</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li class="active"><a href="#description">Identit&eacute;</a></li>
                        <li><a href="#reviews"> Cursus Scolaire</a></li>
                        <li><a href="#fact">R&eacute;sultat</a></li>
                        <li><a href="#INFORMATION">Modifier Informations</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
                        <div class="product-tab-list tab-pane fade active in" id="description">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="address-hr biography">
                                                    <p><b>Matricule</b><br />{{ $eleve->matricule }}</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="address-hr biography">
                                                    <p>
                                                        <b>Nom Complet</b><br />
                                                        {{ $eleve->prenom }} {{ $eleve->nom }}
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="address-hr biography">
                                                    <p><b>Adresse</b><br /> {{ $eleve->adresse }}</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                                <div class="address-hr biography">
                                                    <p><b>Nationalit&eacute;</b><br />{{ $eleve->nationalite }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row mg-b-15">
                                            <div class="col-lg-12">
                                                -
                                            </div>
                                        </div>
                                        <div class="row mg-b-15">
                                            <div class="col-lg-12">
                                                <div class="row mg-b-15">
                                                    <div class="col-lg-12">
                                                        <div class="skill-title">
                                                            <h2>Classes fr&eacute;quent&eacute;ees</h2>
                                                            <hr />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ex-pro">
                                                    <ul>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit
                                                            amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit
                                                            amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit
                                                            amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit
                                                            amet, consectetur adipiscing elit.</li>
                                                        <li><i class="fa fa-angle-right"></i> Lorem ipsum dolor sit
                                                            amet, consectetur adipiscing elit.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="reviews">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="chat-discussion" style="height: auto">
                                            <div class="chat-message">
                                                <div class="profile-hdtc">
                                                    <img class="message-avatar" src="img/contact/1.jpg" alt="">
                                                </div>
                                                <div class="message">
                                                    <a class="message-author" href="#"> Michael Smith </a>
                                                    <span class="message-date"> Mon Jan 26 2015 - 18:39:23 </span>
                                                    <span class="message-content">Lorem ipsum dolor sit amet,
                                                        consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                                        tincidunt ut laoreet dolore magna aliquam erat volutpat.
                                                    </span>
                                                    <div class="m-t-md mg-t-10">
                                                        <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                        <a class="btn btn-xs btn-success"><i class="fa fa-heart"></i>
                                                            Love</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-message">
                                                <div class="profile-hdtc">
                                                    <img class="message-avatar" src="img/contact/2.jpg" alt="">
                                                </div>
                                                <div class="message">
                                                    <a class="message-author" href="#"> Karl Jordan </a>
                                                    <span class="message-date"> Fri Jan 25 2015 - 11:12:36 </span>
                                                    <span class="message-content">
                                                        Many desktop publishing packages and web page editors now use
                                                        Lorem Ipsum as their default model text, and a search for 'lorem
                                                        ipsum' will uncover.
                                                    </span>
                                                    <div class="m-t-md mg-t-10">
                                                        <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                        <a class="btn btn-xs btn-default"><i class="fa fa-heart"></i>
                                                            Love</a>
                                                        <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i>
                                                            Message</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-message">
                                                <div class="profile-hdtc">
                                                    <img class="message-avatar" src="img/contact/3.jpg" alt="">
                                                </div>
                                                <div class="message">
                                                    <a class="message-author" href="#"> Michael Smith </a>
                                                    <span class="message-date"> Fri Jan 25 2015 - 11:12:36 </span>
                                                    <span class="message-content">
                                                        There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have suffered alteration.
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="chat-message">
                                                <div class="profile-hdtc">
                                                    <img class="message-avatar" src="img/contact/4.jpg" alt="">
                                                </div>
                                                <div class="message">
                                                    <a class="message-author" href="#"> Alice Jordan </a>
                                                    <span class="message-date"> Fri Jan 25 2015 - 11:12:36 </span>
                                                    <span class="message-content">
                                                        All the Lorem Ipsum generators on the Internet tend to repeat
                                                        predefined chunks as necessary, making this the first true
                                                        generator on the Internet.
                                                        It uses a dictionary of over 200 Latin words.
                                                    </span>
                                                    <div class="m-t-md mg-t-10">
                                                        <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                        <a class="btn btn-xs btn-warning"><i class="fa fa-eye"></i>
                                                            Nudge</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-message">
                                                <div class="profile-hdtc">
                                                    <img class="message-avatar" src="img/contact/1.jpg" alt="">
                                                </div>
                                                <div class="message">
                                                    <a class="message-author" href="#"> Mark Smith </a>
                                                    <span class="message-date"> Fri Jan 25 2015 - 11:12:36 </span>
                                                    <span class="message-content">
                                                        All the Lorem Ipsum generators on the Internet tend to repeat
                                                        predefined chunks as necessary, making this the first true
                                                        generator on the Internet.
                                                        It uses a dictionary of over 200 Latin words.
                                                    </span>
                                                    <div class="m-t-md mg-t-10">
                                                        <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                        <a class="btn btn-xs btn-success"><i class="fa fa-heart"></i>
                                                            Love</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-message">
                                                <div class="profile-hdtc">
                                                    <img class="message-avatar" src="img/contact/2.jpg" alt="">
                                                </div>
                                                <div class="message">
                                                    <a class="message-author" href="#"> Karl Jordan </a>
                                                    <span class="message-date"> Fri Jan 25 2015 - 11:12:36 </span>
                                                    <span class="message-content">
                                                        Many desktop publishing packages and web page editors now use
                                                        Lorem Ipsum as their default model text, and a search for 'lorem
                                                        ipsum' will uncover.
                                                    </span>
                                                    <div class="m-t-md mg-t-10">
                                                        <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                        <a class="btn btn-xs btn-default"><i class="fa fa-heart"></i>
                                                            Love</a>
                                                        <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i>
                                                            Message</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="chat-message">
                                                <div class="profile-hdtc">
                                                    <img class="message-avatar" src="img/contact/3.jpg" alt="">
                                                </div>
                                                <div class="message">
                                                    <a class="message-author" href="#"> Michael Smith </a>
                                                    <span class="message-date"> Fri Jan 25 2015 - 11:12:36 </span>
                                                    <span class="message-content">
                                                        There are many variations of passages of Lorem Ipsum available,
                                                        but the majority have suffered alteration.
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="chat-message">
                                                <div class="profile-hdtc">
                                                    <img class="message-avatar" src="img/contact/4.jpg" alt="">
                                                </div>
                                                <div class="message">
                                                    <a class="message-author" href="#"> Alice Jordan </a>
                                                    <span class="message-date"> Fri Jan 25 2015 - 11:12:36 </span>
                                                    <span class="message-content">
                                                        All the Lorem Ipsum generators on the Internet tend to repeat
                                                        predefined chunks as necessary, making this the first true
                                                        generator on the Internet.
                                                        It uses a dictionary of over 200 Latin words.
                                                    </span>
                                                    <div class="m-t-md mg-t-10">
                                                        <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                        <a class="btn btn-xs btn-default"><i class="fa fa-heart"></i>
                                                            Love</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab-list tab-pane fade" id="INFORMATION">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <input name="number" type="text" class="form-control" placeholder="First Name">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Last Name">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Address">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Date of Birth">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Department">
                                                </div>
                                                <div class="form-group">
                                                    <input type="number" class="form-control" placeholder="Pincode">
                                                </div>
                                                <div class="file-upload-inner ts-forms">
                                                    <div class="input prepend-big-btn">
                                                        <label class="icon-right" for="prepend-big-btn">
                                                            <i class="fa fa-download"></i>
                                                        </label>
                                                        <div class="file-button">
                                                            Browse
                                                            <input type="file" onchange="document.getElementById('prepend-big-btn').value = this.value;">
                                                        </div>
                                                        <input type="text" id="prepend-big-btn" placeholder="no file selected">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group sm-res-mg-15 tbpf-res-mg-15">
                                                    <input type="text" class="form-control" placeholder="Description">
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>Select Gender</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>Select country</option>
                                                        <option>India</option>
                                                        <option>Pakistan</option>
                                                        <option>Amerika</option>
                                                        <option>China</option>
                                                        <option>Dubai</option>
                                                        <option>Nepal</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>Select state</option>
                                                        <option>Gujarat</option>
                                                        <option>Maharastra</option>
                                                        <option>Rajastan</option>
                                                        <option>Maharastra</option>
                                                        <option>Rajastan</option>
                                                        <option>Gujarat</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-control">
                                                        <option>Select city</option>
                                                        <option>Surat</option>
                                                        <option>Baroda</option>
                                                        <option>Navsari</option>
                                                        <option>Baroda</option>
                                                        <option>Surat</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Website URL">
                                                </div>
                                                <input type="number" class="form-control" placeholder="Mobile no.">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="payment-adress mg-t-15">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection