<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Home | Saidika Help desk</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" />

        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container">

            <div class="page-header">
                <h1>Saidika Frequently Asked Questions</small></h1>
            </div>

            <!-- Bootstrap FAQ - START -->
            <div class="container">
                <div class="panel-group" id="accordion">
                    <input type="text" class="form-control" placeholder="Search your question if not found below (Enter at least 5 words for optimal results)" id="quiz">
                    <p></p>
                    @if(Session::has('global'))
                    <p>{!!Session::get('global')!!}</p>
                    @endif
                    <div id="answer" class="panel panel-default" style="padding: 5px;display: none;  background: #E3E3E3"></div>
                    <div id="addQuiz" class="panel panel-default" style="padding: 5px;display: none; padding-bottom: 35px ">
                        <form action="/add-question" method="post">
                            {!!csrf_field()!!}
                            <h3>Please enter the question below</h3>
                            <textarea class="form-control" name="question" required="" placeholder="Enter your question"></textarea>
                            <input type="submit" class="btn btn-warning" style="float: right" value="Submit question">
                        </form>
                    </div>
                    <div class="faqHeader">General questions</div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Is account registration required?</a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Account registration at <strong>Optimus E-Solutions</strong> is only required if you will be selling or buying themes. 
                                This ensures a valid communication channel for all parties involved in any transactions. 
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTen">Can I submit my own Bootstrap templates or themes?</a>
                            </h4>
                        </div>
                        <div id="collapseTen" class="panel-collapse collapse">
                            <div class="panel-body">
                                A lot of the content of the site has been submitted by the community. Whether it is a commercial element/template/theme 
                                or a free one, you are encouraged to contribute. All credits are published along with the resources. 
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven">What is the currency used for all transactions?</a>
                            </h4>
                        </div>
                        <div id="collapseEleven" class="panel-collapse collapse">
                            <div class="panel-body">
                                All prices for themes, templates and other items, including each seller's or buyer's account balance are in <strong>USD</strong>
                            </div>
                        </div>
                    </div>

                    <div class="faqHeader">Sellers</div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Who cen sell items?</a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                Any registed user, who presents a work, which is genuine and appealing, can post it on <strong>Optimus E-Solutions</strong>.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">I want to sell my items - what are the steps?</a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                The steps involved in this process are really simple. All you need to do is:
                                <ul>
                                    <li>Register an account</li>
                                    <li>Activate your account</li>
                                    <li>Go to the <strong>Themes</strong> section and upload your theme</li>
                                    <li>The next step is the approval step, which usually takes about 72 hours.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">How much do I get from each sale?</a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse">
                            <div class="panel-body">
                                Here, at <strong>Optimus E-Solutions</strong>, we offer a great, 70% rate for each seller, regardless of any restrictions, such as volume, date of entry, etc.
                                <br />
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Why sell my items here?</a>
                            </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse">
                            <div class="panel-body">
                                There are a number of reasons why you should join us:
                                <ul>
                                    <li>A great 70% flat rate for your items.</li>
                                    <li>Fast response/approval times. Many sites take weeks to process a theme or template. And if it gets rejected, there is another iteration. We have aliminated this, and made the process very fast. It only takes up to 72 hours for a template/theme to get reviewed.</li>
                                    <li>We are not an exclusive marketplace. This means that you can sell your items on <strong>Optimus E-Solutions</strong>, as well as on any other marketplate, and thus increase your earning potential.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">What are the payment options?</a>
                            </h4>
                        </div>
                        <div id="collapseEight" class="panel-collapse collapse">
                            <div class="panel-body">
                                The best way to transfer funds is via Paypal. This secure platform ensures timely payments and a secure environment. 
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">When do I get paid?</a>
                            </h4>
                        </div>
                        <div id="collapseNine" class="panel-collapse collapse">
                            <div class="panel-body">
                                Our standard payment plan provides for monthly payments. At the end of each month, all accumulated funds are transfered to your account. 
                                The minimum amount of your balance should be at least 70 USD. 
                            </div>
                        </div>
                    </div>

                    <div class="faqHeader">Buyers</div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">I want to buy a theme - what are the steps?</a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse">
                            <div class="panel-body">
                                Buying a theme on <strong>Optimus E-Solutions</strong> is really simple. Each theme has a live preview. 
                                Once you have selected a theme or template, which is to your liking, you can quickly and securely pay via Paypal.
                                <br />
                                Once the transaction is complete, you gain full access to the purchased product. 
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Is this the latest version of an item</a>
                            </h4>
                        </div>
                        <div id="collapseSeven" class="panel-collapse collapse">
                            <div class="panel-body">
                                Each item in <strong>Optimus E-Solutions</strong> is maintained to its latest version. This ensures its smooth operation.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <style>
                .faqHeader {
                    font-size: 27px;
                    margin: 20px;
                }

                .panel-heading [data-toggle="collapse"]:after {
                    font-family: 'Glyphicons Halflings';
                    content: "\e072"; /* "play" icon */
                    float: right;
                    color: #F58723;
                    font-size: 18px;
                    line-height: 22px;
                    /* rotate "play" icon from > (right arrow) to down arrow */
                    -webkit-transform: rotate(-90deg);
                    -moz-transform: rotate(-90deg);
                    -ms-transform: rotate(-90deg);
                    -o-transform: rotate(-90deg);
                    transform: rotate(-90deg);
                }

                .panel-heading [data-toggle="collapse"].collapsed:after {
                    /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
                    -webkit-transform: rotate(90deg);
                    -moz-transform: rotate(90deg);
                    -ms-transform: rotate(90deg);
                    -o-transform: rotate(90deg);
                    transform: rotate(90deg);
                    color: #454444;
                }
            </style>

            <!-- Bootstrap FAQ - END -->

        </div>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
<!--        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.js"></script>-->
        <script>
            $(document).ready(function () {
                var quiz_details = {
                    source: "/auto-complete",
                    select: function (event, quiz) {
                        +
                                $("#quiz").val(quiz.item.value);
                        $("#answer").html(quiz.item.answer);
                        $("#id").val(quiz.item.id);
                        if (quiz.item.label === "NO MATCHES FOUND") {

                            $("#answer").css("display", 'none');
                            $("#addQuiz").css("display", 'block');

                        } else {
                            $("#addQuiz").css("display", 'none');
                            $("#answer").css("display", 'block');
                        }

                    },
                    minLength: 6
                };
                $("#quiz").autocomplete(quiz_details);

            });
        </script>

    </body>
    <footer>
        <center>Designed by <a href="http://optimuse-solutions.com" target="_blank">Optimus E-Solutions</a> </center>
    </footer>
</html>