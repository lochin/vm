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
                    @if ($errors->has('region'))
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('region') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col mb-4">
                    <!-- District -->
                    <select class="browser-default custom-select  form-control{{ $errors->has('district') ? ' is-invalid ' : '' }}" name="district">
                        <option disabled selected>--Ҳудуд--</option>
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
            <small class="text-center"><i class="fas fa-exclamation-circle  text-warning mx-2"></i>Yuklamalar hajmi 5mb dan kichik bo'lishi shart</small>
            <div class="input-default-wrapper mt-2">

                <span class="input-group-text mb-3" id="input2">Upload</span>

                <input type="file" id="file-with-multi-file" name="file_url[]" class="input-default-js" data-multiple-target="{target} files selected"
                       multiple>

                <label class="label-for-default-js rounded-right mb-3" for="file-with-multi-file"><span class="span-choose-file">Choose
                 file</span>

                    <div class="float-right span-browse">Browse</div>

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
    <!-- Modal -->
    <div class="modal fade" id="offerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">

        <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
        <div class="modal-dialog modal-dialog-centered modal-lg my-3" role="document">


            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aspernatur consequuntur cumque debitis doloremque doloribus, error excepturi id in incidunt magnam, minima nam necessitatibus nemo neque nobis recusandae sint suscipit tempora tempore ut velit, vero? Adipisci architecto consequatur enim labore officiis omnis temporibus tenetur. Accusantium blanditiis distinctio eius nihil optio porro quae, soluta sunt vitae voluptas? Cumque deserunt eligendi est expedita fugit labore libero minima natus neque non odit praesentium quibusdam, quos recusandae repudiandae sequi soluta suscipit. Aperiam asperiores dicta dolorum error esse facere ipsam odio, possimus quasi quisquam? A ad architecto at dignissimos, eaque eum expedita fuga minus mollitia nisi odit placeat provident similique. A accusamus aliquid at autem beatae delectus dicta dignissimos dolorem doloribus eaque eum fugiat impedit iure laboriosam maxime minus modi natus obcaecati officiis perferendis porro quae quasi quidem quod, ratione recusandae reprehenderit sed sequi sunt ullam velit vero vitae voluptates. Atque debitis, doloremque eius impedit odit provident quae tempore voluptatem! Doloremque enim facere ipsam laboriosam nam nemo nobis nulla voluptates. Ad aut dolore facere iusto maxime molestiae non officia perspiciatis suscipit voluptatem. Amet architecto consequuntur, cum delectus dignissimos, eveniet laborum numquam odit officia possimus reiciendis temporibus velit! Illum minus numquam qui ratione, reiciendis sequi. Assumenda cumque dolor excepturi inventore ipsam, ipsum, iste iusto molestias necessitatibus nobis quidem repudiandae, soluta vero! Aliquid assumenda at cum enim exercitationem explicabo, illo impedit libero minima nisi perspiciatis porro quae quibusdam quis quo quod ratione voluptates? Ad alias et itaque iure iusto libero nemo quas repudiandae vero voluptate? Autem consectetur consequuntur cupiditate dicta ducimus facilis in maxime nihil, pariatur quod, rem, repellendus! A consectetur dolores doloribus dolorum eius facere facilis inventore nemo saepe vitae. Accusantium adipisci aliquid animi architecto aspernatur autem eius harum in, labore minima minus nihil nostrum omnis optio provident quae, qui quia quibusdam reiciendis repellendus sint ut voluptate? A ab aliquam asperiores commodi, corporis dolores eligendi enim explicabo hic id incidunt magni natus neque nihil odio omnis quos rem sequi sint ut? A accusantium ad adipisci aliquid assumenda aut debitis delectus distinctio dolor dolore dolorem ducimus eaque, eligendi fuga harum laboriosam maiores minima minus nam necessitatibus neque nesciunt nihil, nostrum omnis praesentium quod repellat rerum sunt temporibus unde vel vero voluptatibus voluptatum. Accusantium, amet consectetur culpa doloremque dolores eos error illum ipsam iste molestiae natus, obcaecati quis voluptatem? Assumenda commodi debitis dolor est magni natus perspiciatis quo saepe velit voluptatem. Amet aperiam ea iste iure obcaecati recusandae veritatis? Accusamus aliquid aspernatur aut beatae blanditiis consequuntur, culpa cum cupiditate debitis deserunt dolor dolorum earum et harum illum impedit, itaque libero nam necessitatibus nesciunt nisi nulla porro possimus quaerat qui quo ratione, repellat tempora ullam voluptate? A aliquid consequuntur corporis error esse eveniet harum iusto quia, reprehenderit sit. Aliquam, est facilis molestias quasi repellat similique voluptate. A adipisci aperiam, autem beatae corporis dicta est fugiat illum ipsum laudantium natus odit officia officiis quae quo sint vero! Animi cumque eligendi error esse est ex, fugiat illum labore minima minus nisi nobis obcaecati provident sit soluta tempore ut voluptate voluptatem voluptatibus!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="modalcheck">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    $(document).ready(function(){
     $("#defaultContactFormCopy").click(function(){
        $('#submitform').removeAttr("disabled");
      });
    $("#modalcheck").click(function(){
    $('#submitform').removeAttr("disabled");
    });
    });
@endpush


