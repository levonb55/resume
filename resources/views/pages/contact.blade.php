@extends('layouts/main')

@section('title', 'Contact')

@section('content')
    <main>
        <section class="contact_section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 contact_img" >
                        <div class="bordered_contact">
                            <ul>
                                <li>
                                    <img src="{{ asset('assets/images/contact_mail.png') }}">
                                    <div class="contain">
                                        <span>Email</span>
                                        <p>example@gmail.com</p>
                                    </div>
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/contact_phone.png') }}">
                                    <div class="contain">
                                        <span>Email</span>
                                        <p>example@gmail.com</p>
                                    </div>
                                </li>
                                <li>
                                    <img src="{{ asset('assets/images/contact_loc.png') }}">
                                    <div class="contain">
                                        <span>Email</span>
                                        <p>example@gmail.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-7 contact_inputs">
                        <div class="text">
                            <h2>Upload your old resume</h2>
                            <hr>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis sit amet lorem eget efficitur. Integer auctor et diam sit amet pretium. Sed blandit elementum massa, quis pretium risus suscipit quis. Aenean eget tortor gravida mauris lacinia euismod id accumsan enim. Mauris nec vestibulum odio. Nulla et pulvinar ante. Curabitur fermentum pulvinar condimentum. Nullam iaculis sed nibh ac placerat. Vestibul</p>
                            <form>
                                <input type="text"  placeholder="Name" class="form-control" id="validationCustom01"  value="" required>
                                <input type="email"  placeholder="E-mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <input  type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                                <button class="btn" type="submit">Start now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection