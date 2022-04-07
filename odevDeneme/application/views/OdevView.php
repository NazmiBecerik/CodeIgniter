<html>
<?php  $this->load->view("includes/header.php"); ?>
<body>
    <div class="container">
        <h2 class="text-center">Contact Form</h2>
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 pb-5">
                <!--Form with header-->

                <form method="post" action="<?php echo base_url("/OdevController/insert") ?>" class="contact100-form validate-form">
                    <div class="card border-primary rounded-0">
                        <div class="card-header p-0">
                            <div class="bg-info text-white text-center py-2">
                                <h3><i class="fa fa-envelope"></i> Mesajınızı Gönderin</h3>
                                
                            </div>
                        </div>
                        <div class="card-body p-3">

                            <!--Body-->
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                    </div>
                                    <input type="text" class="form-control" name="userName" placeholder="Kullanıcı Adınızı Giriniz" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                    </div>
                                    <input type="email" class="form-control" name="email" placeholder="Mail Adresinizi Giriniz" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                    </div>
                                    <textarea class="form-control" name="message" placeholder="Mesajınızı Yazınız" required></textarea>
                                </div>
                            </div>

                            <div class="text-center">
                                <input type="submit" value="Gönder" class="btn btn-info btn-block rounded-0 py-2">
                            </div>
                        </div>

                    </div>
                </form>
                <!--Form with header-->
            </div>
        </div>
    </div>
    <?php $this->load->view("includes/footer.php"); ?>
</body>

</html>