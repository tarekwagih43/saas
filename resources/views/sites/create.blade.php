<x-base-layout>
    <div class="container mb-8">
        <div class="card">
            <div class="card-body">
                <h2 class="text-dark mb-8">Get Started</h2>
                <!--begin::Stepper-->
                <div class="stepper stepper-pills stepper-column d-flex flex-column flex-lg-row" id="create_stepper">
                    <!--begin::Aside-->
                    <div class="d-flex flex-row-auto w-100 w-lg-300px">
                        <!--begin::Nav-->
                        <div class="stepper-nav flex-cente">
                            <!--begin::Step 1-->
                            <div class="stepper-item me-5 current" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->

                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">1</span>
                                </div>
                                <!--end::Icon-->

                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">
                                        Define your site
                                    </h3>

                                    <div class="stepper-desc">
                                        Setup your site defintion
                                    </div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 1-->

                            <!--begin::Step 2-->
                            <div class="stepper-item me-5" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->

                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">2</span>
                                </div>
                                <!--begin::Icon-->

                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">
                                        Set the settings
                                    </h3>

                                    <div class="stepper-desc">
                                        Configure your site
                                    </div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 2-->
                        </div>
                        <!--end::Nav-->
                    </div>

                    <!--begin::Content-->
                    <div class="flex-row-fluid">
                        <!--begin::Form-->
                        <form id="site-form" class="form w-lg-500px mx-auto" novalidate="novalidate" autocomplete="off">
                            @csrf
                            <!--begin::Group-->
                            <div class="mb-5">
                                <!--begin::Step 1-->
                                <div class="flex-column current" data-kt-stepper-element="content">
                                    <h3 class="text-dark mb-8">Who owns the site?</h3>
                                    <!-- Begin Site Type -->
                                    <div class="mb-10">
                                        <div class="form-check form-check-custom form-check-solid form-check-lg">
                                            <input name="type" class="form-check-input" type="radio" value="mine" id="radioMine" disabled>
                                            <label class="form-check-label" for="radioMine">
                                                This site is mine; it will count towards my site allowance
                                                <br/>
                                                You have 0 of 1 sites available. Delete site or <a href="#">Upgrade your plan</a>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="mb-10">
                                        <div class="form-check form-check-custom form-check-solid form-check-lg">
                                            <input name="type" class="form-check-input" type="radio" value="transferable" id="radioTransferable">
                                            <label class="form-check-label" for="radioTransferable">
                                                This site is transferable; it will be moved to someone else's account.
                                                <br/>
                                                You'll be transferring the site to a client or collaborator
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End Site Type -->
                                    <hr/>
                                    <!-- Start: Site Creation Way -->
                                    <div class="mb-5">
                                        <h3 class="text-dark mb-8">How do you like to start?</h3>
                                        <div class="mb-10">
                                            <div class="form-check form-check-custom form-check-solid form-check-lg">
                                                <input name="start" class="form-check-input" type="radio" value="blank" id="blank" checked>
                                                <label class="form-check-label" for="blank">
                                                    Start with a blank site
                                                    <br/>
                                                    Add an empty Mautic site pre-installed
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-10">
                                            <div class="form-check form-check-custom form-check-solid form-check-lg muted">
                                                <input name="start" class="form-check-input" type="radio" value="copyEnv" id="copyEnv">
                                                <label class="form-check-label" for="copyEnv">
                                                    Copy an existing environment to a new site
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mb-10">
                                            <div class="form-check form-check-custom form-check-solid form-check-lg muted">
                                                <input name="start" class="form-check-input" type="radio" value="moveEnv" id="moveEnv">
                                                <label class="form-check-label" for="moveEnv">
                                                    Move an existing environment to a new site
                                                </label>
                                            </div>
                                        </div>



                                    </div>
                                </div>
                                <!--begin::Step 1-->

                                <!--begin::Step 2-->
                                <div class="flex-column" data-kt-stepper-element="content">
                                    <h3>Site name and first environment</h3>
                                    <p>A site is a group of up to three environments (Production, Staging, Development) under one name</p>
                                    <div class="mb-10">
                                        <div class="form-group fv-row">
                                            <label>Site Name</label>
                                            <input name="sitename" type="text" class="form-control form-control-solid" placeholder=""/>
{{--                                            <span class="form-text text-muted">Site name is unique</span>--}}
                                        </div>
                                    </div>
                                    <div class="mb-10">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-group fv-row">
                                                    <label>Environment Name</label>
                                                    <div class="col d-flex gap-3 align-items-center">
                                                        <input name="environmentname" type="text" class="w-50 form-control form-control-solid" placeholder=""/>
                                                        <p class="m-0">.steercampaign.com</p>
                                                    </div>
{{--                                                    <span class="form-text text-muted">Enviroment name is unique</span>--}}
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="mb-10">
                                        <h3>Environment Type</h3>
                                        <p>Create additional environments later from the site overview page</p>
                                    </div>
                                    <div class="mb-10">
                                        <div class="form-check form-check-custom form-check-solid form-check-lg">
                                            <input name="environment" class="form-check-input" type="radio" value="prd" id="radioProduction" checked>
                                            <label class="form-check-label" for="radioProduction">
                                                <strong><span class="badge badge-success">PRD</span> Production (live)</strong><br/>
                                                <p>Host a public site</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-10">
                                        <div class="form-check form-check-custom form-check-solid form-check-lg">
                                            <input name="environment" class="form-check-input" type="radio" value="stg" id="radioStaging">
                                            <label class="form-check-label" for="radioStaging">
                                                <strong><span class="badge badge-light-success">STG</span> Staging (optional sandbox)</strong><br/>
                                                <p>Review and test before deploying to Production</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-10">
                                        <div class="form-check form-check-custom form-check-solid form-check-lg">
                                            <input name="environment" class="form-check-input" type="radio" value="dev" id="radioDev">
                                            <label class="form-check-label" for="radioDev">
                                                <strong><span class="badge badge-light-dark">DEV</span>Development (optional sandbox)</strong><br/>
                                                <p>Build and experiment before deploying to Staging or Production</p>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <!--begin::Step 2-->
                            </div>
                            <!--end::Group-->

                            <!--begin::Actions-->
                            <div class="d-flex flex-stack">
                                <!--begin::Wrapper-->
                                <div class="me-2">
                                    <button type="button" class="btn btn-light btn-active-light-primary" data-kt-stepper-action="previous">
                                        Back
                                    </button>
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Wrapper-->
                                <div>
                                    <button id="btn-submit" type="button" class="btn btn-primary" data-kt-stepper-action="submit">
                                        <span class="indicator-label">
                                            Submit
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>

                                    <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                                        Continue
                                    </button>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                </div>
                <!--end::Stepper-->
            </div>
        </div>
    </div>

@section('scripts')

<style>
    .form-control.is-valid{border-color:#50CD89 !important;}
    .form-control.is-invalid{border-color: #F1416C !important;}
    .fv-plugins-icon[data-field='sitename'],
    .fv-plugins-icon[data-field='environmentname']
    {top: 22px !important;}
</style>
<script>
var element = document.querySelector("#create_stepper");
// Initialize Stepper
var stepper = new KTStepper(element);

// Handle next step
stepper.on("kt.stepper.next", function (stepper) {
    stepper.goNext(); // go next step
});

// Handle previous step
stepper.on("kt.stepper.previous", function (stepper) {
    stepper.goPrevious(); // go previous step
});

// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
var validator = FormValidation.formValidation(
    document.getElementById('site-form'),
    {
        fields: {
            'sitename': {
                validators:{
                    stringLength: {
                        min:1,
                        max:40,
                        message: '1 to 40 characters'
                    },
                    remote:{
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $("input[name='_token']").val(),
                        },
                        url: '/1/form-validation',
                        message: 'Site name is unique',
                    }
                }
            },
            'environmentname': {
                validators:{
                    stringLength: {
                        min:3,
                        max:14,
                        message: '3 to 14 characters'
                    },
                    regexp:{
                        regexp: /^[a-zA-Z0-9]*$/i,
                        message: 'Only letters and numbers'
                    },
                    remote:{
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $("input[name='_token']").val(),
                        },
                        url: '/1/form-validation',
                        message: 'Name is available',
                    }
                }
            }
        },
        plugins: {
            trigger: new FormValidation.plugins.Trigger(),
            submitButton: new FormValidation.plugins.SubmitButton(),
            icon: new FormValidation.plugins.Icon({
                valid: 'fa fa-check',
                invalid: 'fa fa-times',
                validating: 'fa fa-refresh',
            }),
            bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: '.fv-row',
                eleInvalidClass: 'is-invalid',
                eleValidClass: 'is-valid'
            })
        },
    });

// Submit button handler
const submitButton = document.getElementById('btn-submit');
submitButton.addEventListener('click', function (e) {
    // Prevent default button action
    e.preventDefault();
    // Validate form before submit
    if (validator) {
        validator.validate().then(function (status) {
            console.log('validated!');

            if (status == 'Valid') {
                // Show loading indication
                submitButton.setAttribute('data-kt-indicator', 'on');

                // Disable button to avoid multiple click
                submitButton.disabled = true;

                // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                setTimeout(function () {
                    // Remove loading indication
                    submitButton.removeAttribute('data-kt-indicator');

                    // Enable button
                    submitButton.disabled = false;

                    // Show popup confirmation
                    Swal.fire({
                        text: "Form has been successfully submitted!",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });

                    //form.submit(); // Submit form
                }, 2000);
            }
        });
    }
});
// $(document).ready(function() {
//     $('#btn-submit').click(function (e) {
//
//         $('#btn-submit').attr("data-kt-indicator","on");
//         e.preventDefault();
//
//         var _token = $("input[name='_token']").val();
//         var type = $("input[name='type']:checked").val();
//         var start = $("input[name='start']:checked").val();
//         var sitename = $("input[name='sitename']").val();
//         var environmentname = $("input[name='environmentname']").val();
//         var environment = $("input[name='environment']").val();
//
//         axios.post('/form-validation', {
//                 type: type,
//                 start: start,
//                 sitename: sitename,
//                 environmentname: environmentname,
//                 environment: environment
//             },
//             {
//                 headers: {
//                     'Content-Type': 'application/json',
//                     'X-CSRF-TOKEN': _token,
//                     'X-Requested-With': 'XMLHttpRequest',
//                 }
//             }).then(function(response){
//                 $('#btn-submit').attr("data-kt-indicator","off");
//         }).catch(function(error){
//             $('#btn-submit').attr("data-kt-indicator","off")
//             console.log(error.response.data.errors)
//             var err = error.response.data.errors;
//             if('sitename' in err){
//                 $('#siteerr').addClass('text-danger');
//                 $('#siteerr').removeClass('text-muted');
//                 $('#siteerr').text(err['sitename']);
//             }if('environmentname' in err){
//                 $('#enverr').addClass('text-danger');
//                 $('#enverr').removeClass('text-muted');
//                 $('#enverr').text(err['environmentname']);
//             }
//
//         })
//     });
// });
</script>
@endsection
</x-base-layout>
