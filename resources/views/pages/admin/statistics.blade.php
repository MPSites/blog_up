@extends('layouts.admin.layout')

@section('content')
    <!-- STATISTIC-->
    <section class="statistic statistic2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--green">
                        <h2 class="number">{{ $users->count() }}</h2>
                        <span class="desc">Registered users</span>
                        <div class="icon">
                            <i class="zmdi zmdi-account-o"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--blue">
                        <h2 class="number">{{ $posts->count() }}</h2>
                        <span class="desc">Posts this week</span>
                        <div class="icon">
                            <i class="zmdi zmdi-assignment-o"></"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--orange">
                        <h2 class="number">{{ $comments->count() }}</h2>
                        <span class="desc">Comments posted</span>
                        <div class="icon">
                            <i class="zmdi zmdi-comment-list"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="statistic__item statistic__item--red">
                        <h2 class="number">{{ $categories->count() }}</h2>
                        <span class="desc">Categories</span>
                        <div class="icon">
                            <i class="zmdi zmdi-star-half"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END STATISTIC-->
    <!-- STATISTIC CHART-->
    <section class="statistic-chart">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-5 m-b-35">statistics</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <!-- CHART-->
                    <div class="statistic-chart-1">
                        <h3 class="title-3 m-b-30">chart</h3>
                        <div class="chart-wrap">
                            <canvas id="widgetChart5"></canvas>
                        </div>
                        <div class="statistic-chart-1-note">
                            <span class="big">{{ $posts->count() }}</span>
                            <span>/ items posted</span>
                        </div>
                    </div>
                    <!-- END CHART-->
                </div>
                <div class="col-md-6 col-lg-4">
                    <!-- TOP CAMPAIGN-->
                    <div class="top-campaign">
                        <h3 class="title-3 m-b-30">top bloggers / last 24h</h3>
                        <div class="table-responsive">
                            <table class="table table-top-campaign">
                                <tbody>
                                    @foreach ($topAuth as $auth)
                                        <tr>
                                            <td>{{ $loop->index+1 }}. {{ $auth->username }}</td>
                                            <td>{{ $auth->posts->count() }} posts</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END TOP CAMPAIGN-->
                </div>
                <div class="col-md-6 col-lg-4">
                    <!-- CHART PERCENT-->
                    <div class="chart-percent-2">
                        <h3 class="title-3 m-b-30">chart by %</h3>
                        <div class="chart-wrap">
                            <canvas id="percent-chart2"></canvas>
                            <div id="chartjs-tooltip">
                                <table></table>
                            </div>
                        </div>
                        <div class="chart-info">
                            <div class="chart-note">
                                <span class="dot dot--blue"></span>
                                <span>Themed</span>
                            </div>
                            <div class="chart-note">
                                <span class="dot dot--red"></span>
                                <span>Other</span>
                            </div>
                        </div>
                    </div>
                    <!-- END CHART PERCENT-->
                </div>
            </div>
        </div>
    </section>
    <!-- END STATISTIC CHART-->
@endsection