<!--6 Contact -->
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center">
                <h2>{{ $home[0]->contactTitle }}</h2>
                <hr>
            </div>
            <div class="col-md-5 col-md-offset-3">
                <!-- contact form starts -->
                <form action="contact" id="contact-form" class="form-horizontal">
                    <fieldset>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="name">{{ $home[0]->contactFormName }}</label>
                            <div class="col-sm-8">
                                <input type="text" placeholder="Your Name" class="form-control" name="name" id="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="email">{{ $home[0]->contactFormEmail }}</label>
                            <div class="col-sm-8">
                                <input type="text" placeholder="Enter Your Email Address" class="form-control"
                                    name="email" id="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="subject">{{ $home[0]->contactFormSubject }}</label>
                            <div class="col-sm-8">
                                <input type="text" placeholder="Subject" class="form-control" name="subject"
                                    id="subject">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="message">{{ $home[0]->contactFormMessage }}</label>
                            <div class="col-sm-8">
                                <textarea placeholder="Please Type Your Message" class="form-control" name="message"
                                    id="message" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-offset-4 col-sm-8">
                            <button type="submit" class="btn btn-success">{{ $home[0]->contactFormSubmit }}</button>
                            <button type="reset" class="btn btn-primary">{{ $home[0]->contactFormCancel }}</button>
                        </div>
                    </fieldset>
                </form>
                <!-- contact form ends -->
            </div>
        </div>
    </div>
</div>
<!-- /Contact -->
