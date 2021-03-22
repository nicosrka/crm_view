<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->
	<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
		<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Details-->
			<div class="d-flex align-items-center flex-wrap mr-2">
				<!--begin::Title-->
				<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Detalle del dato</h5>
				<!--end::Title-->
			</div>
			<!--end::Details-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<!--begin::Button-->
				<a href="#" class="btn btn-danger font-weight-bold">Volver</a>
				<!--end::Button-->
			</div>
			<!--end::Toolbar-->
		</div>
	</div>
	<!--end::Subheader-->
	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Row-->
			<div class="row">
				<div class="col-xl-4">

					<!--begin::Card-->
					<div class="card card-custom">
						<!--begin::Header-->
						<div class="card-header h-auto py-4">
							<div class="card-title">
								<h3 class="card-label">Juan Perez
									<span class="d-block text-muted pt-2 font-size-sm"><b>Ingresado el 2/3/2020</b></span>
								</h3>
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body py-4">
							<div class="form-group row my-2">
								<label class="col-4 col-form-label">Pais:</label>
								<div class="col-8">
									<span class="form-control-plaintext font-weight-bolder">Argentina</span>
								</div>
							</div>

							<div class="form-group row my-2">
								<label class="col-4 col-form-label">Telefono:</label>
								<div class="col-8">
									<span class="form-control-plaintext font-weight-bolder">1122223333</span>
								</div>
							</div>
							<div class="form-group row my-2">
								<label class="col-4 col-form-label">Email:</label>
								<div class="col-8">
									<span class="form-control-plaintext font-weight-bolder">
										test@ejemplo.com
									</span>
								</div>
							</div>
							<div class="form-group row my-2">
								<label class="col-4 col-form-label">Preferencia:</label>
								<div class="col-8">
									<span class="label label-dark label-inline mt-3">
										Telefono
									</span>
								</div>
							</div>
							<div class="form-group row my-2">
								<label class="col-4 col-form-label">Comentario:</label>
								<div class="col-8">
									<span class="form-control-plaintext">
										<span class="font-weight-bolder"><em>Me interesa el curso de blabla porque queria comenzar con blabla lorem</em></span>&#160;
								</div>
							</div>
							<div class="form-group row my-2">
								<label class="col-4 col-form-label">Curso de interes:</label>
								<div class="col-8">
									<span class="form-control-plaintext">
										<span class="font-weight-bolder">Curso de refrigeracion industrial</span>&#160;
								</div>
							</div>
							<div class="form-group row my-2">
								<label class="col-4 col-form-label">Horario de contacto:</label>
								<div class="col-8">
									<span class="form-control-plaintext">
										<span class="font-weight-bolder">Lunes, martes y jueves 18:30</span>&#160;
								</div>
							</div>
						</div>
						<!--end::Body-->
						<!--begin::Footer-->
						<!-- <div class="card-footer">
							<a href="#" class="btn btn-primary font-weight-bold mr-2">Actualizar estado</a>
						</div> -->
						<div class="card-footer">
							<a href="#" class="btn btn-primary font-weight-bold mr-2" onclick="swalfire();">Actualizar estado</a>
						</div>
						<!--end::Footer-->
					</div>
					<!--end::Card-->
				</div>
				<div class="col-xl-8">
					<!--begin::Card-->
					<div class="card card-custom gutter-b">

						<!--begin::Body-->
						<div class="card-body px-0">
							<div class="tab-content pt-5">
								<!--begin::Tab Content-->
								<div class="tab-pane active" id="kt_apps_contacts_view_tab_1" role="tabpanel">
									<div class="container">
										<form class="form">
											<div class="form-group">
												<textarea class="form-control form-control-lg form-control-solid" id="exampleTextarea" rows="3" placeholder="Escriba su mensaje"></textarea>
											</div>
											<div class="row">
												<div class="col">
													<a href="#" class="btn btn-light-primary font-weight-bold">Enviar</a>
												</div>
											</div>
										</form>
										<div class="separator separator-dashed my-10"></div>
										<!--begin::Timeline-->
										<div class="timeline timeline-3">
											<div class="timeline-items">
												<div class="timeline-item">
													<div class="timeline-media">
														<img alt="Pic" src="assets/media/users/default.jpg" />
													</div>
													<div class="timeline-content">
														<div class="d-flex align-items-center justify-content-between mb-3">
															<div class="mr-2">
																<a href="#" class="text-dark-75 text-hover-primary font-weight-bold">Nicolas</a>
															</div>
														</div>
														<p class="p-0">Hola vendedor, tene cuidado con este interesado porque tuvo un mal dia.</p>
													</div>
												</div>
											</div>
										</div>
										<!--end::Timeline-->
									</div>
								</div>
								<!--end::Tab Content-->
							</div>
						</div>
						<!--end::Body-->
					</div>
					<!--end::Card-->
				</div>
			</div>
			<!--end::Row-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Entry-->
</div>
<!--end::Content-->

<script>
	function swalfire() {
		Swal.fire({
			text: "Datos actualizados",
			icon: "success",
			buttonsStyling: false,
			showConfirmButton: false,
			timer: 2000
		})
	}
</script>