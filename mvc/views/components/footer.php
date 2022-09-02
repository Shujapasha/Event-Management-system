<!--begin::Footer-->
<div id="kt_app_footer" class="app-footer">
	<!--begin::Footer container-->
	<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
		<!--begin::Copyright-->
		<div class="text-dark order-2 order-md-1">
			<span class="text-muted fw-semibold me-1">2022&copy;</span>
			<a href="#" target="_blank" class="text-gray-800 text-hover-primary">ICAAHS</a>
		</div>
		<!--end::Copyright-->
		<!--begin::Menu-->
		
		<!--end::Menu-->
	</div>
	<!--end::Footer container-->
</div>
<!--end::Footer-->
</div>
<!--end:::Main-->
<!--end::Help drawer-->
<!--end::Engage drawers-->
<!-- Modal -->

<div class="modal fade" tabindex="-1" id="kt_modal_1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Logout Account</h3>
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="fas fa-x"></span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <p>Do You Really want to logout?</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <a href="<?=base_url("signin/signout")?>"><button type="button" class="btn btn-primary">Logout</button></a>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
	<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
	<span class="svg-icon">
		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
			<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
			<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
		</svg>
	</span>
	<!--end::Svg Icon-->
</div>
<!--end::Scrolltop-->

	<!--begin::Javascript-->
	<script>var hostUrl = "<?php echo base_url('assets/frontend/index.html')?>";</script>
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="<?php echo base_url('assets/frontend/plugins/global/plugins.bundle.js')?>"></script>
	<script src="<?php echo base_url('assets/frontend/js/scripts.bundle.js')?>"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Vendors Javascript(used by this page)-->
	<script src="<?php echo base_url('assets/frontend/plugins/custom/fullcalendar/fullcalendar.bundle.js')?>"></script>
	
	<script src="<?php echo base_url('assets/frontend/plugins/custom/datatables/datatables.bundle.js')?>"></script>
	<!--end::Vendors Javascript-->
	<!--begin::Custom Javascript(used by this page)-->
	<script src="<?php echo base_url('assets/frontend/js/widgets.bundle.js')?>"></script>
	<script src="<?php echo base_url('assets/frontend/js/custom/widgets.js')?>"></script>
	<script src="<?php echo base_url('assets/frontend/js/custom/apps/chat/chat.js')?>"></script>
	<script src="<?php echo base_url('assets/frontend/js/custom/utilities/modals/upgrade-plan.js')?>"></script>
	<script src="<?php echo base_url('assets/frontend/js/custom/utilities/modals/create-app.js')?>"></script>
	<script src="<?php echo base_url('assets/frontend/js/custom/utilities/modals/new-target.js')?>"></script>
	<script src="<?php echo base_url('assets/frontend/js/custom/utilities/modals/users-search.js')?>"></script>
	<!--end::Custom Javascript-->
	<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>