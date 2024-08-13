Validator.message = {
    'required'  : 'Trường bắt buộc!',
    'option'    : 'Bạn phải lựa chọn ít nhất một option!',
    'extension' : 'Đuôi mở rộng cho phép ',
    'size'      : 'Dung lượng không được vượt quá ',
    'email'     : 'Địa chỉ email không hợp lệ!'
}

function Validator( options ) {
    var formElement = document.querySelector(options.form);

    formElement.onsubmit = function(e){
        e.preventDefault();
        var flagSubmit = true;
        var viewInvalidElement = [];
        
        options.rules.forEach( rule => {
           var elements = formElement.querySelectorAll(rule.selector);
            elements.forEach( element => {
                if( element && rule.submit ){
                    var isFormValid = validate(element, customRules[rule.selector], rule.error);
                    if( isFormValid !== undefined ){
                        flagSubmit = false;
                        var scrollPosition = rule.error 
                                                ? document.querySelector(rule.error) 
                                                : element.closest('.validate').querySelector('.error-message');

                        viewInvalidElement.push(scrollPosition);
                    }
                }
            });
        });

        if( flagSubmit ){
            var responses = {};
            responses.form = formElement;
            var datas = formElement.querySelectorAll('input[name]');
            datas.forEach( data => {
                responses[data.name] = data.value;
            });
            options.onSubmit(responses);
        }else{
            viewInvalidElement[0].scrollIntoView({
                behavior: 'smooth',
                block: 'center',
                inline: 'center'
            });
        }
    }

    function validate(element, rule, error){
        var errMsg;

        for( var i = 0; i < rule.length; i++ ){
            errMsg = rule[i](element, formElement);
            if( errMsg !== undefined ) break;
        }

        var validateElement = element.closest('.validate');
        var errorMsgElement = error ? document.querySelector(error) : validateElement.querySelector('.error-message');

        if( errMsg){
            validateElement.classList.add('invalid');
            validateElement.classList.remove('valid');
            errorMsgElement.innerText = errMsg;
        }else{
            validateElement.classList.add('valid');
            validateElement.classList.remove('invalid');
            errorMsgElement.innerText = '';
        }

        return errMsg;
    }

    if( options.rules ){

        var customRules = [];
        options.rules.forEach( rule => {
            if(Array.isArray( customRules[rule.selector] )){
                customRules[rule.selector].push(rule.test);
            }else{
                customRules[rule.selector] = [rule.test];
            }
            
            var elements = formElement.querySelectorAll(rule.selector);
            elements.forEach( element => {

                switch(rule.type) {
                    case 'cb':
                        var cbs = element.querySelectorAll('input[type="checkbox"]');
                        cbs.forEach(cb => {
                            cb.addEventListener("click", function(){ 
                                validate(element, customRules[rule.selector], rule.error);
                            });
                        });
                      break;
                    case 'rb':
                        element.addEventListener("click", function(){ 
                            validate(element, customRules[rule.selector], rule.error);
                        });
                        break;
                    case 'slb':
                        element.onchange = function(){
                            validate(element, customRules[rule.selector], rule.error);
                        }
                        break;
                    case 'bd':
                        var slbs = element.querySelectorAll('select');
                        slbs.forEach(slb => {
                            slb.addEventListener("change", function(){ 
                                validate(element, customRules[rule.selector], rule.error);
                            });
                        });
                      break;
                    case 'fi' || 'slb':
                        element.onchange = function(){
                            validate(element, customRules[rule.selector], rule.error);
                        }
                        break;
                    case 'signature':
                        element.onchange = function( evt ){
                            var signatureValid = validate(element, customRules[rule.selector], rule.error);
                            Functions.uploadSignaturePhoto(signatureValid, evt);
                        }
                        break;
                    default:
                        element.onblur = function(){
                            validate(element, customRules[rule.selector], rule.error);
                        }
                }

            });

        });
    }
}

Validator.email = function({selector, msg, submit}) {
    checkEmail = (email) => {
        return String(email)
            .toLowerCase()
            .match(
            /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            );
    };

    return {
        type: 'tb',
        selector: selector,
        submit: submit,
        test: function( element, formElement ){
            return checkEmail(element.value) 
                    ? undefined 
                    : msg  
                    || Validator.message.email;
        }
    };
}

Validator.tbRequired = function({selector, msg, error, submit}) {
    return {
        type: 'tb',
        selector: selector,
        error: error,
        submit: submit,
        test: function( element, formElement ){
            return element.value.trim()
                    ? undefined 
                    : msg 
                    || Validator.message.required;
        }
    };
}

Validator.tbRequiredWhenCbChecked = function({selector, checkbox, msg, error, submit}) {
    var checkboxes = document.querySelectorAll(checkbox);
    checkboxes.forEach( cb => {
        cb.addEventListener("click", function(){ 
            Functions.deleteErrorMessage(selector, error);
        });
    });

    return {
        type: 'tb',
        selector: selector,
        error: error,
        submit: submit,
        test: function( element, formElement ){
            return Functions.cbChecked(checkboxes) && !element.value.trim()
                    ? msg 
                    || Validator.message.required 
                    : undefined;
        }
    };
}

Validator.tbRequiredWhenRbChecked = function({selector, radiobox, msg, error, submit}) {
    var radioboxes = document.querySelectorAll(radiobox);
    radioboxes.forEach( cb => {
        cb.addEventListener("click", function(){ 
            Functions.deleteErrorMessage(selector, error);
        });
    });

    return {
        type: 'tb',
        selector: selector,
        error: error,
        submit: submit,
        test: function( element, formElement ){
            return Functions.rbChecked(radioboxes) && !element.value.trim()
                    ? msg 
                    || Validator.message.required 
                    : undefined;
        }
    };
}

Validator.fileRequiredWhenCbChecked = function({selector, required, size, extension, checkbox, error, submit}) {
    var checkboxes = document.querySelectorAll(checkbox);
    checkboxes.forEach( cb => {
        cb.addEventListener("click", function(){ 
            Functions.deleteErrorMessage(selector, error);
        });
    });

    Functions.displayNoteMessage(selector, extension, size);

    return {
        type: 'fi',
        selector: selector,
        error: error,
        submit: submit,
        test: function( element, formElement ){
            if(  Functions.cbChecked(checkboxes)){
                return Functions.checkfile({element, required, extension, size});
            }
            return undefined;
        }
    };
}

Validator.fileRequiredWhenRbChecked = function({selector, required, size, extension, radiobox, error, submit}) {
    var radioboxes = document.querySelectorAll(radiobox);
    radioboxes.forEach( rb => {
        rb.addEventListener("click", function(){ 
            Functions.deleteErrorMessage(selector, error);
        });
    });

    Functions.displayNoteMessage(selector, extension, size);

    return {
        type: 'fi',
        selector: selector,
        error: error,
        submit: submit,
        test: function( element, formElement ){
            if( Functions.rbChecked(radioboxes) ){
                return Functions.checkfile({element, required, extension, size});
            }
            return undefined;
        }
    };
}

Validator.file = function({selector, required, size, extension, submit}) {
    Functions.displayNoteMessage(selector, extension, size);
    return {
        type: 'fi',
        selector: selector,
        submit: submit,
        test: function( element, formElement ){
            return Functions.checkfile({element, required, extension, size});
        }
    };
}

Validator.signature = function({selector, required, size, extension, submit}) {
    Functions.displayNoteMessage(selector, extension, size);

    return {
        type: 'signature',
        selector: selector,
        submit: submit,
        test: function( element, formElement ){
            return Functions.checkfile({element, required, extension, size});
        }
    };
}

Validator.rbRequired = function({selector, msg, error, submit}) {
    return {
        type: 'rb',
        selector: selector,
        error: error,
        submit: submit,
        test: function( element, formElement ){
            let rbElements = formElement.querySelectorAll(selector);
            let rbCheckFlag = false;
            rbElements.forEach( rbE => {
                if( rbE.checked == true )
                    rbCheckFlag = true;
            });

            return rbCheckFlag 
                    ? undefined 
                    : msg  
                    || Validator.message.required;
        }
    };
}

Validator.isPInt = function({selector, msg, submit}) {
    return {
        type: 'tb',
        selector: selector,
        submit: submit,
        test: function( element, formElement ){
            return parseInt(element.value) > 0 || !element.value.trim() 
                    ? undefined 
                    : msg 
                    || 'The number must be greater than 0 / Số phải lớn hơn 0!';
        }
    };
}

Validator.cbChecked = function ({selector, msg, error, submit}) {
    return {
        type: 'cb',
        selector: selector,
        error: error,
        submit: submit,
        test: function( element, formElement ){
            var cbs = element.querySelectorAll('input[type="checkbox"]');
            return Functions.cbChecked(cbs) 
                    ? undefined 
                    : msg 
                    || Validator.message.required;
        }
    };
}

Validator.bdRequired = function ({selector, msg, submit}){
    return {
        type: 'bd',
        selector: selector,
        submit: submit,
        test: function( element, formElement ){
            
            function isSelected(slbs){
                var checkedFlag = true;
                slbs.forEach(sl => {
                    if ( sl.value == null || sl.value == '' || sl.value == undefined ) {
                        checkedFlag = false;
                    }
                });
                return checkedFlag;
            }

            var slbs = element.querySelectorAll('select');
            return isSelected(slbs) 
                    ? undefined 
                    : msg 
                    || 'Please enter day/month/year / Vui lòng nhập ngày/tháng/năm!';
        }
    };
}

Validator.slbRequired = function ({selector, msg, submit}){
    return {
        type: 'slb',
        selector: selector,
        submit: submit,
        test: function( element, formElement ){
            console.log(element.value);
            return  element.value
                    ? undefined 
                    : msg 
                    || Validator.message.required;
        }
    };
}

// Function
var Functions = {
    uploadSignaturePhoto: function(signatureValid, evt){
        const ctx = document.getElementById('scholarship-section__field-input-signature').getContext('2d');    
        if( signatureValid == undefined ){
            
            var imageData;
            var tgt = evt.target || window.event.srcElement,
            files = tgt.files;

            function getImageData(imageObj) {
                ctx.drawImage(imageObj, 0, 0, 350, 300);
                imageData = ctx.getImageData(0, 0, imageObj.width, imageObj.height).data;
                document.getElementById('scholarship-section__field-upload-signature-hidden').value = imageData;
            }

            function showImage(fileReader) {
                var img = document.getElementById('scholarship-section__field-img-signature');
                img.onload = () => getImageData(img);
                img.src = fileReader.result;
                document.getElementById('scholarship-section__field-file-upload-signature-btn').disabled = false;
            }

            // FileReader support
            if (FileReader && files && files.length) {
                var fr = new FileReader();
                fr.onload = () => showImage(fr);
                fr.readAsDataURL(files[0]);
            }
        }else{
            ctx.clearRect(0, 0, 350, 300);
        }
    },
    deleteErrorMessage: function(selector, error){
        var element = document.querySelector(selector);
        if( error ){
            document.querySelector(error).innerText = '';
        }else{
            element.closest('.validate').querySelector('.error-message').innerText = '';
        }
        element.closest('.validate').classList.remove('invalid', 'valid');
        if( fileElement.value ){
            fileElement.value = '';
        }
    },
    displayNoteMessage: function(selector, extension, size){
        var fileNoteMsg = document.querySelector(selector).closest('.validate').querySelector('.note-message-file');
        if( fileNoteMsg ){
            fileNoteMsg.innerText = 'Allowable extension (' + extension.join(' | ') + ') and size <= '+ size +'MB';
        }
    },
    checkfile: function({element, required, extension, size}){
        if( required && !element.value.trim() ){
            return Validator.message.required;
        }

        // Check file extension
        if( extension && element.value.trim() ){
            var fileExtension = Functions.getFileExtension(element);
            if( !extension.includes(fileExtension) ){
                return Validator.message.extension + '(' + extension.join(' | ') + ')';
            }
        }

        // Check file size
        if( size && element.value.trim() ){
            var fileSize = element.files[0].size;
            var allowFileSize = size * 1000000;
            if( fileSize >=  allowFileSize){
                return Validator.message.size + '(' + size + 'MB)';                
            }
        }

        return undefined;
    },
    getFileExtension : function( element ){
        var fileName = element.files[0].name;
        return fileName.split('.').pop();
    },
    cbChecked : function(cbs){
        var checkedFlag = false;
        cbs.forEach(cb => {
            if (cb.checked) {
                checkedFlag = true;
            }
        });
        return checkedFlag;
    },
    rbChecked : function(rds){
        var checkedFlag = false;
        rds.forEach(rb => {
            if (rb.checked) {
                checkedFlag = true;
            }
        });
        return checkedFlag;
    },
    rbShowHide : function({rbClass, eID, status}){
        // Element show or hide by default
        var e = document.getElementById(eID);
        e.style.display = ( status ) ? 'block' : 'none';
    
        // Check
        var rbs = document.querySelectorAll('.' + rbClass);
        rbs.forEach(rb => {
            rb.addEventListener("click", function(){ 
                e.style.display = ( rb.value == 1 ) ? 'block' : 'none';
            });
        });
    
        e.scrollIntoView();
    },
    cbShowHide : function({cbClass, eID, status}){
        var e = document.getElementById(eID);
        // Element show or hide by default
        e.style.display = ( status ) ? 'block' : 'none';
    
        var cbs = document.querySelectorAll('.' + cbClass);
    
        cbs.forEach(cb => {
            cb.addEventListener("click", function(){ 
                e.style.display = Functions.cbChecked(cbs) ? 'block' : 'none';
            });
        });
    
        e.scrollIntoView();
    }
};