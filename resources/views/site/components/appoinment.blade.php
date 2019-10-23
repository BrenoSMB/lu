<section id="appoinment" class="col-padtop wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="appoimentbg">
                    <div class="col-sm-12 col-md-9 col-lg-8">
                        <h2>make an appointment</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pulvinar luctus est eget congue. Nam auctor nisi est, nec tempus lacus viverra nec.</p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="appfrm">
                        <div id="SuccessMessage"></div>
                        <div id="ErrorMessage"></div>
                        <form name="AppointmentFrm" id="AppointmentFrm" method="post">
                            <div class="col-sm-12 col-md-8 col-lg-7 appfrmleft">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="AppointmentFullName" id="AppointmentFullName" class="form-control required">
                                </div>
                                <div class="form-group mt-right0">
                                    <label>Email</label>
                                    <input type="email" class="form-control required email" name="AppointmentEmail" id="AppointmentEmail"/>
                                </div>
                                <div class="form-group pull-left">
                                    <label>Contact Number</label>
                                    <input type="text" name="AppointmentContactNumber" id="AppointmentContactNumber" class="form-control required number">
                                </div>
                                <div class="form-group mt-right0">
                                    <div class="input-append dateinput">
                                        <label class="control-label">Date</label>
                                        <div class="desktopdate"><input type="text" class="form-control required" name="AppointmentDate" id="datePicker"/></div>
                                        <div class="mobiledate"><input type="date" class="form-control required" name="AppointmentMobileDate"/></div>
                                    </div>
                                    <div class="time">
                                        <label>Time</label>
                                        <select name="AppointmentTime" id="AppointmentTime">
                                            <option selected>Select</option>
                                            <option>11:00am</option>
                                            <option>12:00pm</option>
                                            <option>01:00pm</option>
                                            <option>02:00pm</option>
                                            <option>03:00pm</option>
                                            <option>04:00pm</option>
                                            <option>05:00pm</option>
                                            <option>06:00pm</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-5 appfrmright">
                                <div class="form-group textarea">
                                    <label class="control-label">Description</label>
                                    <textarea class="form-control" name="AppointmentMessage" rows="5" id="AppointmentMessage"></textarea>
                                </div>
                                <div class="submitbtn">
                                    <button type="submit" class="btn btn-default" value="Submit">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>