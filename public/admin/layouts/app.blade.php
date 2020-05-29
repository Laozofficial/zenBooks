<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Ellison Corp">
  <title>Sales Rep Application</title>
  <link rel="icon" href="{{ asset('admin/assets/img/brand/favicon.png') }}" type="image/png">
  <link rel="stylesheet" href="{{ asset('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css') }}" />
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/nucleo/css/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('admin/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
 
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/argon.css?v=1.1.0') }}" type="text/css">
  <style>
    #login-card{
      /*background: rgba(0, 0, 0, 0.4);*/
      background-color: transparent !important;
      border: none;
     
    }

     body,html,p,h1,h2,h3,h4,h5,h6,span,li,ul{
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji" !important;
        font-size: 0.9rem !important;
        font-weight: 500 !important;
      }

      .large{
        font-size: 1.3rem !important;
      }

      
  </style>
</head>

<body>

        <main>
            @yield('content')
        </main>  

          <!-- Core -->

          
  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/three.js/96/three.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/vanta.js') }}"></script>
  <script>
       VANTA.BIRDS({
        el: "#particles-js",
        mouseControls: true,
        touchControls: true,
        minHeight: 900.00,
        minWidth: 300.00,
        scale: 1.00,
        scaleMobile: 1.00
      });
  </script>
  <script src="{{ asset('admin/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('https://cdn.jsdelivr.net/momentjs/latest/moment.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/js-cookie/js.cookie.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js') }}"></script>
  <!-- Optional JS -->
  {{--  <script src="{{ asset('admin/assets/vendor/onscreen/dist/on-screen.umd.min.js') }}"></script>  --}}
  <!-- Argon JS and other addons-->
  <script src="{{ asset('admin/assets/js/argon.js?v=1.1.0') }}"></script>
  <script src="{{ asset('admin/assets/js/demo.min.js') }}"></script>
  <script src="{{ asset('admin/assets/js/axios.min.js') }}"></script>
  <script src="{{ asset('admin/assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
 
  <script>
    $(document).ready( function() {
      $('#submitForm').click( function (){
        $('#loading').html('<i class="fa fa-spinner fa-spin"></i>')
      })

      $('.alert').fadeOut(9000);
@auth
      //handle the method that bans a project lead
        $('#banProjectLeadModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('id') // Extract info from data-* attributes
          var url = button.data('url') // get the url
          $('.approval').html('<button type="button" class="btn btn-white" id="banProjectLead">Ok, Got it</button>')
          @auth
          @if(Auth::user()->role == 'admin')
          $('#banProjectLead').click(function (){
            $('.approval').html('<button type="button" class="btn btn-white"><i class="fa fa-spin fa-spinner"></i></button>')
             axios.get(url+recipient)
              .then(function (response) {
                console.log(response.data)
                $('.warning').hide()
                $('.success').text(response.data)
                setTimeout(() =>{
                   $('.approval').html('<button type="button" class="btn btn-white">Done</button>')
                    $('#banProjectLeadModal').modal('hide')
                     location.reload()
                }, 3000)
              })
              .catch(function (error) {
                // handle error
                $('.success').text('Something went wrong')
                 location.reload()
                console.log(error);
              })
          })
          @elseif(Auth::user()->role == 'super_admin')
            $('#banProjectLead').click(function (){
            $('.approval').html('<button type="button" class="btn btn-white"><i class="fa fa-spin fa-spinner"></i></button>')
             axios.get(url+recipient)
              .then(function (response) {
                console.log(response.data)
                $('.warning').hide()
                $('.success').text(response.data)
                setTimeout(() =>{
                   $('.approval').html('<button type="button" class="btn btn-white">Done</button>')
                    $('#banProjectLeadModal').modal('hide')
                     location.reload()
                }, 3000)
              })
              .catch(function (error) {
                // handle error
                $('.success').text('Something went wrong')
                 location.reload()
                console.log(error);
              })
          })
          @endif
          @endauth
        })

        //activate a project lead
         $('#activateProjectLeadModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('id') // Extract info from data-* attributes
          var url = button.data('url') // get the url
          $('.active-approval').html('<button type="button" class="btn btn-white" id="activateProjectLead">Ok, Got it</button>')
          $('#activateProjectLead').click(function (){
            @auth
            @if(Auth::user()->role == 'super_admin')
               $('.active-approval').html('<button type="button" class="btn btn-white"><i class="fa fa-spin fa-spinner"></i></button>')
             axios.get(url+recipient)
              .then(function (response) {
                console.log(response.data)
                   $('.active-approval').html('<button type="button" class="btn btn-white">Done</button>')
                $('.activation-warning').hide()
                $('.activation-success').text(response.data)
                setTimeout(() =>{
                    $('#activateProjectLeadModal').modal('hide')
                     location.reload()
                }, 3000)
              })
              .catch(function (error) {
                // handle error
                $('.activation-success').text('Something went wrong')
                 location.reload()
                console.log(error);
              })
            @elseif(Auth::user()->role == 'admin')
               $('.active-approval').html('<button type="button" class="btn btn-white"><i class="fa fa-spin fa-spinner"></i></button>')
             axios.get(url+recipient)
              .then(function (response) {
                console.log(response.data)
                   $('.active-approval').html('<button type="button" class="btn btn-white">Done</button>')
                $('.activation-warning').hide()
                $('.activation-success').text(response.data)
                setTimeout(() =>{
                    $('#activateProjectLeadModal').modal('hide')
                     location.reload()
                }, 3000)
              })
              .catch(function (error) {
                // handle error
                $('.activation-success').text('Something went wrong')
                 location.reload()
                console.log(error);
              })
            @else 
              $('.activation-success').text('you dont have permission to make this call')
            @endif
            @endauth
          })
        })

        //handles the edit brand name logic
        $('#editBrandModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('id') // Extract info from data-* attributes
          var url = button.data('url'); 
          var brand_name = button.data('name');
          console.log(url);
          var modal = $(this)
          //modal.find('.modal-title').text('Update the ' + brand_name+ ' Brand')
          modal.find('#brand-id').val(recipient)
          modal.find('#brand-name').val(brand_name)   
          var updated_brand_name = $('#brand-name').val();   
          
           //update the brand on form submit
          $('.updateBrand').submit(function(event)  {
              event.preventDefault();
              $('#submit').html('<i class="fa fa-spin fa-spinner"></i> Loading');
              name = $('#brand-name').val();
              console.log(name);
              //ajax request
                axios.post(url,{
                   _token : "{{ csrf_token() }}",
                   name: name
                   })
                  .then(function (response) {
                    $('#submit').hide();
                    $('.success-response').fadeIn(1000)
                    $('.success-response-text').text(response.data.success);
                    if(response.data.success){
                      setTimeout(() =>{
                      $('#editBrandModal').modal('hide')
                        location.reload()
                      }, 6000)
                    }
                     else{
                          $('.success-response-text').text(response.data.errors.name);
                          $('#submit').show();
                          $('#submit').html('Update Brand');
                     }                     
                    console.log(response);
                  })
                  .catch(function (error) {
                    // handle error
                    console.log(error);
                  })
          })
        })

        //delete the brand
        $('#deleteBrandModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('id') // Extract info from data-* attributes
          var url = button.data('url');
          console.log(recipient);
          console.log(url);
          $('.delete').html('<button class="btn btn-neutral text-dark go-ahead">Go Ahead !</button>');
          $('.go-ahead').click(function(e) {
          $('.delete').html('<button class="btn btn-neutral text-dark"><i class="fa fa-spin fa-spinner"></i> Loading..</button>');
            axios.get(url)
              .then(function (response) {
                setTimeout( ()=>{
                  $('#deleteBrandModal').modal('hide');
                  location.reload();
                   $('.delete').hide();
                   //$('.brand-).fadeOut(3000);
                   $('.brand-'+recipient).closest('tr').remove()
                    $('.delete').show();
                   $('.delete').html('<button class="btn btn-neutral text-dark go-ahead">Go Ahead !</button>');
                }, 3000);
                console.log(response);
              })
              .catch(function (error) {
                // handle error
                console.log(error);
              })
          })
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.modal-title').text('New message to ' + recipient)
          modal.find('.modal-body input').val(recipient)
        })

        //create brand
        $('#addBrandModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var url = button.data('url') // Extract info from data-* attributes
          var new_brand_name = $('input[type="text"].create_brand_new_name').val();
          console.log(new_brand_name)
           console.log(url)
          $('.CreateBrand').submit(function(event) {
             event.preventDefault();
             var new_brand_name = $('input[type="text"].create_brand_new_name').val();
             console.log(new_brand_name)
             $('#create-brand').html('<i class="fa fa-spin fa-spinner"></i> Loading')
              axios.post(url, {
                _token : '{{ csrf_token() }}',
                name : new_brand_name
              })
              .then(function(response) {
                if(response.data.success){
                  $('.success-response').show();
                   $('.create-response-text').text(response.data.success);
                  setTimeout( function(){
                     $('#addBrandModal').modal('hide');
                     location.reload()
                  }, 3000)
                }
                  if(response.data.errors.name){
                    $('.success-response').show();
                    $('#create-brand').html('Create Brand');
                    $('.create-response-text').text(response.data.errors.name[0])
                    console.log(response.data.errors.name[0])
                  }
              })
              .catch(function(error){
                 $('#create-brand').html('Create Brand');
                 // $('.create-response-text').text('something went wrong , Please try again or contact the developer')
              })
          })
          var modal = $(this)
        })
        

        //add the channel 
        $('#addNewChannel').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var url = button.data('url') // Extract info from data-* attributes
          console.log(url)
          var channel_name = $('input[type="text"].create_channel_new_name').val()
          console.log(channel_name)
          $('.CreateChannel').submit(function(event) {
                event.preventDefault();
                var channel_name = $('input[type="text"].create_channel_new_name').val()
                console.log(channel_name)
                $('#create-channel').html('<i class="fa fa-spin fa-spinner"></i> Loading');
                axios.post(url , {
                  token : "{{ csrf_token() }}",
                  name: channel_name
                })
                .then(function(response) {
                  console.log(response)
                  if(response.data.success){
                    $('.create-channel').hide();
                    $('.success-response').show();
                    $('.create-channel-response-text').text(response.data.success)
                    setTimeout(function(){
                      $('#addNewChannel').modal('hide');
                      location.reload()
                    }, 3000)
                  }
                  if(response.data.errors.name[0]){
                       $('.success-response').show();
                       $('.create-channel-response-text').text(response.data.errors.name[0])
                       $('.create-channel').html('Create Channel');
                  }
                })
              
          })
        })




        //add products
        $('#addProductsToCampaign').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var url = button.data('url') // Extract info from data-* attributes
          console.log(url)
          //console.log(name + units)
          $('.add_products_to_campaign').submit(function(event){
            var Productname = $('input[type="text"].Productname').val();
            var Productunits = $('input[type="text"].Productunits').val();
            if(Productunits == '' ){
              $('.success-response-text').text('One of the fields is empty, Pleas Cheack again');
            }else if(Productname == ''){
               $('.success-response-text').text('One of the fields is empty, Pleas Cheack again');
            }
              event.preventDefault();
             $('#saveCampaignProduct').html('<i class="fa fa-spin fa-spinner"></i> Loading')
                axios.post(url, {
                  _token: "{{ csrf_token() }}",
                  name: Productname,
                  units : Productunits
                })
                .then(function(response){
                  console.log(response)
                  $('.success-response-text').text(response.data.success);
                  $('.success-response').show();
                  setTimeout(function(){
                     $('#addProductsToCampaign').modal('hide');
                     var Productname = $('input[type="text"].Productname').val('');
                    var Productunits = $('input[type="text"].Productunits').val('');
                  }, 3000)
                  
                 
                    $('.list_for_product').prepend(''+
                        '<tr>'+
                    '<th scope="row">'+
                        '<div class="media align-items-center">'+
                            '<a href="#" class="avatar rounded-circle mr-3 bg-primary">'+
                                '<i class="fas fa-shopping-cart text-white"></i>'+
                            '</a>'+
                            '<div class="media-body">'+
                                '<span class="name mb-0 text-sm">'+ response.data.product.name +'</span>'+
                            '</div>'+
                        '</div>'+
                    '</th>'+
                    '<td class="budget">'+
                    response.data.product.units+
                    '</td>'+
                    '<td>'+
                        response.data.product.created_at+
                    '</td>'+
                    '<td>'+
                        '<button class="btn btn-neutral btn-small">'+
                            '<i class="fa fa-pen"></i>'+
                        '</button>'+
                    '</td>'+
                    '<td>'+
                        '<button class="btn btn-danger btn-small" data-url="/project/delete/'+ response.data.product.id +'/campaign/product">'+
                            '<i class="fa fa-trash"></i>'+
                        '</button>'+
                    '</td>'+
                '</tr>'

                    +'');

                })
                .catch(function(error){
                  console.log(error)
                })

             
          })
          var modal = $(this)
        })


        //edit product
           $('#editProductsToCampaign').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var url = button.data('url') // Extract info from data-* attributes
          var product_name = button.data('name');
          var product_units = button.data('units');
          console.log(url + product_name + product_units)
          $('input[type="text"].EditProductname').val(product_name);
          $('input[type="text"].EditProductunits').val(product_units);
          //console.log(name + units)
          $('.add_products_to_campaign').submit(function(event){
            var Productname = $('input[type="text"].EditProductname').val();
            var Productunits = $('input[type="text"].EditProductunits').val();
            if(Productunits == '' ){
              $('.success-response-text').text('One of the fields is empty, Pleas Cheack again');
            }else if(Productname == ''){
               $('.success-response-text').text('One of the fields is empty, Pleas Cheack again');
            }
              event.preventDefault();
             $('.updateProductLoading').html('<i class="fa fa-spin fa-spinner"></i> Loading')
                axios.post(url, {
                  _token: "{{ csrf_token() }}",
                  name: Productname,
                  units : Productunits
                })
                .then(function(response){
                  console.log(response)
                  $('.success-response-text').text(response.data.success);
                  $('.success-response').show();
                  $('.updateProductLoading').html('<i class="fa fa-spin fa-spinner"></i> Please wait')
                  setTimeout(function(){
                     $('#addProductsToCampaign').modal('hide');
                     var Productname = $('input[type="text"].EditProductname').val('');
                    var Productunits = $('input[type="text"].EditProductunits').val('');
                    location.reload()
                  }, 3000)

                })
                .catch(function(error){
                  console.log(error)
                })

             
          })
          var modal = $(this)
        })



        //adding partner to a campaign
        $('#addPartnersToCampaign').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var url = button.data('url') // Extract info from data-* 
          console.log(url)
          $('.addPartners').submit(function(event){
              event.preventDefault();
              var partner = $(".partner-name").val();
              var address = $('.partner-address').val();
              console.log(partner)
              if(partner == '' || address == ''){
                $('.partnerResponse').show()
                $('.success-response-text').text('field is empty');
              }else{
                $('.addPartnerLoading').html('<i class="fa fa-spin fa-spinner"></i> Loading')
                axios.post(url, {
                  _token : "{{ csrf_token() }}",
                  name : partner,
                  location : address
                })
                .then(function(response){
                    console.log(response)
                     $('.partnerResponse').show()
                     $('.success-response-text').text(response.data.success);
                     $('.newpartneradded').prepend(''+
                            '<tr>'+
                          '<th scope="row">'+
                              '<div class="media align-items-center">'+
                                  '<a href="#" class="avatar rounded-circle mr-3 bg-indigo">'+
                                      '<i class="fa fa-users"></i>'+
                                  '</a>'+
                                  '<div class="media-body">'+
                                      '<span class="name mb-0 text-sm">'+ response.data.partner.name +'</span>'+
                                  '</div>'+
                              '</div>'+
                          '</th>'+
                          '<td> '+ response.data.partner.location +'</td>'+
                          '<td>'
                              + response.data.partner.created_at +
                          '</td>'+
                          '<td>'+
                              '<button class="btn btn-neutral btn-small" data-url="/project/update/'+ response.data.partner.id +'/campaign/partner" data-name="'+ response.data.partner.name +'" data-address="'+ response.data.partner.location +'"  data-toggle="modal" data-target="#editPartnersToCampaign">'+
                                  '<i class="fa fa-pen"></i>'+
                              '</button>'+
                          '</td>'+
                          '<td>'+
                              '<button class="btn btn-danger btn-small" data-url="/project/delete/'+ response.data.partner.id +'/campaign/partner"  data-toggle="modal" data-target="#deleteBrandModal" data-id="'+ response.data.partner.id +'">'+
                                  '<i class="fa fa-trash"></i>'+
                              '</button>'+
                          '</td>'+
                      '</tr>'

                     +'')
                    setTimeout(function(){
                       $('#addPartnersToCampaign').modal("hide");
                       $(".partner-name").val('');
                       $('.addPartnerLoading').html('Add Partner');
                        $('.partnerResponse').hide()
                    }, 3000)
                }).catch(function(error){
                    console.log(error)
                     $('.partnerResponse').show()
                     $('.success-response-text').text('something went wrong , Please try agin');
                })
              }

          })
          var modal = $(this)
        })

        //editing partner for a cmapaign
            $('#editPartnersToCampaign').on('show.bs.modal', function (event) {
             var button = $(event.relatedTarget) // Button that triggered the modal
          var url = button.data('url') // Extract info from data-* 
          var partner_name = button.data('name')
          var partner_address = button.data('address')
          $('.edit-partner-name').val(partner_name)
          $('.edit-partner-address').val(partner_address)
          console.log(url + partner_name + partner_address)
          $('.editPartners').submit(function(event){
              event.preventDefault();
              var partner = $(".edit-partner-name").val();
              var address = $('.edit-partner-address').val();
              console.log(partner + ' '+ address )
              if(partner == '' || address == ''){
                $('.partnerResponse').show()
                $('.success-response-text').text('field is empty');
              }else{
                $('.editPartnerLoading').html('<i class="fa fa-spin fa-spinner"></i> Loading')
                console.log(partner)
                axios.post(url, {
                  _token : "{{ csrf_token() }}",
                  name : partner,
                  location: address
                })
                .then(function(response){
                    console.log(response)
                     $('.partnerResponse').show()
                     $('.success-response-text').text(response.data.success);
                      $('.editPartnerLoading').html('<i class="fa fa-spin fa-spinner"></i> Please Wait')
                    setTimeout(function(){
                       $('#editPartnersToCampaign').modal("hide");
                       $(".edit-partner-name").val('');
                       $('.editPartnerLoading').html('Add Partner');
                        $('.partnerResponse').hide()
                        location.reload()
                    }, 3000)
                })
                .catch(function(error){
                    console.log(error)
                     $('.partnerResponse').show()
                     $('.success-response-text').text('something went wrong , Please Reload the page and try agin');
                      $('.editPartnerLoading').html('Update Partner')
                      setTimeout(function(){
                        $('.partnerResponse').hide()
                        $('.success-response-text').hide()
                      }, 3000)
                })
              }

          })
          var modal = $(this)
        })


        //adding a target to the database
        $('#addTargetsToCampaign').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var url = button.data('url') // Extract info from data-* attributes
          console.log(url)

          $('.addTarget').submit(function(event){
            event.preventDefault();

            var target_name = $('.add-target-name').val();
            var target_unit = $('.add-target-unit').val();
            console.log(target_name+ target_unit)

            axios.post(url, {
              _token: "{{ csrf_token() }}",
              name: target_name,
              units: target_unit
            }).then(function(response){
              console.log(response)
               $('.newtargetadded').prepend(''+
                   '<tr>'+
                      '<th scope="row">'+
                          '<div class="media align-items-center">'+
                              '<a href="#" class="avatar rounded-circle mr-3 bg-warning">'+
                                  '<i class="fa fa-temperature-high"></i>'+
                              '</a>'+
                              '<div class="media-body">'+
                                  '<span class="name mb-0 text-sm">'+ response.data.target.product_name +'</span>'+
                              '</div>'+
                          '</div>'+
                      '</th>'+
                      '<td>'+
                          response.data.target.units +
                      '</td>'+
                      '<td>'+
                          response.data.target.created_at +
                      '</td>'+
                      '<td>'+
                          '<button class="btn btn-neutral btn-small">'+
                              '<i class="fa fa-pen"></i>'+
                          '</button>'+
                      '</td>'+
                      '<td>'+
                          '<button class="btn btn-danger btn-small"  data-url="/project/delete/'+ response.data.target.id +'/campaign/target"  data-toggle="modal" data-target="#deleteBrandModal" data-id="'+ response.data.target.id +'">'+
                              '<i class="fa fa-trash"></i>'+
                          '</button>'+
                      '</td>'+
                  '</tr>'+
              +'')
              $('.targetResponse').show();
              $(".target-response-text").text(response.data.success)
              $('.addTargetLoading').html('<i class="fa fa-spin fa-spinner"></i> Loading')
              setTimeout(function(){
                  $('.addTargetLoading').html('<i class="fa fa-spin fa-spinner"></i> Please Wait')
                  $('.addTargetLoading').html('Add Target')
                  $('#addTargetsToCampaign').modal('hide')
                  $('.targetResponse').hide();
                  $('.add-target-name').val('');
                  $('.add-target-unit').val('');
              }, 3000)
            }).catch(function(error){
                console.log(error);
            })
          })
          
        })

        //editing a target campaign
         $('#addTargetsToCampaign').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var url = button.data('url') // Extract info from data-* attributes
          var edit_target_name = button.data('name');
          var edit_target_unit = button.data('unit');
          $('.edit-target-name').val(edit_target_name);
          $('.edit-target-unit').val(edit_target_unit);
          console.log(url+edit_target_name+ edit_target_unit)
          //console.log(target_name)

          $('.editTarget').submit(function(event){
            event.preventDefault();
             var new_target_name = $('.edit-target-name').val();
             var new_target_unit = $('.edit-target-unit').val();
            
            console.log(edit_target_name+ edit_target_unit)
             $('.editTargetLoading').html('<i class="fa fa-spin fa-spinner"></i> Loading')
            axios.post(url, {
              _token: "{{ csrf_token() }}",
              name: new_target_name,
              units: new_target_unit
            }).then(function(response){
              console.log(response)
          
              $('.targetResponse').show();
              $(".target-response-text").text(response.data.success)
              setTimeout(function(){
                  $('.editTargetLoading').html('<i class="fa fa-spin fa-spinner"></i> Please Wait')
                  $('.editTargetLoading').html('Update Target')
                  $('#editTargetsToCampaign').modal('hide')
                  $('.targetResponse').hide();
                  $('.edit-target-name').val('');
                  $('.edit-target-unit').val('');
                  location.reload()
              }, 3000)
            }).catch(function(error){
                console.log(error);
                 $('.targetResponse').show();
                 $(".target-response-text").text('something went wrong , Please reload the page and try again ')
            })
          })
          
        })
         

          

        $('.projectLeadDetails').click( function(){
          var url = $(this).attr('data-url');
          console.log(url);
          window.location.href = url;
        })

       //activating and banning a sales rep
       $('#salesrep').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var url = button.data('url') // Extract info from data-* attributes
          var question = button.data('question')
          console.log(url)
          $('.pop_question').text(question)
          $('.pop_action').html('<button class="btn btn-neutral pop_approval"> Go Ahead !</button>')
          $('.pop_approval').click(function(){
          $('.pop_action').html('<button class="btn btn-neutral pop_approval"> <i class="fa fa-spin fa-spinner"></i> Loading...</button>')
            axios.get(url)
            .then(function(response){
              $('.activation-success').text(response.data.success)
             setTimeout(function(){
                $('.activation-success').text(response.data.success)
                $('.pop_action').html('<button class="btn btn-neutral"> Please wait...</button>')
                $('#salesrep').modal('hide')
                location.reload()
             }, 6000)
            })
            .catch(function(error){
               $('.pop_question').text(error)
               $('.activation-success').text('something went wrong , Please reload and try again')
            })
          })
          var modal = $(this)
        })



        var initial_value = $('.result').clone();// this is what i use to reset the html values to its original state when modal closes
        var initial_alert = $('.alert-info').clone();
        //assigning a campaign to a sales rep
        $('#assignSalesRep').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var pid = button.data('pid') // Extract info from data-* attributes
            var cid = button.data('cid')
            var url = button.data('url')
            console.log(cid+' '+pid+ '  '+url)
            axios.get(url)
            .then(function(response){
              $('.check_spinner').hide()
                console.log(response)
                response.data.users.forEach(loopFunction);

                function loopFunction(item, index){
                    console.log(index+' ' +item.name+' '+item.id)
                    $('.sales_rep_list').prepend(''+
                      '<tr>'+
                        '<td class="salesrep_name">'+ item.name +' </td>'+
                        '<td class="salesrep_status">'+ item.status+'</td>'+
                        '<td class="salesrep_add"><button data-userid="'+ item.id +'" class="btn btn-sm btn-primary add_to_assigned" data-url="/project/assign/salesrep/'+cid+'"  ><i class="fa fa-plus"></i> Assign to Campaign Partner </button></td>'+
                        '<tr class"assignment-spinner"><i class="fa fa-2x fa-sync fa-spin"></i></tr>'+
                      '</tr>'
                    +'')
                }

            $('.add_to_assigned').click(function(event){
                  $('div.assignment-spinner').show()
                  var user_id = $(this).attr('data-userid');
                  console.log(user_id);
                  var new_url = $(this).attr('data-url');
                  console.log(user_id + 'campaign id '+ cid + ' partner_id '+ pid + 'url is '+ new_url)
                  axios.post(new_url, {
                    _token : "{{ csrf_token() }}",
                    userid: user_id,
                    partnerid : pid
                  })
                    .then(function(response){
                      console.log(response)
                        $('.alert-info').text(response.data.success);
                        setTimeout(function(){
                           $('.assignment-spinner').hide()
                          $('.alert-info').replaceWith(initial_alert.clone());
                        }, 3000)
                    }).catch(function(error){
                      console.log(error)
                       $('.alert-info').text('something went wrong , Please referesh the page and try again');
                    })
                })
                //$('.add_to_assigned').click()
            })
            .catch(function(error){
              console.log(error)

            })
            var modal = $(this)
          })

             

          


          //after assigning the salerep , on close of the modal i immediately reset all the modal value to its original state
          $('#assignSalesRep').on('hide.bs.modal', function (event) {
               $('.check_spinner').show()
               $('.result').replaceWith(initial_value.clone());
          });
        


        $('.editProjectLeadDetails').click(function(){
          var url = $(this).attr('data-url');
          console.log(url);
          window.location.href = url;
        })

        $('#viewSingleCampaign').click(function(){
          var url = $(this).attr('data-url');
          console.log(url);
          window.location.href = url;
        })

        $('#singlesalesrep').click(function(){
           var url = $(this).attr('data-url');
            console.log(url);
            window.location.href = url;
        })

          $(function() {
            $('input[name="startDate"]').daterangepicker({
              opens: 'center',
              drops: 'up',
              }, function(start, end , label) {
              console.log("A new date selection was made: " + start.format('DD-MM-YYYY')+ ' to ' + end.format('DD-MM-YYYY'));
            });
          });

          $('#start_date').on('apply.daterangepicker', function(ev, picker) {
            $('#start_date').val(picker.startDate.format('DD-MM-YYYY'));
            $('#end_date').val(picker.endDate.format('DD-MM-YYYY'));
            $('#date_range_info').text('Campaign Start Date');
            $('#end_date_div').fadeIn('2000');
            $('#end_date').fadeIn(2000);
            console.log(picker.startDate.format('DD-MM-YYYY'));
            console.log(picker.endDate.format('DD-MM-YYYY'));
          })


          var max_fields_limit = 10; //set limit for maximum input fields
          var x = 1; //initialize counter for text box
          $('.add-input').click(function(e){ //click event on add more fields button having class add_more_button
              e.preventDefault();
              if(x < max_fields_limit){ //check conditions
                  x++; //counter increment
                  $('.products_container').append('<div><input type="text" class="form-control-sm form-control mr-0" id="product_name" placeholder="Product Name" name="products[]" style="width: 70%;margin-right: 0"><a class="remove_field text-light btn btn-danger btn-sm mb-3 mt-2" style="margin-left:10px;"><i class="fa fa-trash-alt text-light"></i></a></div>'); //add input field
              }
          });  
          $('.products_container').on("click",".remove_field", function(e){ //user click on remove text links
              e.preventDefault(); $(this).parent('div').remove(); x--;
          })



              var max_partner_limit = 10; //set limit for maximum input fields
          var y = 1; //initialize counter for text box
          $('.add-partner').click(function(e){ //click event on add more fields button having class add_more_button
              e.preventDefault();
              if(y < max_partner_limit){ //check conditions
                  y++; //counter increment
                  $('.partner_container').append('<div><input type="text" class="form-control form-control-sm mr-0" id="partner" placeholder="Partner Name" name="partner[]" style="width: 70%;margin-right: 0"><a class="remove_field text-light btn btn-danger btn-sm mb-3 mt-2" style="margin-left:10px;"><i class="fa fa-trash-alt text-light"></i></a></div>'); //add input field
              }
          });  
          $('.partner_container').on("click",".remove_field", function(e){ //user click on remove text links
              e.preventDefault(); $(this).parent('div').remove(); y--;
          })

          $('.viewSingleassignment').click(function(){
              var url = $(this).attr('data-url');
              window.location.href = url;
          })

          $('.updateReport').click(function(){
            var url = $(this).attr('data-url');
              window.location.href = url;
          })

          $('.collapse').collapse('toggle')

          $('#reportCommentModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var comment = button.data('comments') // Extract info from data-* attributes
            var modal = $(this)
            if(comment == '')
            {
               modal.find('.modal-body').text('No Comments were Added')
            }else{
              modal.find('.modal-body').text(comment)
            }

            
          })
@endauth

    })
</script>
</body>
</html>