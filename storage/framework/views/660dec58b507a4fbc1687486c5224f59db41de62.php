<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scholarship</title>

    <link rel="stylesheet" href="<?php echo e(asset('css/reset.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/base.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/font.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/modal.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('scholarship/css/style.css')); ?>">

</head>
<body>

    <div class="scholarship">
        <div class="container">
            
            <div class="scholarship__banner">
                <div class="scholarship-banner__logo">
                    <img class="scholarship-banner-logo__img" src="<?php echo e(asset('img/BUV-Logo-Transparent.png')); ?>">
                </div>
                <div class="scholarship-banner__title">
                    <h3 class="scholarship-banner-title__heading">BUV SCHOLARSHIP</h3>
                </div>
            </div>

            <div class="scholarship__pagination">
                <div class="scholarship-pagination__item scholarship-pagination__item--active">
                    <a class="scholarship-pagination-item__btn" href="scholarship1.html">0</a>
                </div>
                <div class="scholarship-pagination__dash"></div>
                <div class="scholarship-pagination__item">
                    <a class="scholarship-pagination-item__btn" href="scholarship2.html">1</a>
                </div>
                <div class="scholarship-pagination__dash"></div>
                <div class="scholarship-pagination__item">
                    <a class="scholarship-pagination-item__btn" href="scholarship3.html">2</a>
                </div>
                <div class="scholarship-pagination__dash"></div>
                <div class="scholarship-pagination__item">
                    <a class="scholarship-pagination-item__btn" href="scholarship4.html">3</a>
                </div>
                <div class="scholarship-pagination__dash"></div>
                <div class="scholarship-pagination__item">
                    <a class="scholarship-pagination-item__btn" href="scholarship5.html">4</a>
                </div>
                <div class="scholarship-pagination__dash"></div>
                <div class="scholarship-pagination__item">
                    <a class="scholarship-pagination-item__btn" href="scholarship6.html">5</a>
                </div>
                <div class="scholarship-pagination__dash"></div>
                <div class="scholarship-pagination__item">
                    <a class="scholarship-pagination-item__btn" href="scholarship7.html">6</a>
                </div>
                <div class="scholarship-pagination__dash"></div>
                <div class="scholarship-pagination__item">
                    <a class="scholarship-pagination-item__btn" href="scholarship8.html">7</a>
                </div>
            </div>

            <form class="scholarship__form" id="scholarship__form" action="scholarship2.html">
                <div class="scholarship__section">
                    <h3 class="scholarship-section__heading">What are you applying for?</h3>

                    <p class="scholarship__note">Instruction:</p>
                    <p class="scholarship__note">1)	You can apply for more than one scholarship(s). For more information on BUV scholarship programs, <a href="https://www.buv.edu.vn/hoc-bong-cu-nhan/">Click here</a>.</p>
                    <p class="scholarship__note">2)	BUV scholarship portal contains seven steps. Candidate’s Full Name and Email in Step 1-Personal Information must be filled in when you access the portal for the first time. After that, your information will be saved in the system, and an automatic email with the Save Draft link will be sent to your registered email for subsequent revisions. Before clicking “Submit” in the final step, you can come back to edit your application several times through the Save Draft link.</p>
                    <p class="scholarship__note">3)	The fields with (*) are compulsory for the scholarship application’s submission. Any lack of required documents will result in scholarship failure.</p>
                    <p class="scholarship__note">4)	An automatic acknowledgement email will be sent to your registered email after successful submission.</p>
                    <p class="scholarship__note">5)	The documents uploaded to this portal are limited in size (2MB or 20MB). To reduce the file size, you can use a tool like <a href="https://smallpdf.com/compress-pdf">smallpdf.com</a>.This is a third-party website, and BUV assumes no liability or responsibility for its use.</p>
                    <p class="scholarship__note">6)	If you need support while submitting your scholarship application, please contact BUV Student Recruitment Representative or our hotline at 0966629909.</p>

                    <div class="scholarship-section__field">
                        <div class="validate" id="scholarship-section__field--cb-apply">
                            <div class="scholarship-section__field-checkbox-group">
                                <input type="checkbox" class="scholarship-section__field-checkbox-input scholarship-section__field-checkbox-apply-input" id="scholarship-section__field-checkbox-apply-input-1">
                                <label for="scholarship-section__field-checkbox-apply-input-1" class="scholarship-section__field-checkbox-label"> The British Ambassador’s Scholarship/ President’s Scholarship/ Dean’s Scholarship</label>
                            </div>
                            <div class="scholarship-section__field-checkbox-group">
                                <input type="checkbox" class="scholarship-section__field-checkbox-input scholarship-section__field-checkbox-apply-input" id="scholarship-section__field-checkbox-apply-input-2">
                                <label for="scholarship-section__field-checkbox-apply-input-2" class="scholarship-section__field-checkbox-label"> Sir Graeme Davies’ Scholarship/ The Founder’s Scholarship</label>
                            </div>
                            <div class="scholarship-section__field-checkbox-group">
                                <input type="checkbox" class="scholarship-section__field-checkbox-input scholarship-section__field-checkbox-apply-input" id="scholarship-section__field-checkbox-apply-input-3">
                                <label for="scholarship-section__field-checkbox-apply-input-3" class="scholarship-section__field-checkbox-label"> Lion’s Heart Scholarship</label>
                            </div>
                            <div class="scholarship-section__field-checkbox-group">
                                <input type="checkbox" class="scholarship-section__field-checkbox-input scholarship-section__field-checkbox-apply-input" id="scholarship-section__field-checkbox-apply-input-4">
                                <label for="scholarship-section__field-checkbox-apply-input-4" class="scholarship-section__field-checkbox-label"> Talent Scholarship</label>
                            </div>
                            <div class="scholarship-section__field-checkbox-group">
                                <input type="checkbox" class="scholarship-section__field-checkbox-input scholarship-section__field-checkbox-apply-input" id="scholarship-section__field-checkbox-apply-input-5">
                                <label for="scholarship-section__field-checkbox-apply-input-5" class="scholarship-section__field-checkbox-label"> Key Partnership Scholarship (MOU)</label>
                            </div>
                            <div class="scholarship-section__field-checkbox-group">
                                <input type="checkbox" class="scholarship-section__field-checkbox-input scholarship-section__field-checkbox-apply-input" id="scholarship-section__field-checkbox-apply-input-6">
                                <label for="scholarship-section__field-checkbox-apply-input-6" class="scholarship-section__field-checkbox-label"> Education Development Scholarship</label>
                            </div>
                            <div class="scholarship-section__field-checkbox-group">
                                <input type="checkbox" class="scholarship-section__field-checkbox-input scholarship-section__field-checkbox-apply-input scholarship-section__field-group-other-cb" id="scholarship-section__field-group-other-cb">
                                <label class="scholarship-section__field-checkbox-label mr-1" for="scholarship-section__field-group-other-cb"> Others</label>
                                <div class="w-100 validate" id="scholarship-section__field-group-other">
                                    <input class="scholarship-section__field-group-other-textbox" type="text" placeholder="Please specify ..." id="scholarship-section__field-group-other-textbox">
                                    <small class="error-message-other"></small>
                                </div>
                            </div>
                            <small class="error-message"></small>
                        </div>
                    </div>
                </div>
                <div class="scholarship-form__submit">
                    <input class="scholarship-form-submit__btn scholarship-form-submit__btn--next" id="scholarship-form-submit__btn--next" type="submit" value="Save">
                </div>
            </form>



        </div><!-- container -->
    </div><!-- scholarship -->

    <!-- Modal loading page -->
    <div class="modal" id="modal__loading">
        <div class="modal__overlay"></div>
        <div class="modal__content">
            <div class="loader"></div>
            <div class="loading__title">Processing ...<br>Please do not close the browser</div>
        </div>
    </div>

    <script src="<?php echo e(asset('js/function.js')); ?>"></script>

    <script>

        Functions.cbShowHide({
            cbClass : 'scholarship-section__field-group-other-cb',
            eID : 'scholarship-section__field-group-other-textbox',
            status : false
        });

        Validator({
            form: '#scholarship__form',
            rules: [
                Validator.cbChecked({
                    selector : '#scholarship-section__field--cb-apply', 
                    msg : Validator.message.option
                }),
                Validator.tbRequiredWhenCbChecked({
                    selector: '#scholarship-section__field-group-other-textbox',
                    checkbox: '.scholarship-section__field-group-other-cb',
                    msg: 'You must speficy the name of scholarship/ Bạn phải điền vào tên học bổng',
                    error: '#scholarship-section__field-group-other .error-message-other'
                })
            ],
            onSubmit: (data) => {
                document.getElementById("modal__loading").style.display = "block";
                data.form.submit();
            }
        });


    </script>

</body>
</html><?php /**PATH C:\tungc\App Installation\xampp742\htdocs\laravel8scholarship\resources\views/scholarship/form.blade.php ENDPATH**/ ?>