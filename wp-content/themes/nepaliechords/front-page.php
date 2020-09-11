<?php
get_header();
?>

<div class="homeSection bgImage" style="
  background-image: url('/wp-content/themes/nepaliechords/assets/imgs/backgroundImage.jpg');">
    <div class="darkOverlay"></div>
    <div class="titleBox display-table" id="TitleBox">
        <div class="table-cell">
            <h1 class="text-light display-1">Nepali E-Chords</h1>
            <hr />
            <h3 class="text-light mt-3 subTitle">
                Namaskar! Nepali E-Chords ma swagat chha!
            </h3>
            <div class="subtext text-light">
                Hello! Welcome to Nepali E-Chords – the first guitar site to offer
                comprehensive guitar lessons of popular Nepali songs online, and that
                too without any cost whatsoever. Although majority of the guitar lessons
                here are suitable for students of all skill levels, the beginners and
                intermediate students will probably find these lessons more useful.
            </div>
        </div>
    </div>
</div>

<div class="blogSection">
    <div class="container box-shadow-full my-5">
        <div class="row">
            <div class="col-md-12 display-4 text-center pb-4">Articles</div>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="nepaliechords-articles-tab" role="tablist"
                    aria-orientation="vertical">
                    <a class="nav-link bg-light text-dark my-1 active" id="nepaliechords-news-tab" data-toggle="pill"
                        href="#nepaliechords-news" role="tab" aria-controls="nepaliechords-news"
                        aria-selected="true">News</a>
                    <a class="nav-link bg-light text-dark my-1" id="nepaliechords-release-tab" data-toggle="pill"
                        href="#nepaliechords-release" role="tab" aria-controls="nepaliechords-release"
                        aria-selected="false">Recent Releases</a>
                    <a class="nav-link bg-light text-dark my-1" id="nepaliechords-interviews-tab" data-toggle="pill"
                        href="#nepaliechords-interviews" role="tab" aria-controls="nepaliechords-interviews"
                        aria-selected="false">Interviews</a>
                    <a class="nav-link bg-light text-dark my-1" id="nepaliechords-events-tab" data-toggle="pill"
                        href="#nepaliechords-events" role="tab" aria-controls="nepaliechords-events"
                        aria-selected="false">Events</a>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="nepaliechords-articles-tabContent">
                    <div class="tab-pane fade show active" id="nepaliechords-news" role="tabpanel"
                        aria-labelledby="nepaliechords-news-tab">
                        <div class="row justify-content-end border-primary">
                            <div class="col-5 align-self-end">
                                <a href="/" class="btn btn-outline-dark">View All News</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nepaliechords-release" role="tabpanel"
                        aria-labelledby="nepaliechords-release-tab">
                        <div class="row justify-content-end border-primary">
                            <div class="col-5 align-self-end">
                                <a href="/" class="btn btn-outline-dark">View All Releases</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nepaliechords-interviews" role="tabpanel"
                        aria-labelledby="nepaliechords-interviews-tab">
                        <div class="row justify-content-end border-primary">
                            <div class="col-5 align-self-end">
                                <a href="/" class="btn btn-outline-dark">View All Interviews</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nepaliechords-events" role="tabpanel"
                        aria-labelledby="nepaliechords-events-tab">
                        <div class="row justify-content-end border-primary">
                            <div class="col-5 align-self-end">
                                <a href="/" class="btn btn-outline-dark">View All Events</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
?>