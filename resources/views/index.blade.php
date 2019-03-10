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
        <!-- Section: Testimonials v.2 -->
        <!-- Default form contact -->
        <form class="text-center p-5">

            <p class="h4 mb-4">Виртуал қабулхонага мурожаат юборинг</p>

            <div class="form-row mb-2">
                <div class="col">
                    <!-- First name -->
                    <input type="text" class="form-control mb-4" placeholder="Исм" />
                </div>
                <div class="col">
                    <!-- Last name -->
                    <input type="text" class="form-control mb-4" placeholder="Фамилия" />
                </div>
            </div>

            <div class="form-row mb-2">
                <div class="col">
                    <!-- Email -->
                    <input type="email" class="form-control mb-4" placeholder="Электрон почта" />
                </div>
                <div class="col">
                    <!-- Phone number -->
                    <input type="text" class="form-control mb-4" placeholder="Телефон рақами" />
                </div>
            </div>

            <div class="form-row mb-2">
                <div class="col">
                    <!-- City -->
                    <select class="browser-default custom-select mb-4">
                        <option disabled selected>--Ҳудуд--</option>
                        <option value="1703">Андижон вилояти</option>
                        <option value="1706">Бухоро вилояти</option>
                        <option value="1708">Жиззах вилояти</option>
                        <option value="1710">Қашқадарё вилояти</option>
                        <option value="1712">Навоий вилояти</option>
                        <option value="1714">Наманган вилояти</option>
                        <option value="1718">Самарқанд вилояти</option>
                        <option value="1722">Сурхондарё вилояти</option>
                        <option value="1724">Сирдарё вилояти</option>
                        <option value="1726">Тошкент шаҳри</option>
                        <option value="1727">Тошкент вилояти</option>
                        <option value="1730">Фарғона вилояти</option>
                        <option value="1733">Хоразм вилояти</option>
                        <option value="1735">Қорақалпоғистон Республикаси</option>
                        <option value="9999">Чет эл</option></select>
                    </select>
                </div>
                <div class="col">
                    <!-- District -->
                    <select class="browser-default custom-select mb-4">
                        <option disabled selected></option>
                        <option value="1726262">Учтепа тумани</option>
                        <option value="1726264">Бектемир тумани</option>
                        <option value="1726266">Юнусобод тумани</option>
                        <option value="1726269">Мирзо Улуғбек тумани</option>
                        <option value="1726273">Миробод тумани</option>
                        <option value="1726277">Шайхонтоҳур тумани</option>
                        <option value="1726280">Олмазор тумани</option>
                        <option value="1726283">Сирғали тумани</option>
                        <option value="1726287">Яккасарой тумани</option>
                        <option value="1726290">Яшнобод тумани</option>
                        <option value="1726294">Чилонзор тумани</option>
                    </select>
                </div>
            </div>

            <!-- Message -->
            <div class="form-group">
             <textarea class="form-control rounded-0" rows="5" placeholder="Мурожаат матни" ></textarea>
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
            <button class="btn btn-info btn-block" type="submit">Жўнатиш</button>
        </form>
        <!-- Default form contact -->
    </div>
@endsection



