<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Details-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Nuevo vendedor</h5>
                <!--end::Title-->
            </div>
            <!--end::Details-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom card-transparent">
                <div class="card-body p-0">
                    <!--begin::Wizard-->
                    <div class="wizard wizard-4" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="true">
                        <!--begin::Card-->
                        <div class="card card-custom card-shadowless rounded-top-0">
                            <!--begin::Body-->
                            <div class="card-body p-0">
                                <div class="row justify-content-center py-8 px-8 py-lg-15 px-lg-10">
                                    <div class="col-xl-12 col-xxl-10">
                                        <!--begin::Wizard Form-->
                                        <form class="form" id="kt_form">
                                            <div class="row justify-content-center">
                                                <div class="col-xl-9">
                                                    <!--begin::Wizard Step 1-->
                                                    <div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
                                                        <!--begin::Group-->
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label text-left">Foto</label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                <div class="image-input image-input-outline" id="kt_user_add_avatar">
                                                                    <div class="image-input-wrapper" style="background-image: url(assets/media/users/default.jpg)"></div>
                                                                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Cambiar foto">
                                                                        <i class="fa fa-pen icon-sm text-muted"></i>
                                                                        <input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" />
                                                                        <input type="hidden" name="profile_avatar_remove" />
                                                                    </label>
                                                                    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                                                        <i class="ki ki-bold-close icon-xs text-muted"></i>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Group-->
                                                        <!--begin::Group-->
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Usuario</label>
                                                            <div class="col-lg-9 col-xl-5">
                                                                <input class="form-control form-control-solid form-control-lg" name="username" type="text" value="" />
                                                            </div>
                                                        </div>
                                                        <!--end::Group-->
                                                        <!--begin::Group-->
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Nombre</label>
                                                            <div class="col-lg-9 col-xl-5">
                                                                <input class="form-control form-control-solid form-control-lg" name="firstname" type="text" value="" />
                                                            </div>
                                                        </div>
                                                        <!--end::Group-->
                                                        <!--begin::Group-->
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Apellido</label>
                                                            <div class="col-lg-9 col-xl-5">
                                                                <input class="form-control form-control-solid form-control-lg" name="lastname" type="text" value="" />
                                                            </div>
                                                        </div>
                                                        <!--end::Group-->
                                                        <!--begin::Group-->
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Telefono</label>
                                                            <div class="col-lg-9 col-xl-5">
                                                                <div class="input-group input-group-solid input-group-lg">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">
                                                                            <i class="la la-phone"></i>
                                                                        </span>
                                                                    </div>
                                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="phone" value="" placeholder="Telefono" />
                                                                </div>
                                                                <span class="form-text text-muted">Codigo de pais/area y numero</span>
                                                            </div>
                                                        </div>
                                                        <!--end::Group-->
                                                        <!--begin::Group-->
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Email</label>
                                                            <div class="col-lg-9 col-xl-5">
                                                                <div class="input-group input-group-solid input-group-lg">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">
                                                                            <i class="la la-at"></i>
                                                                        </span>
                                                                    </div>
                                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="email" value="" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Group-->
                                                        <div class="form-group row text-right">
                                                            <button type="button" id="next-step" onclick="swalfire();" class="btn btn-primary font-weight-bolder px-9 py-4" data-wizard-type="action-next">Dar de alta</button>
                                                        </div>
                                                    </div>
                                                    <!--end::Wizard Step 1-->
                                                </div>
                                            </div>
                                        </form>
                                        <!--end::Wizard Form-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Wizard-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->

<script>
    function swalfire() {
        Swal.fire({
            title: "Esta por dar de alta un nuevo vendedor",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Dar de alta",
            cancelButtonText: "Cancelar",
            reverseButtons: true
        }).then(function(result) {
            if (result.value) {
                Swal.fire({
                    text: "Alta realizada con exito!",
                    icon: "success",
                    buttonsStyling: false,
                    showConfirmButton: false,
                    timer: 2000
                })
            }
        });
    }
</script>