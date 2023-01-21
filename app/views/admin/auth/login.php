<!DOCTYPE html>
<!--
Author: IMER
Product Name: IMER Yönetim
Website: http://www.imeryazilim.com
-->
<html lang="en">
<!--begin::Head-->

<head>
	<title>IMER Yönetim</title>
	<meta charset="utf-8" />
	<meta name="description" content="IMER yönetim sayfası" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" href="<?= ADMIN_ASSETS ?>media/logos/favicon.ico" />
	<!--begin::Fonts(mandatory for all pages)-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
	<link href="<?= ADMIN_ASSETS ?>plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?= ADMIN_ASSETS ?>css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
	<!--begin::Theme mode setup on page load-->
	<script>
		var defaultThemeMode = "light";
		var themeMode;
		if (document.documentElement) {
			if (document.documentElement.hasAttribute("data-theme-mode")) {
				themeMode = document.documentElement.getAttribute("data-theme-mode");
			} else {
				if (localStorage.getItem("data-theme") !== null) {
					themeMode = localStorage.getItem("data-theme");
				} else {
					themeMode = defaultThemeMode;
				}
			}
			if (themeMode === "system") {
				themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
			}
			document.documentElement.setAttribute("data-theme", themeMode);
		}
	</script>



	<div class="d-flex flex-column flex-root" id="kt_app_root">
		<!--begin::Page bg image-->
		<style>
			body {
				background-image: url('<?= ADMIN_ASSETS ?>media/auth/bg4.jpg');
			}

			[data-theme="dark"] body {
				background-image: url('<?= ADMIN_ASSETS ?>media/auth/bg4-dark.jpg');
			}
		</style>
		<!--end::Page bg image-->
		<!--begin::Authentication - Sign-in -->
		<div class="d-flex flex-column flex-column-fluid flex-lg-row">
			<!--begin::Aside-->
			<div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
				<!--begin::Aside-->
				<div class="d-flex flex-center flex-lg-start flex-column">
					<!--begin::Logo-->
					<a href="<?= ADMIN_URL ?>" class="mb-7">
						<img alt="Logo" src="<?= ADMIN_ASSETS ?>media/logos/custom-3.svg" />
					</a>
					<!--end::Logo-->
					<!--begin::Title-->
					<h2 class="text-white fw-normal m-0">Branding tools designed for your business</h2>
					<!--end::Title-->
				</div>
				<!--begin::Aside-->
			</div>
			<!--begin::Aside-->
			<!--begin::Body-->
			<div class="d-flex flex-center w-lg-50 p-10">
				<!--begin::Card-->
				<div class="card rounded-3 w-md-550px">
					<!--begin::Card body-->
					<div class="card-body p-10 p-lg-20">
						<!--begin::Form-->
						<form class="form w-100" id="kt_sign_in_form">
							<!--begin::Heading-->
							<div class="text-center mb-11">
								<!--begin::Title-->
								<h1 class="text-dark fw-bolder mb-3">Yönetim Paneli</h1>
								<!--end::Title-->
								<!--begin::Subtitle-->
								<div class="text-gray-500 fw-semibold fs-6"><?php print_r($this->session->getAll()) ?></div>
								<!--end::Subtitle=-->
							</div>
							<!--begin::Heading-->
							<!--begin::Login options-->
							<!--end::Login options-->
							<!--begin::Separator-->
							<!--end::Separator-->
							<!--begin::Input group=-->
							<div class="fv-row mb-8">
								<!--begin::Email-->
								<input type="text" placeholder="Email" name="email" autocomplete="on" class="form-control bg-transparent" />
								<!--end::Email-->
							</div>
							<!--end::Input group=-->
							<div class="fv-row mb-3">
								<!--begin::Password-->
								<input type="password" placeholder="Password" name="password" autocomplete="on" class="form-control bg-transparent" />
								<!--end::Password-->
							</div>
							<!--end::Input group=-->
							<!--begin::Wrapper-->
							<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
								<div></div>
								<!--begin::Link-->
								<a href="reset-password.html" class="link-primary">Forgot Password ?</a>
								<!--end::Link-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Submit button-->
							<div class="d-grid mb-10">
								<button type="button" name="girisButon" class="btn btn-primary">
									Giriş Yap
								</button>
							</div>
							<!--end::Submit button-->
							<!--begin::Sign up-->
							<div class="text-gray-500 text-center fw-semibold fs-6">Not a Member yet?
								<a href="sign-up.html" class="link-primary">Sign up</a>
							</div>
							<!--end::Sign up-->
						</form>
						<!--end::Form-->
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->
			</div>
			<!--end::Body-->
		</div>
		<!--end::Authentication - Sign-in-->
	</div>
	<!--end::Root-->
	<!--begin::Javascript-->
	<script>
		var hostUrl = "<?= ADMIN_URL ?>";
	</script>
	<!--begin::Global Javascript Bundle(mandatory for all pages)-->
	<script src="<?= ADMIN_ASSETS ?>plugins/global/plugins.bundle.js"></script>
	<script src="<?= ADMIN_ASSETS ?>js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--begin::Custom Javascript(used for this page only)-->
	<!-- <script src="<?= ADMIN_ASSETS ?>js/custom/authentication/sign-in/general.js"></script> -->
	<!--end::Custom Javascript-->
	<!--end::Javascript-->


</body>
<!--end::Body-->

</html>
<script>
	var form = document.querySelector('#kt_sign_in_form');
	validator = FormValidation.formValidation(
		form, {
			fields: {
				'email': {
					validators: {
						regexp: {
							regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
							message: 'Geçerli bir e-posta adresi giriniz',
						},
						notEmpty: {
							message: 'E-Posta adresi zorunludur'
						}
					}
				},
				'password': {
					validators: {
						notEmpty: {
							message: 'Şifre zorunludur'
						}
					}
				}
			},
			plugins: {
				trigger: new FormValidation.plugins.Trigger(),
				bootstrap: new FormValidation.plugins.Bootstrap5({
					rowSelector: '.fv-row',
					eleInvalidClass: '', // comment to enable invalid state icons
					eleValidClass: '' // comment to enable valid state icons
				})
			}
		}
	);
	$(document).ready(() => {
		$("button[name=girisButon]").on("click", () => {
			validator.validate().then(function(status) {
				if (status == "Valid") {
					formdata = $("#kt_sign_in_form").serializeArray();
					$.ajax({
						url: "<?= ADMIN_URL ?>auth/l",
						type: 'POST',
						data: formdata,
						success: function(e) {
							//console.log(e);
							console.log(e);
							var obj = JSON.parse(e);
							if (obj.type == "success") {
								Swal.fire({
									text: obj.message,
									icon: obj.type,
									confirmButtonText: "Tamam",
								});
								setTimeout(function() {
									window.location.href = "<?= ADMIN_URL ?>";
								}, 2000);
							}else{
								Swal.fire({
									text: obj.message,
									icon: obj.type,
									confirmButtonText: "Tamam",
								});
							}
						}
					});
				} else {
					Swal.fire({
						text: "Lütfen gerekli alanları doldurunuz!",
						icon: "warning",
						confirmButtonText: "Tamam",
					});
				}
			});
		});
	});
</script>