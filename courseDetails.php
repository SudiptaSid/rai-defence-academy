<?php include 'include/header.php'; ?>

<!-- Course Details Video -->
<section class="CoursePlayer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="videoPlayer">
                    <video id="videoSrc">Your browser does not support the video tag.</video>
                    <div class="controlBox">
                        <div class="topSec">
                            <div class="progressBar">
                                <span class="bufferBar"></span> <span class="timeBar"></span>
                            </div>
                            <div class="time">
                                <span class="current"></span> / <span class="duration"></span>
                            </div>
                        </div>
                        <div class="bottomSec">
                            <div class="leftControl">
                                <button class="btnPlay" title="Play/Pause video"></button>
                                <button class="prevvid disabled" title="Previous video">
                                    <em class="fa fa-step-backward"></em>
                                </button>
                                <button class="nextvid" title="Next video">
                                    <em class="fa fa-step-forward"></em>
                                </button>
                                <button class="sound sound2" title="Mute/Unmute sound"></button>
                                <div class="volume" title="Set volume">
                                    <span class="volumeBar"></span>
                                </div>
                            </div>
                            <div class="rightControl">
                                <button class="btnspeed" title="Video speed">
                                    <em class="fa fa-gear"></em>
                                </button>
                                <ul class="speedcnt">
                                    <li class="spdx50">1.5</li>
                                    <li class="spdx25">1.25</li>
                                    <li class="spdx1 selected">Normal</li>
                                    <li class="spdx050">0.5</li>
                                </ul>
                                <button class="btnFS" title="full screen"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Course -->
<section class="courseDetailsOne">
    <div class="container">
        <div class="row justify-content-between gap-y2">
            <div class="col-lg-8 col-12">
                <div class="details">
                    <h5>Course Overview</h5>
                    <p>
                        World-class training and development programs developed by top teachers. Build skills
                        with courses, certificates, and degrees online from world-class universities and
                        companies. from the National Research University Higher School of Economics (HSE
                        University) is the first fully online.
                    </p>
                </div>
                <div class="details">
                    <h5>What you will learn</h5>
                    <ul class="listOne">
                        <li>
                            <em class="fa fa-check text-success"></em> Become a UX designer.
                        </li>
                        <li>
                            <em class="fa fa-check text-success"></em> Become a UX designer.
                        </li>
                        <li>
                            <em class="fa fa-check text-success"></em> You will be able to add UX designer to your
                            CV
                        </li>
                        <li>
                            <em class="fa fa-check text-success"></em> You will be able to add UX designer to your
                            CV
                        </li>
                        <li>
                            <em class="fa fa-check text-success"></em> Build & test a full website design.
                        </li>
                        <li>
                            <em class="fa fa-check text-success"></em> Build & test a full website design.
                        </li>
                    </ul>
                </div>
                <div class="details">
                    <h5>
                        Course Content
                        <span class="time">
                            <span>
                                <em class="fa fa-play-circle"></em> 10 Lessons
                            </span>
                            <span>
                                <em class="fa fa-clock"></em> 6h 40m
                            </span>
                        </span>
                    </h5>
                    <div class="videoList">
                        <div class="videoItem videoBtn" data-src="images/video/1.mp4">
                            <label class="customCheckbox">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                            <span class="videoTitle">1. How to Use ChatGPT</span>
                            <span class="small">
                                <em class="fa fa-tv"></em> 4 min
                            </span>
                        </div>
                        <div class="videoItem videoBtn" data-src="images/video/2.mp4">
                            <label class="customCheckbox">
                                <input type="checkbox" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <span class="videoTitle">2. ChatGPT Updates, Tips, and ChatGPT 4o in 15 Minutes</span>
                            <span class="small">
                                <em class="fa fa-tv"></em> 14 min
                            </span>
                        </div>
                        <div class="videoItem videoBtn" data-src="images/video/3.mp4">
                            <label class="customCheckbox">
                                <input type="checkbox" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <span class="videoTitle">3. Improve Your ChatGPT with Prompt Engineering</span>
                            <span class="small">
                                <em class="fa fa-tv"></em> 8 min
                            </span>
                        </div>
                        <div class="videoItem textBtn">
                            <label class="customCheckbox">
                                <input type="checkbox" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <span class="videoTitle">4. Text For Slider</span>
                            <span class="small">
                                <em class="fa fa-file"></em> 8 pages
                            </span>
                        </div>
                        <div class="videoItem" data-src="images/video/4.mp4">
                            <label class="customCheckbox">
                                <input type="checkbox" name="radio">
                                <span class="checkmark"></span>
                            </label>
                            <span class="videoTitle">5. Improve Your ChatGPT with Prompt Engineering</span>
                            <span class="small">
                                <em class="fa fa-tv"></em> 8 min
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/footer.php'; ?>