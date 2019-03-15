@extends('layouts.app')

@section('content')
    <div class="container">
        <!-- Section: Testimonials -->
        <section class="text-center mt-5 px-5">

            <div class="wrapper-carousel-fix">
                <!-- Carousel Wrapper -->
                <div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide carousel-fade" data-ride="carousel"
                     data-interval="false">
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <!--First slide-->
                        <div class="carousel-item active">
                            <div class="testimonial">
                                <!--Content-->
                                <p>
                                    <i class="fas fa-quote-left"></i>
                                    "Халқ давлат органларига эмас, давлат органлари халққа хизмат қилиши керак" деган принцип барча бўғиндаги раҳбарлар фаолиятида асосий қоидага айланиши керак"
                                    <i class="fas fa-quote-right"></i>
                                </p>
                                <h4 class="font-weight-bold">Шавкат Мирзиёев</h4>
                                <h6 class="font-weight-bold my-3">Ўзбекистон Республикаси Президенти</h6>
                            </div>
                        </div>
                        <!--First slide-->
                        <!--Second slide-->
                        <div class="carousel-item">
                            <div class="testimonial">
                                <!--Content-->
                                <p>
                                    <i class="fas fa-quote-left"></i>
                                    "Бизнинг мақсадимиз — халқ ҳокимиятини сўзда эмас, амалда таъминлашдан иборат. Бу — биз яшаётган бугунги мураккаб даврнинг асосий талабидир. Такрор айтишга тўғри келади — одамларимиз ўз ҳаётида ижобий ўзгаришларни бугун кутмоқда.
                                    <i class="fas fa-quote-right"></i>
                                </p>
                                <h4 class="font-weight-bold">Шавкат Мирзиёев</h4>
                                <h6 class="font-weight-bold my-3">Ўзбекистон Республикаси Президенти</h6>
                            </div>
                        </div>
                        <!--Second slide-->
                        <!--Third slide-->
                        <div class="carousel-item">
                            <div class="testimonial">
                                <!--Content-->
                                <p>
                                    <i class="fas fa-quote-left"></i>
                                    "Халқ давлат органларига эмас, давлат органлари халққа хизмат қилиши керак" деган принцип барча бўғиндаги раҳбарлар фаолиятида асосий қоидага айланиши керак"
                                    <i class="fas fa-quote-right"></i>
                                </p>
                                <h4 class="font-weight-bold">Шавкат Мирзиёев</h4>
                                <h6 class="font-weight-bold my-3">Ўзбекистон Республикаси Президенти</h6>
                            </div>
                        </div>
                        <!--Third slide-->
                    </div>
                    <!--Slides-->
                    <!--Controls-->
                    <a class="carousel-control-prev left carousel-control" href="#carousel-example-1" role="button"
                       data-slide="prev">
                        <span class="icon-prev" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next right carousel-control" href="#carousel-example-1" role="button"
                       data-slide="next">
                        <span class="icon-next" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!--Controls-->
                </div>
                <!-- Carousel Wrapper -->
            </div>

        </section>
        @if(session()->get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('success') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <!-- Section: Testimonials v.2 -->
        <!-- Default form contact -->
        <form class="text-center p-5 needs-validation" action="{{route('xabar.store')}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('POST')
            <p class="h4 mb-4">Виртуал қабулхонага мурожаат юборинг</p>

            <div class="form-row mb-2">
                <div class="col mb-4">
                    <!-- First name -->
                    <input type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }} " name="firstname" placeholder="Исм" value="{{old('firstname')}}" />
                    @if ($errors->has('firstname'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col mb-4">
                    <!-- Last name -->
                    <input type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }} " name="lastname" placeholder="Фамилия" value="{{old('lastname')}}" />
                    @if ($errors->has('lastname'))
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('lastname') }}</strong>

                    </span>
                    @endif

                </div>
            </div>

            <div class="form-row mb-2">
                <div class="col mb-4">
                    <!-- Email -->
                    <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} " name="email" placeholder="Электрон почта" value="{{old('email')}}" />
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>

                    </span>
                    @endif
                </div>
                <div class="col mb-4">
                    <!-- Phone number -->
                    <input type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid mb-0' : '' }} " name="phone" placeholder="Телефон рақами" value="{{old('phone')}}" />
                    @if ($errors->has('phone'))
                        <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('phone') }}</strong>

                    </span>
                    @endif
                </div>
            </div>

            <div class="form-row mb-2">
                <div class="col mb-4">
                    <!-- City -->
                    <select class="browser-default custom-select  form-control{{ $errors->has('region') ? ' is-invalid ' : '' }} " name="region">
                        <option disabled selected>--Ҳудуд--</option>
                        <option value="Андижон вилояти">Андижон вилояти</option>
                        <option value="Бухоро вилояти">Бухоро вилояти</option>
                        <option value="Жиззах вилояти">Жиззах вилояти</option>
                        <option value="Қашқадарё вилояти">Қашқадарё вилояти</option>
                        <option value="Навоий вилояти">Навоий вилояти</option>
                        <option value="Наманган вилояти">Наманган вилояти</option>
                        <option value="Самарқанд вилояти">Самарқанд вилояти</option>
                        <option value="Сурхондарё вилояти">Сурхондарё вилояти</option>
                        <option value="Сирдарё вилояти">Сирдарё вилояти</option>
                        <option value="Тошкент шаҳри">Тошкент шаҳри</option>
                        <option value="Тошкент вилояти">Тошкент вилояти</option>
                        <option value="Фарғона вилояти">Фарғона вилояти</option>
                        <option value="Хоразм вилояти">Хоразм вилояти</option>
                        <option value="Қорақалпоғистон Республикаси">Қорақалпоғистон Республикаси</option>
                        <option value="Чет эл">Чет эл</option></select>
                    </select>
                    @if ($errors->has('region'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('region') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col mb-4">
                    <!-- District -->
                    <select class="browser-default custom-select  form-control{{ $errors->has('district') ? ' is-invalid ' : '' }}" name="district">
                        <option disabled selected>--Туман--</option>
                        <option value="Учтепа тумани">Учтепа тумани</option>
                        <option value="Бектемир тумани">Бектемир тумани</option>
                        <option value="Юнусобод тумани">Юнусобод тумани</option>
                        <option value="Мирзо Улуғбек тумани">Мирзо Улуғбек тумани</option>
                        <option value="Миробод тумани">Миробод тумани</option>
                        <option value="Шайхонтоҳур тумани">Шайхонтоҳур тумани</option>
                        <option value="Олмазор тумани">Олмазор тумани</option>
                        <option value="Сирғали тумани">Сирғали тумани</option>
                        <option value="Яккасарой тумани">Яккасарой тумани</option>
                        <option value="Яшнобод тумани">Яшнобод тумани</option>
                        <option value="Чилонзор тумани">Чилонзор тумани</option>
                    </select>
                    @if ($errors->has('district'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('district') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <!-- Message -->
            <div class="form-group">
             <textarea class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }} rounded-0" rows="5" placeholder="Мурожаат матни" name="message" >{{old('message')}}</textarea>
                @if ($errors->has('message'))
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('message') }}</strong>

                    </span>
                @endif
            </div>
            {{--file upload--}}
            <small class="text-center"><i class="fas fa-exclamation-circle  text-warning mx-2"></i>Юкламалар ҳажми 5МБ дан кичик бўлиши шарт</small>
            <div class="input-default-wrapper mt-2">

                <input type="file" id="file-with-multi-file" name="file_url[]" class="input-default-js" data-multiple-target="{target} files selected"
                       multiple>

                <label class="label-for-default-js rounded-right mb-3" for="file-with-multi-file"><span class="span-choose-file">Файлларни юкланг</span>

                    <div class="float-right span-browse">Файлларни танлаш</div>

                </label>

            </div>
            <!-- Copy -->
            <div class="custom-control custom-checkbox mb-4">
                <input
                        type="checkbox"
                        class="custom-control-input"
                        id="defaultContactFormCopy"
                />
                <label class="custom-control-label" for="defaultContactFormCopy"
                ><span>Фойдаланиш <a href="#" id="RequestFormModel-offerModal-trigger" data-toggle="modal" data-target="#offerModal">қоидалари</a> билан танишдим</span></label>
            </div>

            <!-- Send button -->
            <button class="btn btn-info btn-block" type="submit" id="submitform" disabled>Жўнатиш</button>
        </form>
        <!-- Default form contact -->
    </div>
@endsection
@push('js')

    @endpush


