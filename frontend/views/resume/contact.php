<div id="data-user">
    <div class="content">

    <!--Main title-->

    <div class="main-title">
        <h1>Отправить сообщение</h1>
        <div class="divider">
            <div class="zigzag large clearfix "  data-svg-drawing="yes" >

            </div>
        </div>
    </div>

    <!--End main title-->
    <!--Content-->
    <div class="content">

        <!--Block content-->
        <div class="block-content ">

            <!--Contact-->
            <div class="block-contact margBSSmall">

                <!--Row-->
                <div class="row">

                    <div class="col-md-12">


                        <form class="contact-form" method="post" action="send.php">

                            <!--Input columns-->
                            <div class="input-columns clearfix">

                                <div class="column1">
                                    <div class="column-inner">
                                        <input type="text" placeholder="Name" value="" id="name" name="name">
                                    </div>
                                </div>

                                <!--Column-->
                                <div class="column2">
                                    <div class="column-inner">
                                        <input type="text" placeholder="Email" value="" id="email" name="email">
                                    </div>
                                </div>
                                <!--End column-->

                            </div>
                            <!--End input columns-->

                            <textarea name="message" placeholder="Message" id="message" cols="45" rows="10"></textarea>
                            <input type="submit" value="Отправить" class="but opc-2 submit">
                        </form>

                        <!--Contact form message-->
                        <div id="success"><h2>Your message has been sent. Thank you!</h2></div>
                        <div id="error"><h2>Sorry your message can not be sent.</h2></div>
                        <!--End contact form message-->


                    </div>


                </div>
                <!--End row-->

            </div>
            <!--End contact-->

        </div>
        <!--End block content-->


    </div>
</div>
</div>
<!--End content-->