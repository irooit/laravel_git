@extends('admin::stackadmin.layouts._main')
@section('content')
    <!-- fitness target -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5">
                            <div class="my-1 text-center">
                                <div class="card-header mb-2 pt-0">
                                    <h5 class="primary">Steps</h5>
                                    <h3 class="font-large-2 text-bold-200">3,261</h3>
                                </div>
                                <div class="card-content">
                                    <input type="text" value="65" class="knob hide-value responsive angle-offset" data-angleOffset="40"
                                           data-thickness=".15" data-linecap="round" data-width="130"
                                           data-height="130" data-inputColor="#BABFC7" data-readOnly="true"
                                           data-fgColor="#00B5B8" data-knob-icon="icon-trophy">
                                    <ul class="list-inline clearfix pt-1 mb-0">
                                        <li class="border-right-grey border-right-lighten-2 pr-2">
                                            <h2 class="grey darken-1 text-bold-400">65%</h2>
                                            <span class="primary">
                              <span class="ft-arrow-up"></span> Completed</span>
                                        </li>
                                        <li class="pl-2">
                                            <h2 class="grey darken-1 text-bold-400">35%</h2>
                                            <span class="danger">
                              <span class="ft-arrow-down"></span> Remaining</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5">
                            <div class="my-1 text-center">
                                <div class="card-header mb-2 pt-0">
                                    <h5 class="danger">Distance</h5>
                                    <h3 class="font-large-2 text-bold-200">7.6
                                        <span class="font-medium-1 grey darken-1 text-bold-400">mile</span>
                                    </h3>
                                </div>
                                <div class="card-content">
                                    <input type="text" value="70" class="knob hide-value responsive angle-offset" data-angleOffset="0"
                                           data-thickness=".15" data-linecap="round" data-width="130"
                                           data-height="130" data-inputColor="#BABFC7" data-readOnly="true"
                                           data-fgColor="#FF7588" data-knob-icon="icon-pointer">
                                    <ul class="list-inline clearfix pt-1 mb-0">
                                        <li>
                                            <h2 class="grey darken-1 text-bold-400">10</h2>
                                            <span class="danger">Miles Today's Target</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12 border-right-blue-grey border-right-lighten-5">
                            <div class="my-1 text-center">
                                <div class="card-header mb-2 pt-0">
                                    <h5 class="warning">Calories</h5>
                                    <h3 class="font-large-2 text-bold-200">4,025
                                        <span class="font-medium-1 grey darken-1 text-bold-400">kcal</span>
                                    </h3>
                                </div>
                                <div class="card-content">
                                    <input type="text" value="81" class="knob hide-value responsive angle-offset" data-angleOffset="20"
                                           data-thickness=".15" data-linecap="round" data-width="130"
                                           data-height="130" data-inputColor="#BABFC7" data-readOnly="true"
                                           data-fgColor="#FFA87D" data-knob-icon="icon-energy">
                                    <ul class="list-inline clearfix pt-1 mb-0">
                                        <li>
                                            <h2 class="grey darken-1 text-bold-400">5000</h2>
                                            <span class="warning">kcla Today's Target</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12">
                            <div class="my-1 text-center">
                                <div class="card-header mb-2 pt-0">
                                    <h5 class="success">Heart Rate</h5>
                                    <h3 class="font-large-2 text-bold-200">102
                                        <span class="font-medium-1 grey darken-1 text-bold-400">BPM</span>
                                    </h3>
                                </div>
                                <div class="card-content">
                                    <input type="text" value="75" class="knob hide-value responsive angle-offset" data-angleOffset="20"
                                           data-thickness=".15" data-linecap="round" data-width="130"
                                           data-height="130" data-inputColor="#BABFC7" data-readOnly="true"
                                           data-fgColor="#16D39A" data-knob-icon="icon-heart">
                                    <ul class="list-inline clearfix pt-1 mb-0">
                                        <li>
                                            <h2 class="grey darken-1 text-bold-400">125</h2>
                                            <span class="success">BPM Highest</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ fitness target -->
    <div class="row">
        <div class="col-xl-6 col-lg-12">
            <div class="card">
                <div class="card-header border-0-bottom">
                    <h4 class="card-title">Running Routes</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div id="routes" class="height-300"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-lg-12">
            <div class="card">
                <div class="card-header border-0-bottom">
                    <h4 class="card-title">Daily Activity</h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content">
                    <div id="daily-activity" class="table-responsive height-350">
                        <table class="table table-hover mb-0">
                            <thead>
                            <tr>
                                <th>
                                    <input type="checkbox" id="icheck-input-all" class="icheck-activity">
                                </th>
                                <th>Time</th>
                                <th>Activity</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-truncate">
                                    <input type="checkbox" id="icheck-input-1" class="icheck-activity" checked>
                                </td>
                                <td class="text-truncate">5.00 A.M</td>
                                <td class="text-truncate">Bricks Walking</td>
                                <td class="text-truncate">
                                    <span class="badge badge-default badge-success">Done</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-truncate">
                                    <input type="checkbox" id="icheck-input-2" class="icheck-activity" checked>
                                </td>
                                <td class="text-truncate">5.30 A.M</td>
                                <td class="text-truncate">Morning Exercise</td>
                                <td class="text-truncate">
                                    <span class="badge badge-default badge-success">Done</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-truncate">
                                    <input type="checkbox" id="icheck-input-3" class="icheck-activity">
                                </td>
                                <td class="text-truncate">6.30 A.M</td>
                                <td class="text-truncate">Yoga</td>
                                <td class="text-truncate">
                                    <span class="badge badge-default badge-danger">Missed</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-truncate">
                                    <input type="checkbox" id="icheck-input-4" class="icheck-activity" checked>
                                </td>
                                <td class="text-truncate">7.00 A.M</td>
                                <td class="text-truncate">Gym</td>
                                <td class="text-truncate">
                                    <span class="badge badge-default badge-success">Done</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-truncate">
                                    <input type="checkbox" id="icheck-input-5" class="icheck-activity" checked>
                                </td>
                                <td class="text-truncate">8.00 A.M</td>
                                <td class="text-truncate">Steam Bath</td>
                                <td class="text-truncate">
                                    <span class="badge badge-default badge-success">Done</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-truncate">
                                    <input type="checkbox" id="icheck-input-6" class="icheck-activity">
                                </td>
                                <td class="text-truncate">9.00 A.M</td>
                                <td class="text-truncate">Meditation</td>
                                <td class="text-truncate">
                                    <span class="badge badge-default badge-danger">Missed</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-truncate">
                                    <input type="checkbox" id="icheck-input-7" class="icheck-activity">
                                </td>
                                <td class="text-truncate">8.00 P.M</td>
                                <td class="text-truncate">Bricks Walking</td>
                                <td class="text-truncate">
                                    <span class="badge badge-default badge-warning">Delayed</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-truncate">
                                    <input type="checkbox" id="icheck-input-8" class="icheck-activity">
                                </td>
                                <td class="text-truncate">9.00 P.M</td>
                                <td class="text-truncate">Exercise</td>
                                <td class="text-truncate">
                                    <span class="badge badge-default badge-warning">Delayed</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Running Routes & Daily Activities  -->
    <!-- fitness info & twitter, facebook -->
    <div class="row">
        <div class="col-xl-8 col-lg-12 col-md-12">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="card">
                        <div class="card-content">
                            <div id="carousel-example" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example" data-slide-to="1"></li>
                                    <li data-target="#carousel-example" data-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <img src="../../../app-assets/images/pages/fitness-slide-1.jpg" class="img-fluid"
                                             alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../../../app-assets/images/pages/fitness-slide-2.jpg" class="img-fluid"
                                             alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../../../app-assets/images/pages/fitness-slide-3.jpg" class="img-fluid"
                                             alt="Third slide">
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#carousel-example" role="button" class="img-fluid"
                                   data-slide="prev">
                                    <span class="icon-prev" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example" role="button" data-slide="next">
                                    <span class="icon-next" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Health News &amp; Fitness Advice</h5>
                                <p class="card-text">Some quick example text to build on the card title and make
                                    up the bulk of the card's content.</p>
                                <p class="card-text">Some quick example text to build on the card title and make
                                    up the bulk of the card's content.</p>
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                            <div class="card-footer border-top-blue-grey border-top-lighten-5 text-muted m-1">
                                <span class="float-left">2 days ago</span>
                                <span class="tags float-right">
                        <span class="badge badge-pill badge-primary">Branding</span>
                        <span class="badge badge-pill badge-danger">Design</span>
                      </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="card profile-card-with-cover">
                        <div class="card-content">
                            <div class="card-img-top img-fluid bg-cover height-200" style="background: url('../../../app-assets/images/pages/fitness-profile.jpg') 0 40%;"></div>
                            <div class="card-profile-image">
                                <img src="../../../app-assets/images/portrait/small/avatar-s-8.png" class="rounded-circle img-border box-shadow-1"
                                     alt="Card image">
                            </div>
                            <div class="profile-card-with-cover-content text-center">
                                <div class="my-2">
                                    <h4 class="card-title">Susan Garrett</h4>
                                    <ul class="list-inline clearfix pt-2">
                                        <li class="pr-2">
                                            <h2 class="block">-2.05
                                                <span class="font-small-3 text-muted">KG</span>
                                            </h2> Body Fat</li>
                                        <li class="pr-2">
                                            <h2 class="block">52
                                                <span class="font-small-3 text-muted">KG</span>
                                            </h2> Target</li>
                                        <li>
                                            <h2 class="block">-2.1
                                                <span class="font-small-3 text-muted">KG</span>
                                            </h2> Weight</li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <a href="#" class="btn btn-social btn-min-width pr-1 mb-1 btn-linkedin">
                                        <span class="ft-plus"></span>
                                        <span class="pl-1">Follow</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12 col-md-12">
            <div class="row">
                <div class="col-xl-12 col-lg-6 col-md-12">
                    <div class="card bg-info white">
                        <div class="card-content p-2">
                            <div class="card-body">
                                <div class="text-center mb-1">
                                    <i class="fa fa-twitter font-large-3"></i>
                                </div>
                                <div class="tweet-slider">
                                    <ul class="text-center">
                                        <li>Congratulations to Rob Jones in accounting for winning
                                            our
                                            <span class="yellow">#NFL</span> football pool!</li>
                                        <li>Contests are a great thing to partner on. Partnerships
                                            immediately
                                            <span class="yellow">#DOUBLE</span> the reach.</li>
                                        <li>Puns, humor, and quotes are great content on
                                            <span class="yellow">#Twitter</span>. Find some related to your business.</li>
                                        <li>Are there
                                            <span class="yellow">#common-sense</span> facts related to your business?
                                            Combine them with a great photo.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-6 col-md-12">
                    <div class="card bg-success white">
                        <div class="card-content p-2">
                            <div class="card-body">
                                <div class="text-center mb-1">
                                    <i class="fa fa-facebook font-large-3"></i>
                                </div>
                                <div class="fb-post-slider">
                                    <ul class="text-center">
                                        <li>Congratulations to Rob Jones in accounting for winning
                                            our #NFL football pool!</li>
                                        <li>Contests are a great thing to partner on. Partnerships
                                            immediately #DOUBLE the reach.</li>
                                        <li>Puns, humor, and quotes are great content on #Twitter.
                                            Find some related to your business.</li>
                                        <li>Are there #common-sense facts related to your business?
                                            Combine them with a great photo.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ fitness info & twitter, facebook -->
@endsection
