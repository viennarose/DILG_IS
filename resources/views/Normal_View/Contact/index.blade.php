@extends('layouts.app')

@section('content')
    <div>
        <div class="text-center">
            <img src='img/Background.png' width="1370" style="max-width: 100%; height:auto;">
        </div>
        <p></p>

        <div class="header ml-3 mr-3" style=" padding: 7px; background: #002c76; color: #FFFFFF;  margin-bottom: 5px;">
            <h1 class="text-center" style="font-size: 18px; margin-top: 10px;">CONTACT INFORMATION</h1>
        </div>

        <div class="">
            <div class="card p-5">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-left" style="font-size: 28px; font-weight: 700;">Get in touch with us!</h1>
                        <p class="text-justify" style="font-size: 18px;">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab mollitia quibusdam, autem eos
                            doloremque magnam numquam animi enim quaerat eveniet. Aliquam nisi, labore voluptate
                            voluptatibus voluptas rerum cum perspiciatis nemo!</p>


                        <div class="mx-auto mt-5" style="width: 18rem;">
                            <div class="">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/place.png" style="height: 100px;" alt="">
                                </div>
                                <p class="text-center mt-3" style="font-size: 16px; font-weight: 700;">OFFICE ADDRESS</p>
                                <p class="text-center" style="font-size: 15px; font-weight: 450; margin-top: -15px;">Rajah
                                    Sikatuna Avenue, Dampas, Tagbilaran City 6300</p>
                                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                            </div>
                        </div>


                        <div class=" mx-auto" style="width: 18rem;">
                            <div class="">
                                <div class="d-flex justify-content-center">
                                    <img src="/img/phone.png" style="height: 100px;" alt="">
                                </div>
                                <p class="text-center mt-3" style="font-size: 16px; font-weight: 700;">CONTACT US</p>
                                <p class="text-center" style="font-size: 15px; font-weight: 450; margin-top: -15px;">
                                    Globe - 09178967572 <br>
                                    Smart - 09399302989 <br>
                                    Landline - (038) 422-8038 </p>
                                {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                            </div>
                        </div>


                    </div>
                    <div class="col-md-6">
                        <iframe class="col-md-12"
                            src="https://maps.google.com/maps?q=dilg rajah sikatuna avenue&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade" class="rounded"></iframe>

                        <div class=" p-2 rounded col-md-12 mt-1 mx-auto">
                            <p class="mt-1" style="font-size: 20px; font-weight: 500; color: dimgray"><span> <img
                                        style="height: 30px; width: 40px;" src="img/email_logo.png"
                                        alt=""></span><span class="d-flex justify-content-center"> Email us</span>
                            </p>

                            <div class="form-group">
                                <label for="" style="color:dimgray">To:</label>
                                <input type="text" class="form-control" name="" value="dilg_bohol@gmail.com"
                                    readonly>
                            </div>
                            <div class="form-group">
                                <label for="" style="color:dimgray">Subject:</label>
                                <input type="text" class="form-control" name="">
                            </div>
                            <div class="form-group">
                                <label for="" style="color:dimgray;">Content: </label>
                                <textarea style=" height: 150px;" id="" type="text" class="form-control" placeholder="" title=""
                                    name=""></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
