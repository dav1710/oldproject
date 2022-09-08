@extends('layouts.app')
@section('title') Media @endsection




@section('content')
<div class="scroll_header">
    <ul class="nav nav-tabs container d-flex flex-row justify-content-evenly scroll_nav media_center" id="myTab" role="tablist">
        <li class="nav-item nav_media_item" role="presentation">
          <button class="nav-link custom_list_group_action media_center_btn active" id="section1-tab" data-bs-toggle="tab" data-bs-target="#section1" type="button" role="tab" aria-controls="section1" aria-selected="true">Նորություններ</button>
        </li>
        <li class="nav-item nav_media_item" role="presentation">
          <button class="nav-link custom_list_group_action media_center_btn" id="section2-tab" data-bs-toggle="tab" data-bs-target="#section2" type="button" role="tab" aria-controls="section2" aria-selected="false">Հարցազրույցներ և ելույթներ</button>
        </li>
        <li class="nav-item nav_media_item" role="presentation">
          <button class="nav-link custom_list_group_action media_center_btn" id="section3-tab" data-bs-toggle="tab" data-bs-target="#section3" type="button" role="tab" aria-controls="section3" aria-selected="false">Տեսանյութեր</button>
        </li>
        <li class="nav-item nav_media_item" role="presentation">
          <button class="nav-link custom_list_group_action media_center_btn" id="section4-tab" data-bs-toggle="tab" data-bs-target="#section4" type="button" role="tab" aria-controls="section4" aria-selected="false">Հայտարարություններ</button>
        </li>
        <li class="nav-item nav_media_item" role="presentation">
          <button class="nav-link custom_list_group_action media_center_btn" id="section5-tab" data-bs-toggle="tab" data-bs-target="#section5" type="button" role="tab" aria-controls="section5" aria-selected="false">Հաջողված պատմություններ</button>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane container_section media_container_section fade show active" id="section1" role="tabpanel" aria-labelledby="section1-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>Նորություններ</p>
                </div>
            </div>
            <div class="d-flex flex-column directions_applications">
                <div class="row mb-5">
                    <div class="col">
                        <div class="card course_card" style="width: 100%;">
                            <img src="{{ asset('img/course.png') }}" class="card-img-top" alt="...">
                            <div class="card-body course_body">
                              <p class="card-text course_text">Որո՞նք են կանանց իրավունքների խախտմանը նպաստող պայմաններն աշխատավայրում</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card course_card" style="width: 100%;">
                            <img src="{{ asset('img/course1.png') }}" class="card-img-top" alt="...">
                            <div class="card-body course_body">
                              <p class="card-text course_text">Ե՞րբ է լուծվում աշխատանքային պայմանագիրը</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card course_card" style="width: 100%;">
                            <img src="{{ asset('img/course2.png') }}" class="card-img-top" alt="...">
                            <div class="card-body course_body">
                              <p class="card-text course_text">Ի՞նչ պետք է իմանա աշխատանքի ընդունվելու համար փորձաշրջան անցնող քաղաքացին</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col">
                        <div class="card course_card" style="width: 100%;">
                            <img src="{{ asset('img/course3.png') }}" class="card-img-top" alt="...">
                            <div class="card-body course_body">
                              <p class="card-text course_text">Որո՞նք են կանանց իրավունքների խախտմանը նպաստող պայմաններն աշխատավայրում</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card course_card" style="width: 100%;">
                            <img src="{{ asset('img/course4.png') }}" class="card-img-top" alt="...">
                            <div class="card-body course_body">
                              <p class="card-text course_text">Ե՞րբ է լուծվում աշխատանքային պայմանագիրը</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card course_card" style="width: 100%;">
                            <img src="{{ asset('img/course5.png') }}" class="card-img-top" alt="...">
                            <div class="card-body course_body">
                              <p class="card-text course_text">Ի՞նչ պետք է իմանա աշխատանքի ընդունվելու համար փորձաշրջան անցնող քաղաքացին</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col">
                        <div class="card course_card" style="width: 100%;">
                            <img src="{{ asset('img/course.png') }}" class="card-img-top" alt="...">
                            <div class="card-body course_body">
                              <p class="card-text course_text">Որո՞նք են կանանց իրավունքների խախտմանը նպաստող պայմաններն աշխատավայրում</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card course_card" style="width: 100%;">
                            <img src="{{ asset('img/course1.png') }}" class="card-img-top" alt="...">
                            <div class="card-body course_body">
                              <p class="card-text course_text">Ե՞րբ է լուծվում աշխատանքային պայմանագիրը</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card course_card" style="width: 100%;">
                            <img src="{{ asset('img/course2.png') }}" class="card-img-top" alt="...">
                            <div class="card-body course_body">
                              <p class="card-text course_text">Ի՞նչ պետք է իմանա աշխատանքի ընդունվելու համար փորձաշրջան անցնող քաղաքացին</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane container_section media_container_section fade" id="section2" role="tabpanel" aria-labelledby="section2-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>Ուղեցույց</p>
                </div>
            </div>
           <div class="d-flex flex-column directions_applications">
            <div class="report_news d-flex flex-column">
                <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց սպառողների իրավունքների ու պարտականությունների վերաբերյալ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց ուսուցիչների համար «Եկեք սովորենք երեխայի իրավունքները»
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">ՈԻՂԵՑՈՒՅՑ Շինարարության թույլտվության տրամադրման կարգի վերաբերյալ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց անձնական օգտագործման ապրանքներ Հայաստանի Հանրապետություն արտոնություններով ներմուծելու կանոնների վերաբերյալ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց պատերազմի հետեւանքով Լեռնային Ղարաբաղից տեղահանված մարդկանց համար
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պարսկերեն. حمایت مدافع حقوق بشر در چارچوب وضعیت مکانیسم ملی پیشگیری
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Արաբերեն. مساندة المدافع عن حقوق الإنسان في إطار كونه آلية وطنية للوقاية
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Մարդու իրավունքների պաշտպանը որպես կանխարգելման ազգային մեխանիզմ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Իսպաներեն. Asistencia de Defensor de derechos humanos en el marco de Mechanismo Nacional de Prevención
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ռուսերեն. Поддержка Защитника а прав человека в рамках стауса национального превентивного механизма
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ֆրանսերեն. Soutien du Defenseur des droits de l'homme dans les cadres du statut du Mechanisme National de Prevention
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Կորոնավիրուսի մասին ուղեցույց երեխաների համար
                    </a>
                  </div>
              </div>
           </div>
        </div>
        <div class="tab-pane container_section media_container_section fade" id="section3" role="tabpanel" aria-labelledby="section3-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>Ուղեցույց</p>
                </div>
            </div>
           <div class="d-flex flex-column directions_applications">
            <div class="report_news d-flex flex-column">
                <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց սպառողների իրավունքների ու պարտականությունների վերաբերյալ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց ուսուցիչների համար «Եկեք սովորենք երեխայի իրավունքները»
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">ՈԻՂԵՑՈՒՅՑ Շինարարության թույլտվության տրամադրման կարգի վերաբերյալ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց անձնական օգտագործման ապրանքներ Հայաստանի Հանրապետություն արտոնություններով ներմուծելու կանոնների վերաբերյալ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց պատերազմի հետեւանքով Լեռնային Ղարաբաղից տեղահանված մարդկանց համար
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պարսկերեն. حمایت مدافع حقوق بشر در چارچوب وضعیت مکانیسم ملی پیشگیری
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Արաբերեն. مساندة المدافع عن حقوق الإنسان في إطار كونه آلية وطنية للوقاية
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Մարդու իրավունքների պաշտպանը որպես կանխարգելման ազգային մեխանիզմ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Իսպաներեն. Asistencia de Defensor de derechos humanos en el marco de Mechanismo Nacional de Prevención
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ռուսերեն. Поддержка Защитника а прав человека в рамках стауса национального превентивного механизма
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ֆրանսերեն. Soutien du Defenseur des droits de l'homme dans les cadres du statut du Mechanisme National de Prevention
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Կորոնավիրուսի մասին ուղեցույց երեխաների համար
                    </a>
                  </div>
              </div>
           </div>
        </div>
        <div class="tab-pane container_section media_container_section fade" id="section4" role="tabpanel" aria-labelledby="section4-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>Ուղեցույց</p>
                </div>
            </div>
           <div class="d-flex flex-column directions_applications">
            <div class="report_news d-flex flex-column">
                <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց սպառողների իրավունքների ու պարտականությունների վերաբերյալ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց ուսուցիչների համար «Եկեք սովորենք երեխայի իրավունքները»
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">ՈԻՂԵՑՈՒՅՑ Շինարարության թույլտվության տրամադրման կարգի վերաբերյալ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց անձնական օգտագործման ապրանքներ Հայաստանի Հանրապետություն արտոնություններով ներմուծելու կանոնների վերաբերյալ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց պատերազմի հետեւանքով Լեռնային Ղարաբաղից տեղահանված մարդկանց համար
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պարսկերեն. حمایت مدافع حقوق بشر در چارچوب وضعیت مکانیسم ملی پیشگیری
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Արաբերեն. مساندة المدافع عن حقوق الإنسان في إطار كونه آلية وطنية للوقاية
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Մարդու իրավունքների պաշտպանը որպես կանխարգելման ազգային մեխանիզմ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Իսպաներեն. Asistencia de Defensor de derechos humanos en el marco de Mechanismo Nacional de Prevención
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ռուսերեն. Поддержка Защитника а прав человека в рамках стауса национального превентивного механизма
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ֆրանսերեն. Soutien du Defenseur des droits de l'homme dans les cadres du statut du Mechanisme National de Prevention
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Կորոնավիրուսի մասին ուղեցույց երեխաների համար
                    </a>
                  </div>
              </div>
           </div>
        </div>
        <div class="tab-pane container_section media_container_section fade" id="section5" role="tabpanel" aria-labelledby="section5-tab">
            <div class="d-flex align-items-baseline contact_us_action">
                <div class="line_2"></div>
                <div class="contact_us_action_title">
                    <p>Ուղեցույց</p>
                </div>
            </div>
           <div class="d-flex flex-column directions_applications">
            <div class="report_news d-flex flex-column">
                <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց սպառողների իրավունքների ու պարտականությունների վերաբերյալ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց ուսուցիչների համար «Եկեք սովորենք երեխայի իրավունքները»
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">ՈԻՂԵՑՈՒՅՑ Շինարարության թույլտվության տրամադրման կարգի վերաբերյալ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց անձնական օգտագործման ապրանքներ Հայաստանի Հանրապետություն արտոնություններով ներմուծելու կանոնների վերաբերյալ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ուղեցույց պատերազմի հետեւանքով Լեռնային Ղարաբաղից տեղահանված մարդկանց համար
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Պարսկերեն. حمایت مدافع حقوق بشر در چارچوب وضعیت مکانیسم ملی پیشگیری
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Արաբերեն. مساندة المدافع عن حقوق الإنسان في إطار كونه آلية وطنية للوقاية
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Մարդու իրավունքների պաշտպանը որպես կանխարգելման ազգային մեխանիզմ
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Իսպաներեն. Asistencia de Defensor de derechos humanos en el marco de Mechanismo Nacional de Prevención
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ռուսերեն. Поддержка Защитника а прав человека в рамках стауса национального превентивного механизма
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Ֆրանսերեն. Soutien du Defenseur des droits de l'homme dans les cadres du statut du Mechanisme National de Prevention
                    </a>
                  </div>
                  <div class="report_news d-flex flex-column">
                    <a class="report_pdf report_pdf_news" href="!#" class="mb-3">
                        <img src="{{ asset('img/icons/pdf.png') }}" alt="pdf">Կորոնավիրուսի մասին ուղեցույց երեխաների համար
                    </a>
                  </div>
              </div>
           </div>
        </div>
      </div>
</div>
@endsection
