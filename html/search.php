<div class="section-search">
    <div class="container">
        <div class="search-box-banner">
            <form action="login-as.php">
                <ul class="align-items-center">
                    <li class="column-group-main">
                        <div class="input-block">
                            <label>Pickup Location</label>
                            <div class="group-img">
                                <input type="text" class="form-control" placeholder="Enter City, Airport, or Address"/>
                                <span><i class="feather-map-pin"></i></span>
                            </div>
                        </div>
                    </li>
                    <li class="column-group-main">
                        <div class="input-block">
                            <label>Dropoff Location</label>
                            <div class="group-img">
                                <input type="text" class="form-control" placeholder="Enter City, Airport, or Address" />
                                <span><i class="feather-map-pin"></i></span>
                            </div>
                        </div>
                    </li>
                    <li class="column-group-main">
                        <div class="input-block">
                            <label>Pickup Date and Time</label>
                        </div>
                        <div class="input-block-wrapp">
                            <div class="input-block date-widget">
                                <div class="group-img">
                                    <input type="text" class="form-control datetimepicker" placeholder="04/11/2024" />
                                    <span><i class="feather-calendar"></i></span>
                                </div>
                            </div>
                            <div class="input-block time-widge">
                                <div class="group-img">
                                    <input type="text" class="form-control timepicker" placeholder="11:00 AM" />
                                    <span><i class="feather-clock"></i></span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="column-group-last">
                        <div class="input-block">
                            <div class="search-btn">
                                <button class="btn search-button" type="submit" onclick="redirectPage()">
                                    <i class="fa fa-search" aria-hidden="true"></i>Search
                                </button>
                            </div>
                        </div>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>

<script>
function redirectPage() {
    // Redirect to the vehicle list page
    window.location.href = "login-as.php";
}
</script>
