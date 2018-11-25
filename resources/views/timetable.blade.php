<section class="hg_section bg-white pt-80 pb-50">
    <a name="timetable"></a>
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-md-8">
                <!-- Title element -->
                <div class="kl-title-block text-center pb-50">
                    <!-- Title with custom font size and thin style -->
                    <div class="col-md-12">
                        <h3 class="title tcolor text-left">
                            Расписание отправлений
                        </h3>
                    </div>
                </div>
                <!--/ Title element -->

                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>
                            Авто находится:
                        </th>
                        <th>
                            г. {{ $city }}
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Дата отправления:</td>
                        <td>{{ $date }}</td>
                    </tr>
                    <tr>
                        <td>Время отправления:</td>
                        <td>{{ $time }}</td>
                    </tr>
                    <tr>
                        <td>Свободных мест:</td>
                        <td>{{ $places }}</td>
                    </tr>
                    <tr>
                        <td>Забронировать место:</td>
                        <td><strong>{{ $phone }}</strong></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-sm-12 col-md-4">
                <!-- Title element -->
                <div class="kl-title-block text-center">
                    <!-- Title with custom font size and thin style -->
                    <div class="col-md-12">
                        <h3 class="title tcolor text-left">
                            Стоимость
                        </h3>
                    </div>
                </div>
                <!--/ Title element -->

                <!-- Price list element -->
                <div class="priceListElement">
                    <ul>
                        <!-- Item #1 -->
                        <li class="priceListElement-item-1">
                            <div class="priceListElement-itemRight">
                                <div class="priceListElement-itemMain">
                                    <!-- Title -->
                                    <h4 class="priceListElement-itemTitle">
                                        Одно место
                                    </h4>

                                    <div class="priceListElement-dottedSeparator"></div>

                                    <!-- Price -->
                                    <div class="priceListElement-itemPrice">
                                        {{ $price_one }} руб
                                    </div>
                                </div>

                                <!-- Description -->
                                <div class="priceListElement-itemDesc">
                                    <p>
                                        Наличный / безналичный расчет
                                    </p>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                        </li>
                        <!--/ Item #1 -->

                        <!-- Item #2 -->
                        <li class="priceListElement-item-2">
                            <div class="priceListElement-itemRight">
                                <div class="priceListElement-itemMain">
                                    <!-- Title -->
                                    <h4 class="priceListElement-itemTitle">
                                        Машина
                                    </h4>

                                    <div class="priceListElement-dottedSeparator"></div>

                                    <!-- Price -->
                                    <div class="priceListElement-itemPrice">
                                        {{ $price_all }} руб
                                    </div>
                                </div>

                                <!-- Description -->
                                <div class="priceListElement-itemDesc">
                                    <p>
                                        В автомобиле шесть мест
                                    </p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </li>
                        <!--/ Item #2 -->
                    </ul>

                    <div class="clearfix"></div>
                </div>
                <!--/ Price list element -->

                <!-- Title element -->
                <div class="kl-title-block text-center">
                    <!-- Title with custom font size and thin style -->
                    <div class="col-md-12">
                        <h3 class="title tcolor text-left">
                            Финансовая отчетность
                        </h3>
                    </div>
                </div>
                <!--/ Title element -->

                <p>
                    Предаставляем бланки строгой отчетности для организаций
                </p>


            </div>

        </div>
    </div>
</section>
