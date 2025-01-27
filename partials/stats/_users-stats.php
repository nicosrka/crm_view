<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
	<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
		<!--begin::Details-->
		<div class="d-flex align-items-center flex-wrap mr-2">
			<!--begin::Title-->
			<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Ranking ventas</h5>
			<input type="input" id="searchValue" placeholder="Vendedor">
			<button class="ml-5 btn btn-sm btn-success" onclick="search()">Buscar
				<span class="svg-icon svg-icon-white svg-icon">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<rect x="0" y="0" width="24" height="24" />
							<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
							<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
						</g>
					</svg>
				</span>
			</button>
			<!--end::Title-->
		</div>
		<!--end::Details-->
	</div>
</div>

<!--begin::Table-->
<table class="table table-hover">
	<thead>
		<tr>
			<th class="text-center" scope="col">Pais</th>
			<th class="text-center" scope="col">Vendedor</th>
			<th class="text-center" scope="col">Leads pedidos</th>
			<th class="text-center" scope="col">Ventas realizadas</th>
		</tr>
	</thead>
	<tbody id="tbody-leads">
		<?php
		foreach ($users as $user) { ?>
			<tr id="tr<?= $user['id'] ?>" onclick="window.location='./index.php?user_sales=<?= $user['id'] ?>'">
				<td class="text-center align-middle">
					<div class="symbol symbol-50 symbol-light">
						<span class="symbol-label">
							<img src="assets/media/country/<?= $user['country'] ?>.png" class="h-50 align-self-center" alt="" />
						</span>
					</div>
				</td>
				<td class="text-center align-middle">
					<label class="text-dark-75 font-weight-bolder text-primary mb-1 font-size-lg"><?= $user['name'] . ' ' . $user['lastname'] ?></label>
				</td>
                <td class="text-center align-middle">
					<label class="text-dark-75 font-weight-bolder ml-2 label label-lg bg-transparent border border-dark label-inline font-size-lg"><?= $user['lead_counter'] ?></label>
				</td>
				<td class="text-center align-middle">
					<label class="text-dark-75 font-weight-bolder ml-2 label label-lg bg-transparent border border-dark label-inline font-size-lg">
                    <?php
                    foreach ($sales as $sale) {
                        if ($sale['id_user'] === $user['id']) {
                            echo $sale['sales_count'];
                        }
                    } ?>
				</td>
			</tr>
		<?php } ?>
	</tbody>
</table>
<!--end::Table-->

<script>
	<?php //array traido desde PHP pasado a JS para utilizar en el buscador
	$sales_js = json_encode($users);
	echo "let leads_array = " . $sales_js . ";\n";
	?>
	function search() {
		let searchValue = $('#searchValue').val().toLowerCase();

		leads_array.forEach(lead => {
			if (lead['name'].toLowerCase().includes(searchValue)) {
				 $('#tr' + lead['id']).show();
			}
			else if (lead['lastname'].toLowerCase().includes(searchValue)) {
				$('#tr' + lead['id']).show();
			}
			else {
				$('#tr' + lead['id']).hide();
			}
		});
	}
</script>