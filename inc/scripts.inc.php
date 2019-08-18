<?php switch ($pg) {
  case 'home':?>
<script src="<?php echo $dir ?>/assets/js/bootstrap/core/jquery.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/core/popper.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/core/bootstrap-material-design.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/plugins/moment.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/plugins/bootstrap-datetimepicker.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/plugins/nouislider.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/material-kit.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/main/owl.carousel.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/main/main.js"></script>
<?php   break;
    case 'about': 
    case 'contact':
    case 'terms':?>
<script src="<?php echo $dir ?>/assets/js/bootstrap/core/jquery.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/core/popper.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/core/bootstrap-material-design.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/plugins/moment.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/plugins/bootstrap-datetimepicker.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/plugins/nouislider.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/material-kit.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/main/owl.carousel.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/main/main.js"></script>
<?php   break;
      case 'host': ?>
<script src="<?php echo $dir ?>/assets/js/bootstrap/core/jquery.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/core/popper.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/core/bootstrap-material-design.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/plugins/moment.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/plugins/bootstrap-datetimepicker.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/plugins/nouislider.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/material-kit.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/main/owl.carousel.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<script src="assets/js/main/main.js"></script>

<script src="https://widget.cloudinary.com/v2.0/global/all.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?callback=createMap&center=5.3018,-1.9930&libraries=places&key=AIzaSyASg-tMY2JWW0ErNFD6qH3BTpLFjq8S-Ss"
        async defer>
</script>
<script type="text/javascript">   
  $(document).ready(function () {
    var regionsJSON = JSON.parse('{"AS":{"Name":"Ashanti","districts":["Adansi North","Adansi South","Afigya-Kwabre","Ahafo Ano North","Ahafo Ano South","Amansie Central","Amansie West","Asante Akim Central","Asante Akim North","Asante Akim South","Asokore Mampong","Atwima Kwanwoma","Atwima Mponua","Atwima Nwabiagya","Bekwai","Bosome Freho","Botsomtwe","Ejisu-Juaben","Ejura - Sekyedumase","Kumasi","Kwabre East","Mampong","Obuasi","Offinso North","Offinso South","Sekyere Afram Plains","Sekyere Central","Sekyere East","Sekyere Kumawu","Sekyere South"]},"BA":{"Name":"Brong-Ahafo","districts":["Asunafo North","Asunafo South","Asutifi North","Asutifi South","Atebubu-Amantin","Banda","Berekum East","Berekum","Dormaa East","Dormaa","Dormaa West","Jaman North","Jaman South","Kintampo North","Kintampo South","Nkoranza North","Nkoranza South","Pru","Sene East","Sene West","Sunyani","Sunyani West","Tain","Tano North","Tano South","Techiman","Techiman North","Wenchi"]},"CE":{"Name":"Central","districts":["Abura\/Asebu\/Kwamankese","Agona East","Agona West Municipal","Ajumako\/Enyan\/Essiam","Asikuma\/Odoben\/Brakwa","Assin North Municipal","Assin South","Awutu Senya East Municipal","Awutu Senya West","Cape Coast Metropolitan","Effutu Municipal","Ekumfi","Gomoa East","Gomoa West","Komenda\/Edina\/Eguafo\/Abirem Municipal","Mfantsiman Municipal","Twifo-Ati Morkwa","Twifo\/Heman\/Lower Denkyira","Upper Denkyira East Municipal","Upper Denkyira West"]},"EA":{"Name":"Eastern","districts":["Akuapim South","Akuapim North","Akyemansa","Asuogyaman","Ayensuano","Atiwa East","Atiwa West","Birim Central Municipal","Birim North","Birim South","Denkyembour","East Akim Municipal","Fanteakwa","Kwaebibirem","Kwahu Afram Plains North","Kwahu Afram Plains South","Kwahu East","Kwahu South","Kwahu West Municipal","Lower Manya Krobo","New-Juaben Municipal","Nsawam Adoagyire Municipal","Suhum","Upper Manya Krobo","Upper West Akim","West Akim Municipal","Yilo Krobo"]},"GA":{"Name":"Greater Accra","districts":["Ablekuma North Municipal","Ablekuma West Municipal","Accra Metropolitan","Ada East","Ada West","Adenta Municipal","Ashaiman Municipal","Ayawaso East Municipal","Ayawaso North Municipal","Ayawaso West Municipal","Ga Central","Ga East Municipal","Ga North Municipal","Ga South Municipal","Ga West Municipal","Kpone Katamanso Municipal","Krowor Municipal","La Dade Kotopon Municipal","La Nkwantanang Madina Municipal","Ledzokuku Municipal","Ningo Prampram","Okaikwei Municipal","Shai Osudoku","Tema Metropolitan","Tema West Municipal","Weija Municipal"]},"NO":{"Name":"Northern","districts":["Bole","Bunkpurugu-Nyankpanduri","Central Gonja","Chereponi","East Gonja Municipal","East Mamprusi Municipal","Gushegu Municipal","Karaga","Kpandai","Kumbungu","Mamprugo Moaduri","Mion","Nanton","Nanumba North Municipal","Nanumba South","North Gonja","Saboba","Sagnarigu Municipal","Savelugu Municipal","Sawla-Tuna-Kalba","Tamale Metropolitan","Tatale Sangule","Tolon","West Gonja","West Mamprusi Municipal","Yendi Municipal","Yunyoo-Nasuan","Zabzugu"]},"UE":{"Name":"Upper East","districts":["Bawku Municipal","Bawku West","Binduri","Bolgatanga Municipal","Bongo","Builsa","Builsa South","Garu-Tempane","Kassena Nankana East","Kassena Nankana West","Nabdam","Pusiga","Talensi"]},"UW":{"Name":"Upper West","districts":["Daffiama Bussie Issa","Jirapa","Lambussie Karni","Lawra","Nadowli","Nandom","Sissala East","Sissala West","Wa East","Wa Municipal","Wa West"]},"VO":{"Name":"Volta","districts":["Adaklu","Afadjato South","Agotime Ziope","Akatsi North","Akatsi South","Biakoye","Central Tongu","Ho Municipal","Ho West","Hohoe Municipal","Jasikan","Kadjebi","Keta Municipal","Ketu North","Ketu South Municipal","Kpando Municipal","Krachi East","Krachi Nchumuru","Krachi West","Nkwanta North","Nkwanta South","North Dayi","North Tongu","South Dayi","South Tongu"]},"WE":{"Name":"Western","districts":["Ahanta West","Aowin\/Suaman","Bia West","Bia East","Bibiani\/Anhwiaso\/Bekwai","Bodi","Ellembele","Jomoro","Juaboso","Mpohor","Mpohor\/Wassa East","Nzema East Municipal","Prestea-Huni Valley","Sefwi Akontombra","Sefwi Wiawso Municipal","Sekondi Takoradi Metropolitan","Shama","Suaman","Tarkwa-Nsuaem Municipal","Wasa Amenfi East","Wasa Amenfi West","Wassa Amenfi Central"]},"status":"Success"}');
    console.log(($('select#region option:selected')));
    console.log('Ni');
    var dis = regionsJSON[$('select#region option:selected').val()].districts;
    $("datalist#district").empty();
    for(var i = dis.length - 1; i >= 0; i--) {
      $('datalist#district').append('<option value="'+dis[i]+'">'+dis[i]+'</option>');
    }
    <?php if (isset($reg)||$reg) { ?>
    $('select#region').change(function() {
    console.log($('select#region option:selected').val());
      var dis = regionsJSON[$('select#region option:selected').val()].districts;
      $("datalist#district").empty();
      for(var i = dis.length - 1; i >= 0; i--) {
        $('datalist#district').append('<option value="'+dis[i]+'">'+dis[i]+'</option>');
      }
    });
    <?php } ?>
  });
</script>
<script type="text/javascript">
    var regionsJSON = JSON.parse('{"AS":{"Name":"Ashanti","districts":["Adansi North","Adansi South","Afigya-Kwabre","Ahafo Ano North","Ahafo Ano South","Amansie Central","Amansie West","Asante Akim Central","Asante Akim North","Asante Akim South","Asokore Mampong","Atwima Kwanwoma","Atwima Mponua","Atwima Nwabiagya","Bekwai","Bosome Freho","Botsomtwe","Ejisu-Juaben","Ejura - Sekyedumase","Kumasi","Kwabre East","Mampong","Obuasi","Offinso North","Offinso South","Sekyere Afram Plains","Sekyere Central","Sekyere East","Sekyere Kumawu","Sekyere South"]},"BA":{"Name":"Brong-Ahafo","districts":["Asunafo North","Asunafo South","Asutifi North","Asutifi South","Atebubu-Amantin","Banda","Berekum East","Berekum","Dormaa East","Dormaa","Dormaa West","Jaman North","Jaman South","Kintampo North","Kintampo South","Nkoranza North","Nkoranza South","Pru","Sene East","Sene West","Sunyani","Sunyani West","Tain","Tano North","Tano South","Techiman","Techiman North","Wenchi"]},"CE":{"Name":"Central","districts":["Abura\/Asebu\/Kwamankese","Agona East","Agona West Municipal","Ajumako\/Enyan\/Essiam","Asikuma\/Odoben\/Brakwa","Assin North Municipal","Assin South","Awutu Senya East Municipal","Awutu Senya West","Cape Coast Metropolitan","Effutu Municipal","Ekumfi","Gomoa East","Gomoa West","Komenda\/Edina\/Eguafo\/Abirem Municipal","Mfantsiman Municipal","Twifo-Ati Morkwa","Twifo\/Heman\/Lower Denkyira","Upper Denkyira East Municipal","Upper Denkyira West"]},"EA":{"Name":"Eastern","districts":["Akuapim South","Akuapim North","Akyemansa","Asuogyaman","Ayensuano","Atiwa East","Atiwa West","Birim Central Municipal","Birim North","Birim South","Denkyembour","East Akim Municipal","Fanteakwa","Kwaebibirem","Kwahu Afram Plains North","Kwahu Afram Plains South","Kwahu East","Kwahu South","Kwahu West Municipal","Lower Manya Krobo","New-Juaben Municipal","Nsawam Adoagyire Municipal","Suhum","Upper Manya Krobo","Upper West Akim","West Akim Municipal","Yilo Krobo"]},"GA":{"Name":"Greater Accra","districts":["Ablekuma North Municipal","Ablekuma West Municipal","Accra Metropolitan","Ada East","Ada West","Adenta Municipal","Ashaiman Municipal","Ayawaso East Municipal","Ayawaso North Municipal","Ayawaso West Municipal","Ga Central","Ga East Municipal","Ga North Municipal","Ga South Municipal","Ga West Municipal","Kpone Katamanso Municipal","Krowor Municipal","La Dade Kotopon Municipal","La Nkwantanang Madina Municipal","Ledzokuku Municipal","Ningo Prampram","Okaikwei Municipal","Shai Osudoku","Tema Metropolitan","Tema West Municipal","Weija Municipal"]},"NO":{"Name":"Northern","districts":["Bole","Bunkpurugu-Nyankpanduri","Central Gonja","Chereponi","East Gonja Municipal","East Mamprusi Municipal","Gushegu Municipal","Karaga","Kpandai","Kumbungu","Mamprugo Moaduri","Mion","Nanton","Nanumba North Municipal","Nanumba South","North Gonja","Saboba","Sagnarigu Municipal","Savelugu Municipal","Sawla-Tuna-Kalba","Tamale Metropolitan","Tatale Sangule","Tolon","West Gonja","West Mamprusi Municipal","Yendi Municipal","Yunyoo-Nasuan","Zabzugu"]},"UE":{"Name":"Upper East","districts":["Bawku Municipal","Bawku West","Binduri","Bolgatanga Municipal","Bongo","Builsa","Builsa South","Garu-Tempane","Kassena Nankana East","Kassena Nankana West","Nabdam","Pusiga","Talensi"]},"UW":{"Name":"Upper West","districts":["Daffiama Bussie Issa","Jirapa","Lambussie Karni","Lawra","Nadowli","Nandom","Sissala East","Sissala West","Wa East","Wa Municipal","Wa West"]},"VO":{"Name":"Volta","districts":["Adaklu","Afadjato South","Agotime Ziope","Akatsi North","Akatsi South","Biakoye","Central Tongu","Ho Municipal","Ho West","Hohoe Municipal","Jasikan","Kadjebi","Keta Municipal","Ketu North","Ketu South Municipal","Kpando Municipal","Krachi East","Krachi Nchumuru","Krachi West","Nkwanta North","Nkwanta South","North Dayi","North Tongu","South Dayi","South Tongu"]},"WE":{"Name":"Western","districts":["Ahanta West","Aowin\/Suaman","Bia West","Bia East","Bibiani\/Anhwiaso\/Bekwai","Bodi","Ellembele","Jomoro","Juaboso","Mpohor","Mpohor\/Wassa East","Nzema East Municipal","Prestea-Huni Valley","Sefwi Akontombra","Sefwi Wiawso Municipal","Sekondi Takoradi Metropolitan","Shama","Suaman","Tarkwa-Nsuaem Municipal","Wasa Amenfi East","Wasa Amenfi West","Wassa Amenfi Central"]},"status":"Success"}');

    var url = window.location.origin + "/?pg=action"

    function setRegion(arg) {
        var name = arg
        if (/([\w\s]*)*(R|r)egion/.test(arg)) {
            var reg = arg.split(" Reg");
            name = reg[0];
            console.log(name);
        }
        var init = "GA";
        switch (name) {
            case 'Ashanti':
                init = "AS";
                break;
            case 'Brong-Ahafo':
                init = "BA";
                break;
            case 'Central':
                init = "CE";
                break;
            case 'Eastern':
                init = "EA";
                break;
            case 'Greater Accra':
                init = "GA";
                break;
            case 'Northern':
                init = "NO";
                break;
            case 'Upper East':
                init = "UE";
                break;
            case 'Upper West':
                init = "UW";
                break;
            case 'Volta':
                init = "VO";
                break;
            case 'Western':
                init = "WE";
                break;
            default:
                break;
        }
        return init;
    }

    $('select#region').change(function () {

        var dis = regionsJSON[$('select#region option:selected').val()].districts;

        for (var i = dis.length - 1; i >= 0; i--) {
            $('select#district').append('<option value="' + dis[i] + '">' + dis[i] + '</option>');
        }
    });

    function validateName(name) {
        if (name == "" || name == null || !(typeof name === 'string' || name instanceof String)) {
            $('#nameAlert').show();
            return 111;
        } else {
            $('#nameAlert').hide();
            return 222;
        }
        //If 111 - unavailable
        //If 121 - wrong format
        //If 222 - valid
        return 111;
    }

    function validateRegion(name) {
        if (name == "") {
            $('#regionAlert').show();
            return 111;
        } else {
            $('#regionAlert').hide();
            return 222;
        }
        //If 111 - unavailable
        //If 121 - wrong format
        //If 222 - valid
        return 111;
    }

    function validateCity(name) {
        if (name == "" || name == null || !(typeof name === 'string' || name instanceof String)) {
            $('#cityAlert').show();
            return 111;
        } else {
            $('#cityAlert').hide();
            return 222;
        }
        //If 111 - unavailable
        //If 121 - wrong format
        //If 222 - valid
        return 111;
    }

    function validatePrice(price) {
        if (price == "" || price == null) {
            $('#priceAlert').show();
            return 111;
        } else {
            $('#priceAlert').hide();
            return 222;
        }
        //If 111 - unavailable
        //If 121 - wrong format
        //If 222 - valid
        return 111;
    }

    function validateNumber(number) {
        if (number == "" || number == null) {
            $('#numberAlert').show();
            return 111;
        } else if (/^(([0]|\+233){1}[2,3,5]{1}(?:\d[ ]*){8}){1}/.test(number)) {
            $('#numberAlert').hide();
            $('#numberError').hide();
            return 222;
        } else {
            $('#numberError').show();
            return 121;
        }
        //If 111 - unavailable
        //If 121 - wrong format
        //If 222 - valid
        return 111;
    }

    $('input#formCheckbox').prop("checked", false);

    function validate(val){
   // console.log($('input.form-check-input'));
   var btn = $('button#submit')//payment disabled, to enable use $('button#pay');
    var checkbox = $('input#formCheckbox');
    var done = true;
  if (validateName($('#host-name').val())==222) {
    checkbox.prop("checked", true);
    btn.prop("disabled", false);
      checkbox.removeAttr('data-toggle');
  }else{
    checkbox.prop("checked", false);
    btn.prop("disabled", true);
    done=false;
      checkbox.attr('data-toggle', 'popover');
  }
  if (validateRegion($('#region').val())==222) {
    checkbox.prop("checked", true);
    btn.prop("disabled", false);
      checkbox.removeAttr('data-toggle');
  }else{
    checkbox.prop("checked", false);
    btn.prop("disabled", true);
    done=false;
      checkbox.attr('data-toggle', 'popover');
  }
  if (validateCity($('#town').val())==222) {
    checkbox.attr("checked", true);
    btn.prop("disabled", false);
      checkbox.removeAttr('data-toggle');
  }else{
    checkbox.prop("checked", false);
    btn.prop("disabled", true);
      checkbox.attr('data-toggle', 'popover');
      done=false;
  }
  if (validatePrice($('#price').val())==222) {
    checkbox.prop("checked", true);
    btn.prop("disabled", false);
      checkbox.removeAttr('data-toggle');
  }else{
    $(val).prop("checked", false);
    btn.prop("disabled", true);
      checkbox.attr('data-toggle', 'popover');
    done=false;
  }
  if (validateNumber($('#host-contact').val())==222) {
    checkbox.prop("checked", true);
    btn.prop("disabled", false);
      checkbox.removeAttr('data-toggle');
  }else{
    checkbox.prop("checked", false);
    btn.prop("disabled", true);
    done=false;
      checkbox.attr('data-toggle', 'popover');
  }

/* if($('img#profile').length==0){
      $('#profileAlert').show();
      checkbox.prop("checked", false);
      btn.prop("disabled", true);
      done=false;
      checkbox.attr('data-toggle', 'popover');
    } */

  if($("input[name='image[]']").length==0){
    $('#multAlert').show();
    checkbox.prop("checked", false);
    btn.prop("disabled", true);
    done=false;
    checkbox.attr('data-toggle', 'popover');
  }
  //$(window).scrollTop('500px');
  if(done){
      checkbox.removeAttr('data-toggle');
      //console.log('done:',checkbox.attr('data-toggle', false));
  }else{
      checkbox.attr('data-toggle', 'popover');
      //console.log('not done:',checkbox.attr('data-toggle', 'popover'));
  }
}

    $('.popover-dismiss').popover({
        trigger: 'focus'
    })
</script>
<script>
    var submitted = false;

    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    $("form#custom-form").submit(function () {
        submitted = true;
    });

    if ('host' != "done") {
        document.cookie = "userSpace=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        $(window).on('unload', function (e) {
            document.cookie = "userSpace=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        });
    }
    if ('host' == "host" && !submitted) {
        $(window).bind('beforeunload', function () {
            return 'Are you sure you want to leave? Stored Data will be deleted.';
        });
    }

    function getSlide(num) {
        switch (num) {
            case 0:
                return 'First';
                break;
            case 1:
                return 'Second';
                break;
            case 2:
                return 'Third';
                break;
            case 3:
                return 'Fourth';
                break;
            case 4:
                return 'Fifth';
                break;
            default:
                return 'Sixth';
                break;
        }
    }

    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }

     $(document).ready(function () {
      setCookie('num', 0,1);
        // FileInput

        $('#profileUpBtn').on('focus', function () {
          $('#profileAlert').hide();
          if(validateName($('#host-name').val())==222&&validateNumber($('#host-contact').val())==222){
            var holder = $(this);
            holder.parent().siblings().trigger('focus');
            holder.parent().parent().parent().parent().parent().addClass('is-focused');
            holder.parent().parent().parent().find('input').attr('disabled', true);
            holder.attr('disabled', true);
            var widget = cloudinary.openUploadWidget({    
            cloudName: "dmvymb8nn",    
            uploadPreset: "qrzvjxti",    
            sources: [        
                "local",        
                "url",        
                "camera",        
                //"facebook",        
                //"dropbox",        
                //"instagram",        
                "image_search"    
            ],     
            form:'#custom-form',   
            fieldName:'userImg',
            cropping: true,    
            multiple: false,    
            defaultSource: "local",
            styles: {        
                palette: {            
                    window: "#FFFFFF",            
                    windowBorder: "#90A0B3",            
                    tabIcon: "#0078FF",            
                    menuIcons: "#5A616A",            
                    textDark: "#000000",            
                    textLight: "#FFFFFF",            
                    link: "#0078FF",            
                    action: "#FF620C",            
                    inactiveTabIcon: "#103B73",            
                    error: "#F44235",            
                    inProgress: "#0078FF",            
                    complete: "#20B832",            
                    sourceBg: "#E4EBF1"        
                },        
                fonts: {            
                    default: null,            
                    "'Kalam', cursive": {                
                        url: "https://fonts.googleapis.com/css?family=Kalam",                
                        active: true            
                    }        
                }    
            }
        }, 
        (err, result) => {   
            if (!err) {   
               console.log("Upload Widget event - ", result); 
               if (widget.isShowing()&&(holder.attr('disabled')=='disabled')){
                  holder.parent().parent().find('input').attr('disabled', false);
                  holder.attr('disabled', false);
                  holder.parent().parent().parent().parent().parent().removeClass('is-focused');
               }  
            }  
            if (result && result.event === "queues-end") {
              if($("input[name='userImg']").length!=0){
                $("input[name='userImg']").remove();
              }
              }
            if (result && result.event === "success") {
               console.log((holder.parent().parent().find('img')));
               if(holder.parent().parent().find('img').length==0){
                     holder.parent().parent().prepend('<img id="profile" src="'+result.info.thumbnail_url+'"  alt="..." class="img-thumbnail">');
                     holder.parent().parent().parent().addClass('col-md-4 offset-md-4');
                     holder.parent().parent().parent().removeClass('col-md-12');
                     holder.parent().parent().find('input').hide();
                     holder.attr('disabled', false);
                  ///setCookie(((getCookie('Uname')==imageId)?imageId:getCookie('Uname'))+'_img', i , 1);
                }else{
                     holder.parent().parent().find('img').attr('src', result.info.thumbnail_url);
                }
              }
        });
        }
      });

        $('#multUpBtn').on('focus', function () {
            $('#multAlert').hide();
          if(validateRegion($('#region').val())==222&&validateCity($('#town').val())==222&&validateName($('#host-name').val())==222&&validateNumber($('#host-contact').val())==222){
            setCookie('num',((getCookie('num')!="")? getCookie('num'):0),1);
            var num = 0;
            var slide = 'First';
            var holder = $(this);
            holder.parent().siblings().trigger('focus');
            holder.parent().parent().parent().parent().parent().addClass('is-focused');
            holder.parent().parent().parent().find('input').attr('disabled', true);
            holder.attr('disabled', true);
            var widget = cloudinary.openUploadWidget({    
            cloudName: "dmvymb8nn",    
            uploadPreset: "qrzvjxti",    
            sources: [        
                "local",        
                "url",        
                "camera",        
                //"facebook",        
                //"dropbox",        
                //"instagram",        
                "image_search"    
            ],     
            form:'#custom-form',   
            fieldName:'image[]',
            cropping: false,    
            multiple: true,  
            maxFiles: 5,  
            defaultSource: "local",
            styles: {        
                palette: {            
                    window: "#FFFFFF",            
                    windowBorder: "#90A0B3",            
                    tabIcon: "#0078FF",            
                    menuIcons: "#5A616A",            
                    textDark: "#000000",            
                    textLight: "#FFFFFF",            
                    link: "#0078FF",            
                    action: "#FF620C",            
                    inactiveTabIcon: "#103B73",            
                    error: "#F44235",            
                    inProgress: "#0078FF",            
                    complete: "#20B832",            
                    sourceBg: "#E4EBF1"        
                },        
                fonts: {            
                    default: null,            
                    "'Kalam', cursive": {                
                        url: "https://fonts.googleapis.com/css?family=Kalam",                
                        active: true            
                    }        
                }    
            }
        }, 
        (err, result) => {   
            if (!err) {   
               console.log("Upload Widget event - ", result); 
               if (widget.isShowing()&&(holder.attr('disabled')=='disabled')){
                  holder.parent().parent().find('input').attr('disabled', false);
                  holder.attr('disabled', false);
                  holder.parent().parent().parent().parent().parent().removeClass('is-focused');
               }else{
               }
            }  
            if (result && result.event === "success") {
              num = getCookie('num');
              slide = getSlide(num);
               $('div.carousel-inner').append('<div class="carousel-item '+((num==0)?'active':'')+'"><img class="d-block w-100" src="'+"https://res.cloudinary.com/dmvymb8nn/image/upload/c_scale,w_600,h_500,f_webp/"+result.info.path+'" alt="'+slide+' slide"></div>');
              $('ol.carousel-indicators').append('<li data-target="#carouselExampleIndicators" data-slide-to="'+num+'" '+((num==0)?'class="active"':'')+'></li>');
              setCookie('num', ++num,1);
              }
              
        });
          }
        });
        $('#profileUpBtn').on('focusout', function () {
            $(this).parent().siblings().trigger('focusout');
        });
    });
function pay_finish() {
  if ($('.circle-loader').hasClass('load-complete')) {
    $('.circle-loader').removeClass('load-complete load-success load-failure');
    $('.checkmark').hide();
  }
        $('#loginModal').modal('hide');
        $('#payModalForm').show();
        $('#pendSt').hide();
        $('.circle-loader').removeClass('load-complete load-success load-failure');
        $('.checkmark').hide();
}

function pay_pending() {
  if ($('.circle-loader').hasClass('load-complete')) {
    $('.circle-loader').removeClass('load-complete load-success load-failure');
    $('.checkmark').hide();
  }
  $('#payModalForm').hide();
  $('#pendSt').show();
  $('#makePay').text('Pending');
}

function pay_done(status) {
  if ($('.circle-loader').hasClass('load-complete')) {
    $('.circle-loader').removeClass('load-complete load-success load-failure');
    $('.checkmark').hide();
  }
    console.log('DONE');
    $('#pendSt').show();
    $('#payModalForm').hide();
  if(status){
    $('.circle-loader').addClass('load-complete load-success');
    $('.checkmark').show();
    $('#submit').show();
    $('#pay').hide();
  
}else{
    $('.circle-loader').addClass('load-complete load-failure');
    $('.checkmark').hide();
}
    done = true;
  $('#makePay').hide();
}

$('#loginModal').click(function() {
  if(done){
        window.setTimeout(pay_finish(), 500);
        done = false;
  }
});
  function checkPaymentStatus(orderID) {
    var i = 0;
    var jsondata = JSON.parse('{"payment":{"status":0}}');
    console.log(url+"/test.php?id="+orderID);
  $.get(url+"/test.php?id="+orderID, function(data, status){
   if (status=='success') {
    jsondata = JSON.parse(data);
    if(jsondata.order.status==0){
      console.log('Invalid orderID');
      pay_done(false);
      return;
    }
    if(jsondata.payment.status=='Pending'){
        pay_pending();
      if(i==50)
        return;
      ++i;
      window.setTimeout(checkPaymentStatus(orderID), 5000);
    }else if(jsondata.payment.status=='Successful'){ 
        pay_done(true);
       // window.setTimeout(pay_finish(), 3000);
        return;
    }else{ 
        pay_done(false);
        return;
    } 
  }
  });
  return jsondata.payment.status
}
  document.getElementById('makePay').addEventListener('click',function(e) {
    $(this).addClass('disabled');
    pay_pending();
    var number = document.getElementById('payNum').value;
  var d = new Date();
  var orderID = number+("0"+d.getSeconds()).slice(-2)+("0"+d.getMinutes()).slice(-2)+("0"+d.getHours()).slice(-2)+("0"+d.getDate()).slice(-2)+("0"+d.getMonth()).slice(-2)+(""+d.getFullYear()).slice(-2);
       requestPayload = '{"price": 1,"network": "mtn","recipient_number": "0540757034","sender": "'+number+'","option": "rmtm","apikey": "401ac4c34c87f76b39dfa2438d2581096a4a0056","orderID": "'+orderID+'"}';

    var xhr = new XMLHttpRequest();
  xhr.open("POST", 'https://client.teamcyst.com/api_call.php', true);

  //Send the proper header information along with the request
  xhr.setRequestHeader("Content-type", "application/json");

     // checkPaymentStatus(orderID);
  xhr.onreadystatechange = function() {
    //Call a function when the state changes.
      checkPaymentStatus(orderID);
      if(xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200) {
      }
  }
  //Replace requestPayload with the payload you would be sending
  xhr.send(requestPayload); 
// console.log('Heha');
});

    $('#mdad').click(function () {
        //$('#makePay').prop('disabled', true);
        var orderID = getCookie('testVar');
        switch (orderID) {
            case '0':
                console.log(orderID);
                setCookie('testVar', 1, 1);
                $('#payModalForm').hide();
                $('#pendSt').show();
                break;
            case '1':
                setCookie('testVar', 2, 1);
                $('#pendSt').hide();
                $('#doneSt').show();
                break;
            case '2':
                setCookie('testVar', 0, 1);
                setCookie('step', 4, 1);
                $('#loginModal').modal('hide');
                $('#submit').show();
                $('#pay').hide();
                setCookie('step', NULL, -5);
                break;
            default:
                console.log(orderID);
                setCookie('testVar', 0, 1);
                break;
        }
    });

    $('input#short_desc').keypress(function () {
        $('.listingTitle').text($('input#short_desc').val());
    });
    $('input#description').keypress(function () {
        $('#listingDesc').text($('input#short_desc').val());
    });
    $('input#short_desc').blur(function () {
        var payload = {next: 'update', signature: "", short_desc: $('input#short_desc').val()}
        var results;
        $.post(url, payload, function (data, status) {
            results = JSON.parse(data);
            console.log(results);
            if (results && results.status == 'success') {/*do something*/
            }
        });
    });
    $('input#description').blur(function () {
        var payload = {next: 'update', signature: "", description: $('input#description').val()}
        var results;
        $.post(url, payload, function (data, status) {
            results = JSON.parse(data);
            console.log(results);
            if (results && results.status == 'success') {/*do something*/
            }
        });
    });
</script>
<?php   break;
      case 'find': ?>
<script src="<?php echo $dir ?>/assets/js/bootstrap/core/jquery.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/core/popper.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/core/bootstrap-material-design.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/plugins/moment.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/plugins/bootstrap-datetimepicker.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/plugins/nouislider.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/material-kit.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/main/owl.carousel.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/main/main.js"></script>
<script type="text/javascript">   
  $(document).ready(function () {
    var regionsJSON = JSON.parse('{"AS":{"Name":"Ashanti","districts":["Adansi North","Adansi South","Afigya-Kwabre","Ahafo Ano North","Ahafo Ano South","Amansie Central","Amansie West","Asante Akim Central","Asante Akim North","Asante Akim South","Asokore Mampong","Atwima Kwanwoma","Atwima Mponua","Atwima Nwabiagya","Bekwai","Bosome Freho","Botsomtwe","Ejisu-Juaben","Ejura - Sekyedumase","Kumasi","Kwabre East","Mampong","Obuasi","Offinso North","Offinso South","Sekyere Afram Plains","Sekyere Central","Sekyere East","Sekyere Kumawu","Sekyere South"]},"BA":{"Name":"Brong-Ahafo","districts":["Asunafo North","Asunafo South","Asutifi North","Asutifi South","Atebubu-Amantin","Banda","Berekum East","Berekum","Dormaa East","Dormaa","Dormaa West","Jaman North","Jaman South","Kintampo North","Kintampo South","Nkoranza North","Nkoranza South","Pru","Sene East","Sene West","Sunyani","Sunyani West","Tain","Tano North","Tano South","Techiman","Techiman North","Wenchi"]},"CE":{"Name":"Central","districts":["Abura\/Asebu\/Kwamankese","Agona East","Agona West Municipal","Ajumako\/Enyan\/Essiam","Asikuma\/Odoben\/Brakwa","Assin North Municipal","Assin South","Awutu Senya East Municipal","Awutu Senya West","Cape Coast Metropolitan","Effutu Municipal","Ekumfi","Gomoa East","Gomoa West","Komenda\/Edina\/Eguafo\/Abirem Municipal","Mfantsiman Municipal","Twifo-Ati Morkwa","Twifo\/Heman\/Lower Denkyira","Upper Denkyira East Municipal","Upper Denkyira West"]},"EA":{"Name":"Eastern","districts":["Akuapim South","Akuapim North","Akyemansa","Asuogyaman","Ayensuano","Atiwa East","Atiwa West","Birim Central Municipal","Birim North","Birim South","Denkyembour","East Akim Municipal","Fanteakwa","Kwaebibirem","Kwahu Afram Plains North","Kwahu Afram Plains South","Kwahu East","Kwahu South","Kwahu West Municipal","Lower Manya Krobo","New-Juaben Municipal","Nsawam Adoagyire Municipal","Suhum","Upper Manya Krobo","Upper West Akim","West Akim Municipal","Yilo Krobo"]},"GA":{"Name":"Greater Accra","districts":["Ablekuma North Municipal","Ablekuma West Municipal","Accra Metropolitan","Ada East","Ada West","Adenta Municipal","Ashaiman Municipal","Ayawaso East Municipal","Ayawaso North Municipal","Ayawaso West Municipal","Ga Central","Ga East Municipal","Ga North Municipal","Ga South Municipal","Ga West Municipal","Kpone Katamanso Municipal","Krowor Municipal","La Dade Kotopon Municipal","La Nkwantanang Madina Municipal","Ledzokuku Municipal","Ningo Prampram","Okaikwei Municipal","Shai Osudoku","Tema Metropolitan","Tema West Municipal","Weija Municipal"]},"NO":{"Name":"Northern","districts":["Bole","Bunkpurugu-Nyankpanduri","Central Gonja","Chereponi","East Gonja Municipal","East Mamprusi Municipal","Gushegu Municipal","Karaga","Kpandai","Kumbungu","Mamprugo Moaduri","Mion","Nanton","Nanumba North Municipal","Nanumba South","North Gonja","Saboba","Sagnarigu Municipal","Savelugu Municipal","Sawla-Tuna-Kalba","Tamale Metropolitan","Tatale Sangule","Tolon","West Gonja","West Mamprusi Municipal","Yendi Municipal","Yunyoo-Nasuan","Zabzugu"]},"UE":{"Name":"Upper East","districts":["Bawku Municipal","Bawku West","Binduri","Bolgatanga Municipal","Bongo","Builsa","Builsa South","Garu-Tempane","Kassena Nankana East","Kassena Nankana West","Nabdam","Pusiga","Talensi"]},"UW":{"Name":"Upper West","districts":["Daffiama Bussie Issa","Jirapa","Lambussie Karni","Lawra","Nadowli","Nandom","Sissala East","Sissala West","Wa East","Wa Municipal","Wa West"]},"VO":{"Name":"Volta","districts":["Adaklu","Afadjato South","Agotime Ziope","Akatsi North","Akatsi South","Biakoye","Central Tongu","Ho Municipal","Ho West","Hohoe Municipal","Jasikan","Kadjebi","Keta Municipal","Ketu North","Ketu South Municipal","Kpando Municipal","Krachi East","Krachi Nchumuru","Krachi West","Nkwanta North","Nkwanta South","North Dayi","North Tongu","South Dayi","South Tongu"]},"WE":{"Name":"Western","districts":["Ahanta West","Aowin\/Suaman","Bia West","Bia East","Bibiani\/Anhwiaso\/Bekwai","Bodi","Ellembele","Jomoro","Juaboso","Mpohor","Mpohor\/Wassa East","Nzema East Municipal","Prestea-Huni Valley","Sefwi Akontombra","Sefwi Wiawso Municipal","Sekondi Takoradi Metropolitan","Shama","Suaman","Tarkwa-Nsuaem Municipal","Wasa Amenfi East","Wasa Amenfi West","Wassa Amenfi Central"]},"status":"Success"}');
    console.log(($('select#region option:selected')));
    console.log('Ni');
    var dis = regionsJSON[$('select#region option:selected').val()].districts;
    $("datalist#district").empty();
    for(var i = dis.length - 1; i >= 0; i--) {
      $('datalist#district').append('<option value="'+dis[i]+'">'+dis[i]+'</option>');
    }
    <?php if (isset($reg)||$reg) { ?>
    $('select#region').change(function() {
    console.log($('select#region option:selected').val());
      var dis = regionsJSON[$('select#region option:selected').val()].districts;
      $("datalist#district").empty();
      for(var i = dis.length - 1; i >= 0; i--) {
        $('datalist#district').append('<option value="'+dis[i]+'">'+dis[i]+'</option>');
      }
    });
    <?php } ?>
  });
</script>
<?php break;
        case 'view':
        case 'space': ?>
<script src="<?php echo $dir ?>/assets/js/bootstrap/core/jquery.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/core/popper.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/core/bootstrap-material-design.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/plugins/moment.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/plugins/bootstrap-datetimepicker.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/plugins/nouislider.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/material-kit.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/main/owl.carousel.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/main/main.js"></script>
<?php break;
    case 'done': ?>
<script src="<?php echo $dir ?>/assets/js/bootstrap/core/jquery.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/core/popper.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/core/bootstrap-material-design.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/plugins/moment.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/plugins/bootstrap-datetimepicker.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/plugins/nouislider.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/material-kit.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/main/owl.carousel.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/main/main.js"></script>
<script type="text/javascript">
    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
    $(document).ready(function() {
        var payload={};
        var success = true;
       // if(getCookie('loaded')!=1)
        $.post("<?php echo $dir ?>/api/efiewura/create",<?php echo json_encode($efiewura);  ?>,function(data, status) {
                data = JSON.parse(data);
                if (data && data.status == 'success') {
                    <?php if (isset($userImage)): ?>
                        payload = <?php echo json_encode($userImage);  ?>;
                        payload.user_id = data.data['id'];
                        $.post("<?php echo $dir ?>/api/image/create",payload,function(data, status) {
                            data = JSON.parse(data);
                            if (data && data.status == 'success') {
                                var obj = <?php echo json_encode($images);  ?>;
                                for (var i = obj.length - 1; i >= 0; i--) {
                                    prop = Object.entries(obj[i]);
                                    for( let prop1 in prop ){
                                    console.log( prop[prop1] );
                                    }
                                }
                            }else{
                                success = false;
                            }
                        });
                    <?php endif ?>
                        payload = <?php echo json_encode($space);  ?>;
                        payload.Uid = data.data['id'];
                    $.post("<?php echo $dir ?>/api/space/create",payload,function(data, status) {
                        data = JSON.parse(data);
                        if (data && data.status == 'success') {
                            var obj = <?php echo json_encode($images);  ?>;
                            for (var i = obj.length - 1; i >= 0; i--) {
                                obj[i].space_id = data.data.id;
                                $.post("<?php echo $dir ?>/api/image/create",obj[i],function(data, status) {
                                    data = JSON.parse(data);
                                    if (data && data.status == 'success') {
                                        console.log(data+" images uploaded");
                                    }else{
                                        success = false;
                                    }
                                });
                            }
            if ($('.circle-loader').hasClass('load-complete')) {
                 $('.circle-loader').removeClass('load-complete load-success load-failure');
                 $('.checkmark').hide();
            }
            if(success){
                $('.circle-loader').addClass('load-complete load-success');
                $('.checkmark').show();
                setCookie('loaded',1,1);
              
            }else{
                $('.circle-loader').addClass('load-complete load-failure');
                $('.checkmark').hide();
            }
                        }else{
                            success = false;
                        }
                    });
                }else{
                    success = false;
                }
            });
    });
</script>
<?php  
        break;
    case 'q': ?>
<script src="<?php echo $dir ?>/assets/js/bootstrap/core/jquery.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/core/popper.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/core/bootstrap-material-design.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/plugins/moment.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/plugins/bootstrap-datetimepicker.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/plugins/nouislider.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/bootstrap/material-kit.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/main/owl.carousel.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
<script src="<?php echo $dir ?>/assets/js/main/main.js"></script><script type="text/javascript">   
  $(document).ready(function () {
    var regionsJSON = JSON.parse('{"AS":{"Name":"Ashanti","districts":["Adansi North","Adansi South","Afigya-Kwabre","Ahafo Ano North","Ahafo Ano South","Amansie Central","Amansie West","Asante Akim Central","Asante Akim North","Asante Akim South","Asokore Mampong","Atwima Kwanwoma","Atwima Mponua","Atwima Nwabiagya","Bekwai","Bosome Freho","Botsomtwe","Ejisu-Juaben","Ejura - Sekyedumase","Kumasi","Kwabre East","Mampong","Obuasi","Offinso North","Offinso South","Sekyere Afram Plains","Sekyere Central","Sekyere East","Sekyere Kumawu","Sekyere South"]},"BA":{"Name":"Brong-Ahafo","districts":["Asunafo North","Asunafo South","Asutifi North","Asutifi South","Atebubu-Amantin","Banda","Berekum East","Berekum","Dormaa East","Dormaa","Dormaa West","Jaman North","Jaman South","Kintampo North","Kintampo South","Nkoranza North","Nkoranza South","Pru","Sene East","Sene West","Sunyani","Sunyani West","Tain","Tano North","Tano South","Techiman","Techiman North","Wenchi"]},"CE":{"Name":"Central","districts":["Abura\/Asebu\/Kwamankese","Agona East","Agona West Municipal","Ajumako\/Enyan\/Essiam","Asikuma\/Odoben\/Brakwa","Assin North Municipal","Assin South","Awutu Senya East Municipal","Awutu Senya West","Cape Coast Metropolitan","Effutu Municipal","Ekumfi","Gomoa East","Gomoa West","Komenda\/Edina\/Eguafo\/Abirem Municipal","Mfantsiman Municipal","Twifo-Ati Morkwa","Twifo\/Heman\/Lower Denkyira","Upper Denkyira East Municipal","Upper Denkyira West"]},"EA":{"Name":"Eastern","districts":["Akuapim South","Akuapim North","Akyemansa","Asuogyaman","Ayensuano","Atiwa East","Atiwa West","Birim Central Municipal","Birim North","Birim South","Denkyembour","East Akim Municipal","Fanteakwa","Kwaebibirem","Kwahu Afram Plains North","Kwahu Afram Plains South","Kwahu East","Kwahu South","Kwahu West Municipal","Lower Manya Krobo","New-Juaben Municipal","Nsawam Adoagyire Municipal","Suhum","Upper Manya Krobo","Upper West Akim","West Akim Municipal","Yilo Krobo"]},"GA":{"Name":"Greater Accra","districts":["Ablekuma North Municipal","Ablekuma West Municipal","Accra Metropolitan","Ada East","Ada West","Adenta Municipal","Ashaiman Municipal","Ayawaso East Municipal","Ayawaso North Municipal","Ayawaso West Municipal","Ga Central","Ga East Municipal","Ga North Municipal","Ga South Municipal","Ga West Municipal","Kpone Katamanso Municipal","Krowor Municipal","La Dade Kotopon Municipal","La Nkwantanang Madina Municipal","Ledzokuku Municipal","Ningo Prampram","Okaikwei Municipal","Shai Osudoku","Tema Metropolitan","Tema West Municipal","Weija Municipal"]},"NO":{"Name":"Northern","districts":["Bole","Bunkpurugu-Nyankpanduri","Central Gonja","Chereponi","East Gonja Municipal","East Mamprusi Municipal","Gushegu Municipal","Karaga","Kpandai","Kumbungu","Mamprugo Moaduri","Mion","Nanton","Nanumba North Municipal","Nanumba South","North Gonja","Saboba","Sagnarigu Municipal","Savelugu Municipal","Sawla-Tuna-Kalba","Tamale Metropolitan","Tatale Sangule","Tolon","West Gonja","West Mamprusi Municipal","Yendi Municipal","Yunyoo-Nasuan","Zabzugu"]},"UE":{"Name":"Upper East","districts":["Bawku Municipal","Bawku West","Binduri","Bolgatanga Municipal","Bongo","Builsa","Builsa South","Garu-Tempane","Kassena Nankana East","Kassena Nankana West","Nabdam","Pusiga","Talensi"]},"UW":{"Name":"Upper West","districts":["Daffiama Bussie Issa","Jirapa","Lambussie Karni","Lawra","Nadowli","Nandom","Sissala East","Sissala West","Wa East","Wa Municipal","Wa West"]},"VO":{"Name":"Volta","districts":["Adaklu","Afadjato South","Agotime Ziope","Akatsi North","Akatsi South","Biakoye","Central Tongu","Ho Municipal","Ho West","Hohoe Municipal","Jasikan","Kadjebi","Keta Municipal","Ketu North","Ketu South Municipal","Kpando Municipal","Krachi East","Krachi Nchumuru","Krachi West","Nkwanta North","Nkwanta South","North Dayi","North Tongu","South Dayi","South Tongu"]},"WE":{"Name":"Western","districts":["Ahanta West","Aowin\/Suaman","Bia West","Bia East","Bibiani\/Anhwiaso\/Bekwai","Bodi","Ellembele","Jomoro","Juaboso","Mpohor","Mpohor\/Wassa East","Nzema East Municipal","Prestea-Huni Valley","Sefwi Akontombra","Sefwi Wiawso Municipal","Sekondi Takoradi Metropolitan","Shama","Suaman","Tarkwa-Nsuaem Municipal","Wasa Amenfi East","Wasa Amenfi West","Wassa Amenfi Central"]},"status":"Success"}');
    console.log(($('select#region option:selected')));
    console.log('Ni');
    var dis = regionsJSON[$('select#region option:selected').val()].districts;
    $("datalist#district").empty();
    for(var i = dis.length - 1; i >= 0; i--) {
      $('datalist#district').append('<option value="'+dis[i]+'">'+dis[i]+'</option>');
    }
    <?php if (isset($reg)||$reg) { ?>
    $('select#region').change(function() {
    console.log($('select#region option:selected').val());
      var dis = regionsJSON[$('select#region option:selected').val()].districts;
      $("datalist#district").empty();
      for(var i = dis.length - 1; i >= 0; i--) {
        $('datalist#district').append('<option value="'+dis[i]+'">'+dis[i]+'</option>');
      }
    });
    <?php } ?>
  });
</script>
<?php break;
    default:
        # code...
        break;
} ?>